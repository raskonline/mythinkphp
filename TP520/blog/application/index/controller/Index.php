<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function article()
    {
        return $this->fetch();
    }

    public function list()
    {
        return $this->fetch();
    }
}
