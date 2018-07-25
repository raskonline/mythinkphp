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

class Article extends Controller
{
    public function list()
    {
        //$list = \app\admin\model\Article::paginate(5);
        $list = db('article')->alias('a')->join('catalog c', 'c.id=a.id')->field('a.id,a.title,a.author,a.summary,a.photo,a.state,c.name')->paginate(5);
        $this->assign("list", $list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $data['ptime'] = time();//获取当前时间戳
            $validate = Loader::validate('Article');//加载验证
            //指定场景验证和批量验证
            if (!$validate->scene('add')->batch()->check($data)) {
                $err = $validate->getError();
                $this->assign('err', $err);
            } else {
                //图片处理
                //1.先判断图片是否上传成功
                if ($_FILES['photo']['tmp_name']) {
                    //2.获取表单上传文件
                    $file = \request()->file('photo');
                    if ($file) {
                        //3.移动文件
                        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                        //4.提取文件路径，待写入数据库
                        $data['photo'] = str_replace('\\', '/', $info->getSaveName());
                    } else {//上传失败
                        $this->error($file->getError(), 'admin/article/list');
                    }
                }

                //持久化
                $result = db('article')->insert($data);
                if ($result > 0) {//插入数据成功
                    $this->success("文章发布成功！", 'admin/article/list');
                } else {//插入数据失败
                    $this->error("文章发布失败！", 'admin/article/list');
                }
            }
        }
        //文章分类下拉框数据
        $catalogs = db('catalog')->select();
        $this->assign('catalogs', $catalogs);
        return $this->fetch();
    }

    public function edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $validate = Loader::validate('Article');
            if (!$validate->scene('edit')->batch()->check($data)) {
                $err = $validate->getError();
                $this->assign('article', $data);
                $this->assign('err', $err);
                return $this->fetch();
            } else {
                //图片处理
                if ($_FILES['photo']['tmp_name']) {
                    $res = db('article')->where('id', $data['id'])->find();
                    @unlink('uploads/' . $res['photo']);
                    //2.获取表单上传文件
                    $file = \request()->file('photo');
                    if ($file) {
                        //3.移动文件
                        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                        //4.提取文件路径，待写入数据库
                        $data['photo'] = str_replace('\\', '/', $info->getSaveName());
                    } else {//上传失败
                        $this->error($file->getError(), 'admin/article/list');
                    }
                }

                //持久化
                $result = \db('article')->where("id", $data['id'])->update($data);
                if ($result > 0) {//插入数据成功
                    $this->success("编辑文章成功！", 'admin/article/list');
                } else {//插入数据失败
                    $this->error("编辑文章失败！", 'admin/article/list');
                }
            }
        } else {
            $article = Db::name('article')->where('id', input('id'))->find();
            $this->assign('article', $article);
            //文章分类下拉框数据
            $catalogs = db('catalog')->select();
            $this->assign('catalogs', $catalogs);
            return $this->fetch();
        }
    }

    public function del()
    {
        $id = input('id');
        $result = db('article')->where('id', $id)->delete();
        if ($result > 0) {//删除数据成功
            $this->success("删除文章成功！", 'admin/article/list');
        } else {//删除数据失败
            $this->error("删除文章失败！", 'admin/article/list');
        }
    }


}