<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-10
 * Time: 22:59
 */

namespace Admin\Controller;


use Think\Controller;

class GoodsController extends Controller
{
    /**展示商品列表*/
    public function listgoods()
    {
        $this->display();
    }

    /**添加商品*/
    public function addgoods()
    {
        $this->display();
    }

    /**编辑商品*/
    public function modifygoods()
    {
        $this->display();
    }

    /**删除商品*/
    public function delgoods()
    {
        //$this->display();
    }


}