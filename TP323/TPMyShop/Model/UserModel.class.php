<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-19
 * Time: 23:41
 */

namespace Model;


use Think\Model;

class UserModel extends Model
{
    protected $_validate = array(
        array('username', 'require', '用户名不允许重复！', 0, 'unique', 1),
        array('password', 'require', '密码不允许为空！'),
        array('password2', 'require', '确认密码不允许为空！'),
        array('password2', 'password', '两次输入密码不一致！', 0, 'confirm'),
        array('user_email', 'email', '邮箱格式不正确！'),
        array('user_qq', 'number', 'QQ号必须是数字！'),
        array('user_qq', '5,12', 'QQ位数不正确！',0,'length',1),
        array('user_tel', '/^1[3|4|5|8|9][0-9]\d{8}$/', '手机号格式不正确！', 0, 'regex', 1)
    );  // 自动验证定义

    protected $patchValidate = true;
}