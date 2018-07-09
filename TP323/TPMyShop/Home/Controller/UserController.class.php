<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-09
 * Time: 22:30
 */

namespace Home\Controller;


use Think\Controller;

class UserController extends Controller
{

    public function index(){
        $this->display("login");
    }

    public function login(){
        $this->display();
    }

}