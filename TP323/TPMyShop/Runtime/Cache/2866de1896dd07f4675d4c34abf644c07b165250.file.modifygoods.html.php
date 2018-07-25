<?php /* Smarty version Smarty-3.1.6, created on 2018-07-19 22:36:06
         compiled from "D:/wamp64/www/mythinkphp/TP323/TPMyShop/Admin/View\Goods\modifygoods.html" */ ?>
<?php /*%%SmartyHeaderCode:141125b4955014fb670-53895726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2866de1896dd07f4675d4c34abf644c07b165250' => 
    array (
      0 => 'D:/wamp64/www/mythinkphp/TP323/TPMyShop/Admin/View\\Goods\\modifygoods.html',
      1 => 1532010964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141125b4955014fb670-53895726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b4955016fb27',
  'variables' => 
  array (
    'good' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4955016fb27')) {function content_5b4955016fb27($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>修改商品</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/listgoods">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
        <table border="1" width="100%" class="table_a">
            <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_id'];?>
">
            <tr>
                <td>商品名称</td>
                <td><input type="text" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_name'];?>
" /></td>
            </tr>
            <tr>
                <td>商品重量</td>
                <td><input type="text" name="goods_weight" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_weight'];?>
" /></td>
            </tr>
            <tr>
                <td>商品价格</td>
                <td><input type="text" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_price'];?>
" /></td>
            </tr>
            <tr>
                <td>商品库存</td>
                <td><input type="text" name="goods_number" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['goods_number'];?>
" /></td>
            </tr>
            <tr>
                <td>商品详细描述</td>
                <td>
                    <textarea name="goods_introduce" ><?php echo $_smarty_tpl->tpl_vars['good']->value['goods_introduce'];?>
</textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="修改">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html><?php }} ?>