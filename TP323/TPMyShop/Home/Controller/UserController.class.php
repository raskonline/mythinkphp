<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-09
 * Time: 22:30
 */

namespace Home\Controller;


use Model\UserModel;
use Think\Controller;

class UserController extends Controller
{

    public function index()
    {
        $this->display("login");
    }

    public function login()
    {
        $this->display();
    }

    public function register()
    {
        $userModel = new UserModel();
        if (!empty($_POST)) {
            $_POST['user_hobby'] = implode(",", $_POST['user_hobby']);

            if (!$userModel->create($_POST)) {//验证不通过

                $errinfo = $userModel->getError();
                $this->assign("errinfo", $errinfo);
            } else {//验证通过
                $result = $userModel->add($_POST);
                if ($result) {
                    $this->redirect("login", array(), 2, "<h1>:)</h1>用户注册成功！");
                } else {
                    $this->redirect("register", array(), 2, "<h1>:(</h1>用户注册失败！");
                }
            }


        }
        $this->display();


    }

}