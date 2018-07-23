<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-23
 * Time: 22:17
 */

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{
    public function index(){
        return $this->fetch();
    }

}