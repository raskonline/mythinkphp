<?php
//TPMyShop的入口文件

//开发模式
define("APP_DEBUG",true);

//生产模式
//define("APP_DEBUG",false);


//定义前台静态常量
define("HOME_CSS_URL","/mythinkphp/TP323/TPMyShop/Home/Public/css/");
define("HOME_IMG_URL","/mythinkphp/TP323/TPMyShop/Home/Public/images/");
define("HOME_JS_URL","/mythinkphp/TP323/TPMyShop/Home/Public/js/");

//定义后台静态常量
define("ADMIN_CSS_URL","/mythinkphp/TP323/TPMyShop/Admin/Public/css/");
define("ADMIN_IMG_URL","/mythinkphp/TP323/TPMyShop/Admin/Public/img/");

//定义当前url
define("SITE_URL","http://".$_SERVER['HTTP_HOST']."/mythinkphp/TP323/TPMyShop/");

//引入框架
include_once "../ThinkPHP/ThinkPHP.php";