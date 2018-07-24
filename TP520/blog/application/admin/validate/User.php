<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-24
 * Time: 22:04
 */

namespace app\admin\validate;


use think\Validate;

class User extends Validate
{
    //验证规则：特殊表无法指定
    protected $rule = [
        'name'=>'require|unique:user|max:10',
        'pwd'=>'require|min:6',
    ];

    //验证信息提示
    protected $message  =   [
        'name.require' => '名称必须要填写',
        'name.max' => '名称不能超过10个字符',
        'name.unique'  => '该名称已经被使用',
        'pwd.require'  => '密码必须填写',
        'pwd.min'  => '密码长度必须大于6位',
    ];

    //验证场景:场景中的规则优先级最高
    protected $scene = [
        'add'  =>  ['name','pwd'=>'require|min:5'],
        'edit'  =>  ['name','pwd'],
    ];

}