<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-23
 * Time: 22:25
 */

namespace app\admin\controller;


use app\admin\model\User;
use think\Controller;
use think\Db;
use think\Loader;
use think\Request;
use think\Validate;

class Admin extends Controller
{
    public function list()
    {

        $list = User::paginate(5);
        //var_dump($list);
        $this->assign("list", $list);
        return $this->fetch();
    }

    public function add()
    {
        //if(\request()->isPost()){
        if (Request::instance()->isPost()) {
            //$name=Request::instance()->param("name");
            //echo $name;
            //$data=Request::instance()->param();
            //dump($data);
            //使用助手函数
            //$name=input('post.name');
            //echo $name;
            $data = input('post.');
            //1.数据验证
            $validate = Loader::validate('User');//加载验证
            //指定场景验证和批量验证
            if (!$validate->scene('add')->batch()->check($data)) {
                $err = $validate->getError();
                $this->assign('err', $err);
                return $this->fetch();
            } else {
                $data['pwd'] = md5($data['pwd']);
                $result = Db::name('user')->insert($data);
                if ($result > 0) {//插入数据成功
                    $this->success("新增管理员成功！", 'admin/admin/list');
                } else {//插入数据失败
                    $this->error("新增管理员失败！", 'admin/admin/add');
                }
            }

        } else {
            return $this->fetch();
        }


    }

    public function edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $validate = Loader::validate('user');
            if (!$validate->scene('edit')->batch()->check($data)) {
                $err = $validate->getError();
                $this->assign('err', $err);
                return $this->fetch();
            } else {
                $data['pwd'] = md5($data['pwd']);
                $result = \db('user')->where("id", $data['id'])->update($data);
                if ($result > 0) {//插入数据成功
                    $this->success("修改管理员成功！", 'admin/admin/list');
                } else {//插入数据失败
                    $this->error("修改管理员失败！", 'admin/admin/list');
                }
            }
        } else {
            $user = Db::name('user')->where('id', input('id'))->find();
            $this->assign('user', $user);
            return $this->fetch();
        }
    }

    public function del()
    {
        $id = input('id');
        if ($id != 1) {
            $result = \db('user')->where('id', $id)->delete();
            if ($result > 0) {//删除数据成功
                $this->success("删除管理员成功！", 'admin/admin/list');
            } else {//删除数据失败
                $this->error("删除管理员失败！", 'admin/admin/list');
            }
        }else{
            $this->error("超级管理员不允许删除！", 'admin/admin/list');
        }
    }


}