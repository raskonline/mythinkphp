<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-24
 * Time: 22:04
 */

namespace app\admin\validate;


use think\Validate;

class Article extends Validate
{
    //验证规则：特殊表无法指定
    protected $rule = [
        'title' => 'require|max:30',
        'author' => 'require|min:1',
        'summary' => 'require|max:100',
    ];

    //验证信息提示
    protected $message = [
        'title.require' => '文章标题必须要填写',
        'title.max' => '文章不能超过10个字符',
        'author.require' => '作者必须填写',
        'author.min' => '作者名字至少一个字',
        'summary.require' => '文章摘要必须填写',
        'summary.max' => '文章摘要最多100个字',
    ];

    //验证场景:场景中的规则优先级最高
    protected $scene = [
        'add' => ['title', 'author', 'summary'],
        'edit' => ['title', 'author', 'summary'],
    ];

}