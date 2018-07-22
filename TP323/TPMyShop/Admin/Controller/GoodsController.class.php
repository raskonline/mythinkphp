<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-10
 * Time: 22:59
 */

namespace Admin\Controller;


use Model\GoodsModel;
use Think\Image;
use Think\Upload;


class GoodsController extends BaseController
{
    /**展示商品列表*/
    public function listgoods()
    {
        $goodsModel = new GoodsModel();
        //执行原生的SQL语句
        //$sql="select * from sw_goods";
        //$goods=$goodsModel->query($sql);//增删改使用execute
        //是M方法创建模型，调用Model中的方法
        //$m= M('goods');
        //$goods=$m->select();
        //var_dump($goods);
        //$goodsModel->where("goods_price > 1000");
        //$goodsModel->field("goods_id,goods_price");//投影查询
        //$goodsModel->order("goods_price desc");
        $goods = $goodsModel->order("goods_id desc")->select();
        $this->assign('goods', $goods);
        $this->display();
    }

    /**添加商品*/
    public function addgoods()
    {
        $goodsModel = new GoodsModel();
        if (!empty($_POST)) {
            //图片处理
            if ($_FILES['goods_img']['error'] == 0) {//上传成功
                $config = [
                    'rootPath' => 'Public/Uploads/', //保存根路径
                ];
                $uploads = new Upload($config);
                $flag = $uploads->uploadOne($_FILES['goods_img']);//上传单张图片
                //拼接图片路径
                $filePath = $uploads->rootPath . $flag['savepath'] . $flag['savename'];
                //大图片地址写入POST数组，待写入数据库
                $_POST['goods_big_img'] = $filePath;

                //制作缩略图
                $image=new Image();
                $image->open($filePath);
                $image->thumb(100,100/$image->width()*$image->height());//等比例缩放
                $smallImageFilePath=$uploads->rootPath . $flag['savepath'] .'s_'. $flag['savename'];//名字和大图类似，加前缀“s_”
                $image->save($smallImageFilePath);
                //小图片地址写入POST数组，待写入数据库
                $_POST['goods_small_img'] = $smallImageFilePath;
            }

            $result = $goodsModel->add($_POST);
            if ($result) {
                $this->redirect("listgoods", array(), 2, "<h1>:)</h1>添加数据成功！");
            } else {
                $this->redirect("addgoods", array(), 2, "<h1>:(</h1>添加数据失败！");
            }


        } else {
            $this->display();
        }
    }

    /**编辑商品*/
    public function modifygoods($goods_id)
    {
        $goodsModel = new GoodsModel();
        if (!empty($_POST)) {
            $result = $goodsModel->save($_POST);
            if ($result) {
                $this->redirect("listgoods", array(), 2, "<h1>:)</h1>修改数据成功！");
            } else {
                $this->redirect("listgoods", array(), 2, "<h1>:(</h1>修改数据失败！");

            }
        } else {
            $good = $goodsModel->find($goods_id);
            $this->assign('good', $good);
            $this->display();
        }
    }

    /**删除商品*/
    public function delgoods($goods_id)
    {
        $goodsModel = new GoodsModel();
        $result = $goodsModel->where('goods_id=' . $goods_id)->delete();
        if ($result) {
            $this->redirect("listgoods", array(), 2, "<h1>:)</h1>删除数据成功！");
        } else {
            $this->redirect("listgoods", array(), 2, "<h1>:(</h1>删除数据失败！");
        }
    }


}