<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-09
 * Time: 22:19
 */

namespace Admin\Controller;


use Model\ManagerModel;
use Think\Controller;
use Think\Verify;

class ManagerController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            //var_dump($_POST);
            //die();
            //验证码校验
            $verify = new Verify();
            if ($verify->check($_POST['vercode'])) {//验证成功
                //用户名密码验证
                $managerModel=new ManagerModel();
                $result=$managerModel->where('mg_name = "'.$_POST['mg_name'].'" and mg_pwd = "'.$_POST['mg_pwd'].'"')->find();
                if($result){
                    session('mg_id',$result['mg_id']);
                    session('mg_name',$result['mg_name']);
                    $this->redirect("admin/index/index", array(), 2, "登陆成功，即将进入后台首页！");
                }else{
                    $this->redirect("admin/manager/login", array(), 2, "账号或者密码错误");
                }


            } else {//验证失败
                $this->redirect("admin/manager/login", array(), 2, "验证码错误");
            }
        } else {
            $this->display();
        }
    }

    public function logout(){
        session(null);
        $this->display("login");
        //$this->redirect("login", array(), 2, "注销登陆成功，即将返回登陆页面！");//frameset无效
    }


    public function verifyimage()
    {
        $config = [
            'fontSize' => 20,         //字体大小
            'length' => 4,            //字符个数
            'useCurve' => false,      //是否画混淆曲线
            'useNoise' => false,      //是否添加杂点
        ];
        $verify = new Verify($config);
        $verify->entry();
    }


}