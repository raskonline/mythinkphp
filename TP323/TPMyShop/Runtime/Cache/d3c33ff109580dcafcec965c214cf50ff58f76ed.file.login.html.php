<?php /* Smarty version Smarty-3.1.6, created on 2018-07-21 15:33:45
         compiled from "D:/wamp64/www/mythinkphp/TP323/TPMyShop/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:284115b51cd38085198-30432855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3c33ff109580dcafcec965c214cf50ff58f76ed' => 
    array (
      0 => 'D:/wamp64/www/mythinkphp/TP323/TPMyShop/Admin/View\\Manager\\login.html',
      1 => 1532158415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284115b51cd38085198-30432855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b51cd383bd5d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51cd383bd5d')) {function content_5b51cd383bd5d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript">
        if (top.location != self.location){
             top.location=self.location;
        }
        </script>
    </head>
    <body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <form action="<?php echo @__SELF__;?>
" method="post">
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
                                    <ul>
                                        <li class="user_main_text">用户名： </li>
                                        <li class="user_main_input">
                                            <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="mg_name"> </li></ul>
                                    <ul>
                                        <li class="user_main_text">密&nbsp;&nbsp;&nbsp;&nbsp;码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtPasswordCssClass" id="admin_psd" name="mg_pwd" type="password">
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text">验证码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtValidateCodeCssClass" id="captcha" name="vercode" type="text">
                                            <img src="<?php echo @__CONTROLLER__;?>
/verifyimage" onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyimage/id/'+Math.random()" width="80px" height="20px" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo @ADMIN_IMG_URL;?>
user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                        </ul>
                    </form>
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
    </body>
</html><?php }} ?>