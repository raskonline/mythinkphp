<?php
return array(
    //'配置项'=>'配置值'
    //配置页面追踪
    'SHOW_PAGE_TRACE'       => true,
    'DEFAULT_MODULE'        => 'Home',  // 默认模块
    'MODULE_ALLOW_LIST'     => array('Home', 'Admin'),
    'TMPL_ENGINE_TYPE'      => 'Smarty',     //开启smarty

    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'myshop',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'rootkit.',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => 'sw_'    // 数据库表前缀
);