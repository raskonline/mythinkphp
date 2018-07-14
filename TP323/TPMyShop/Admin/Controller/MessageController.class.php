<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-14
 * Time: 9:18
 */

namespace Admin\Controller;


use Model\MessageModel;
use Think\Controller;

class MessageController extends Controller
{
    public function listmessage(){
        $list=new MessageModel();
        var_dump($list);
        die();
    }

}