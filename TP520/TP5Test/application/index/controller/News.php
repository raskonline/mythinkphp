<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-22
 * Time: 13:30
 */

namespace app\index\controller;


class News
{

    public function read(){
        return "this is latest news. id:".input('id');
    }

    public function blog(){
        return "this is blog. name:".input('name');
    }
}