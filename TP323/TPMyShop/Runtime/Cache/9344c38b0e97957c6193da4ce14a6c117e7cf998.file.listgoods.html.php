<?php /* Smarty version Smarty-3.1.6, created on 2018-07-22 11:22:41
         compiled from "D:/wamp64/www/mythinkphp/TP323/TPMyShop/Admin/View\Goods\listgoods.html" */ ?>
<?php /*%%SmartyHeaderCode:42125b4c75fb423522-83532266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9344c38b0e97957c6193da4ce14a6c117e7cf998' => 
    array (
      0 => 'D:/wamp64/www/mythinkphp/TP323/TPMyShop/Admin/View\\Goods\\listgoods.html',
      1 => 1532229747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42125b4c75fb423522-83532266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b4c75fbbe3cf',
  'variables' => 
  array (
    'pageGoods' => 0,
    'v' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4c75fbbe3cf')) {function content_5b4c75fbbe3cf($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\mythinkphp\\TP323\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <title>产品列表</title>

    <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<style>
    .tr_color {
        background-color: #9F88FF
    }
</style>
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/addgoods" target="_self">【添加商品】</a>
                </span>
            </span>
</div>
<div></div>
<div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit"/>
                </form>
            </span>
</div>
<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody>
        <tr style="font-weight: bold;">
            <td>序号</td>
            <td>商品名称</td>
            <td>库存</td>
            <td>价格</td>
            <td>图片</td>
            <td>缩略图</td>
            <td>品牌</td>
            <td>创建时间</td>
            <td align="center" colspan="2">操作</td>
        </tr>
        <!--表头部分-->
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pageGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
        <tr id="product<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
            <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>
            <td><img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" height="60" width="60"></td>
            <td><img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="40" width="40"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_brand_id'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['goods_create_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
            <td><a href="<?php echo @__CONTROLLER__;?>
/modifygoods/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">修改</a></td>
            <td><a href="javascript:delete_product(<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
)">删除</a></td>
        </tr>
        <?php } ?>

        <!--表尾部分-->
        <tr>
            <td colspan="20" style="text-align: center;">
                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
<script type="text/javascript">
    function delete_product(id) {
        result = confirm("确定要删除该商品吗？");
        if (result) {
            window.location.href="http://<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo @__CONTROLLER__;?>
/delgoods/goods_id/"+id;
        }
    }
</script><?php }} ?>