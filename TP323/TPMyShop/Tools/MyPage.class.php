<?php

namespace Tools;
/**
 * Class MyPage 分页类
 * @package core
 */
class MyPage
{
    private $totalCount; //数据表中总记录数
    private $pageSize; //每页显示行数
    private $limit;//sql分页limit子句
    private $uri;
    private $totalPage; //页数
    private $config=array('header'=>"个记录", "prev"=>"上一页", "next"=>"下一页", "first"=>"首 页", "last"=>"尾 页");
    private $linkNum=8;//分页相关按钮数目设置
    /*
     * $total
     * $listRows
     */
    public function __construct($totalCount, $pageSize=10, $pageURI=""){
        $this->totalCount=$totalCount;
        $this->pageSize=$pageSize;
        $this->uri=$this->getUri($pageURI);
        $this->pageIndex=!empty($_GET["pageIndex"]) ? $_GET["pageIndex"] : 1;
        $this->totalPage=ceil($this->totalCount/$this->pageSize);
        $this->limit=$this->setLimit();
    }


    private function setLimit(){
        return "Limit ".($this->pageIndex-1)*$this->pageSize.", {$this->pageSize}";
    }

    private function getUri($pageURI){
        $url=$_SERVER["REQUEST_URI"].(strpos($_SERVER["REQUEST_URI"], '?')?'':"?").$pageURI;
        $parse=parse_url($url);

        if(isset($parse["query"])){
            parse_str($parse['query'],$params);
            unset($params["pageIndex"]);
            $url=$parse['path'].'?'.http_build_query($params);

        }
        return $url;
    }

    function __get($args){
        if($args=="limit")
            return $this->limit;
        else
            return null;
    }

    private function start(){
        if($this->totalCount==0)
            return 0;
        else
            return ($this->pageIndex-1)*$this->pageSize+1;
    }

    private function end(){
        return min($this->pageIndex*$this->pageSize,$this->totalCount);
    }

    private function first(){
        $html = "";
        if($this->pageIndex==1)
            $html.='';
        else
            $html.="&nbsp;&nbsp;<a href='{$this->uri}&pageIndex=1'>{$this->config["first"]}</a>&nbsp;&nbsp;";

        return $html;
    }

    private function prev(){
        $html = "";
        if($this->pageIndex==1)
            $html.='';
        else
            $html.="&nbsp;&nbsp;<a href='{$this->uri}&pageIndex=".($this->page-1)."'>{$this->config["prev"]}</a>&nbsp;&nbsp;";

        return $html;
    }

    private function pageList(){
        $linkPage="";

        $inum=floor($this->linkNum/2);

        for($i=$inum; $i>=1; $i--){
            $pageIndex=$this->pageIndex-$i;

            if($pageIndex<1)
                continue;

            $linkPage.="&nbsp;<a href='{$this->uri}&pageIndex={$pageIndex}'>{$pageIndex}</a>&nbsp;";

        }

        $linkPage.="&nbsp;{$this->pageIndex}&nbsp;";


        for($i=1; $i<=$inum; $i++){
            $pageIndex=$this->pageIndex+$i;
            if($pageIndex<=$this->totalPage)
                $linkPage.="&nbsp;<a href='{$this->uri}&pageIndex={$pageIndex}'>{$pageIndex}</a>&nbsp;";
            else
                break;
        }

        return $linkPage;
    }

    private function next(){
        $html = "";
        if($this->pageIndex==$this->totalPage)
            $html.='';
        else
            $html.="&nbsp;&nbsp;<a href='{$this->uri}&pageIndex=".($this->pageIndex+1)."'>{$this->config["next"]}</a>&nbsp;&nbsp;";

        return $html;
    }

    private function last(){
        $html = "";
        if($this->pageIndex==$this->totalPage)
            $html.='';
        else
            $html.="&nbsp;&nbsp;<a href='{$this->uri}&pageIndex=".($this->totalPage)."'>{$this->config["last"]}</a>&nbsp;&nbsp;";

        return $html;
    }

    private function goPage(){
        return '&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var pageIndex=(this.value>'.$this->totalPage.')?'.$this->totalPage.':this.value;location=\''.$this->uri.'&pageIndex=\'+pageIndex+\'\'}" value="'.$this->pageIndex.'" style="width:25px"><input type="button" value="GO" onclick="javascript:var pageIndex=(this.previousSibling.value>'.$this->totalPage.')?'.$this->totalPage.':this.previousSibling.value;location=\''.$this->uri.'&pageIndex=\'+pageIndex+\'\'">&nbsp;&nbsp;';
    }

    function fpage($display=array(0,1,2,3,4,5,6,7,8)){
        $html[0]="&nbsp;&nbsp;共有<b>{$this->totalCount}</b>{$this->config["header"]}&nbsp;&nbsp;";
        $html[1]="&nbsp;&nbsp;每页显示<b>".($this->end()-$this->start()+1)."</b>条，本页<b>{$this->start()}-{$this->end()}</b>条&nbsp;&nbsp;";
        $html[2]="&nbsp;&nbsp;<b>{$this->pageIndex}/{$this->totalPage}</b>页&nbsp;&nbsp;";

        $html[3]=$this->first();
        $html[4]=$this->prev();
        $html[5]=$this->pageList();
        $html[6]=$this->next();
        $html[7]=$this->last();
        $html[8]=$this->goPage();
        $fpage='';
        foreach($display as $index){
            $fpage.=$html[$index];
        }
        return $fpage;
    }
}