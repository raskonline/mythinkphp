<?php /* Smarty version Smarty-3.1.6, created on 2018-07-21 20:05:36
         compiled from "D:/wamp64/www/mythinkphp/TP323/TPMyShop/Admin/View\Goods\addgoods.html" */ ?>
<?php /*%%SmartyHeaderCode:123135b4954ff1072e4-48194526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70f51b6a3e155e3c4147a27cf09115f4b1691e0a' => 
    array (
      0 => 'D:/wamp64/www/mythinkphp/TP323/TPMyShop/Admin/View\\Goods\\addgoods.html',
      1 => 1532174734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123135b4954ff1072e4-48194526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b4954ff44f12',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4954ff44f12')) {function content_5b4954ff44f12($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
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
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" /></td>
                </tr>
                <tr>
                    <td>商品重量</td>
                    <td><input type="text" name="goods_weight" /></td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" /></td>
                </tr>
                <tr>
                    <td>商品库存</td>
                    <td><input type="text" name="goods_number" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="goods_img" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_introduce"></textarea>
                    </td>
                </tr>

                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>