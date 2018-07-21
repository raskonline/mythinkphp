<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-10
 * Time: 22:59
 */

namespace Admin\Controller;


use Model\GoodsModel;


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