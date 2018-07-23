<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-23
 * Time: 22:25
 */

namespace app\admin\controller;


use think\Controller;

class Admin extends Controller
{
    public function list(){
        return $this->fetch();
    }

    public function add(){
        return $this->fetch();
    }

    public function edit(){
        return $this->fetch();
    }


}