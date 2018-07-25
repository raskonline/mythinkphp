<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-23
 * Time: 22:25
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;
use think\Loader;
use think\Request;

class Catalog extends Controller
{
    public function list()
    {
        $list = \app\admin\model\Catalog::paginate(5);
        $this->assign("list", $list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            //1.数据验证
            $validate = Loader::validate('Catalog');//加载验证
            //指定场景验证和批量验证
            if (!$validate->scene('add')->batch()->check($data)) {
                $err = $validate->getError();
                $this->assign('err', $err);
                return $this->fetch();
            } else {
                $result = db('catalog')->insert($data);
                if ($result > 0) {//插入数据成功
                    $this->success("新增文章分类成功！", 'admin/catalog/list');
                } else {//插入数据失败
                    $this->error("新增文章分类失败！", 'admin/catalog/list');
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
            $validate = Loader::validate('Catalog');
            if (!$validate->scene('edit')->batch()->check($data)) {
                $err = $validate->getError();
                $this->assign('catalog', $data);
                $this->assign('err', $err);
                return $this->fetch();
            } else {
                $result = \db('catalog')->where("id", $data['id'])->update($data);
                if ($result > 0) {//插入数据成功
                    $this->success("修改分类成功！", 'admin/catalog/list');
                } else {//插入数据失败
                    $this->error("修改分类失败！", 'admin/catalog/list');
                }
            }
        } else {
            $catalog = Db::name('catalog')->where('id', input('id'))->find();
            $this->assign('catalog', $catalog);
            return $this->fetch();
        }
    }

    public function del()
    {
        $id = input('id');
        $result = db('catalog')->where('id', $id)->delete();
        if ($result > 0) {//删除数据成功
            $this->success("删除分类成功！", 'admin/catalog/list');
        } else {//删除数据失败
            $this->error("删除分类失败！", 'admin/catalog/list');
        }
    }


}