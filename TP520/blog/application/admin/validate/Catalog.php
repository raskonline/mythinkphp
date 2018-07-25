<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-24
 * Time: 22:04
 */

namespace app\admin\validate;


use think\Validate;

class Catalog extends Validate
{
    //验证规则：特殊表无法指定
    protected $rule = [
        'name'=>'require|unique:catalog|max:10',
    ];

    //验证信息提示
    protected $message  =   [
        'name.require' => '名称必须要填写',
        'name.max' => '名称不能超过10个字符',
        'name.unique'  => '该名称已经被使用',
    ];

    //验证场景:场景中的规则优先级最高
    protected $scene = [
        'add'  =>  ['name'],
        'edit'  =>  ['name'],
    ];

}