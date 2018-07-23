<?php

namespace app\index\controller;

use think\Config;
use think\Controller;
use think\View;

class Index extends Controller
{
    public function _initialize(){
        echo "控制器的初始化！";
    }
    public function index()
    {
        //$view = new View();
        //return $view->fetch("index");
        //return view('index');
        //return $this->fetch();
        //return $this->fetch("index");
        $arr = ["id" => 1001, "name" => "tom"];
        //return json_encode($arr);
        return json($arr);
    }
}
