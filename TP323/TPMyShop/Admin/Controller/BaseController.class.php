<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-21
 * Time: 19:46
 */

namespace Admin\Controller;


use Think\Controller;

class BaseController extends Controller
{
    /**控制器初始化*/
    public function _initialize()
    {

        if (!isset($_SESSION['mg_name']) )
        {
            //$this->redirect("admin/manager/login", array(), 2, "请登录！");

        }
    }

}