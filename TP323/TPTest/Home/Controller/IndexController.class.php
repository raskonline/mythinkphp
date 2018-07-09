<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->show('<h1>你好，TP323</h1>', 'utf-8');
    }
}