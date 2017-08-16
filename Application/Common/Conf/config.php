<?php
return array(
    //'配置项'=>'配置值'

    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'tcash',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'ZHUjiasheng001',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  't_',    // 数据库表前缀

    "domain"                =>  'http://www.jifage.cn',


//    'DB_TYPE'               =>  'mysql',     // 数据库类型
//    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
//    'DB_NAME'               =>  'zhongchou',          // 数据库名
//    'DB_USER'               =>  'root',      // 用户名
//    'DB_PWD'                =>  '',          // 密码
//    'DB_PORT'               =>  '3306',        // 端口
//    'DB_PREFIX'             =>  'think_',    // 数据库表前缀
//
//    "domain"                =>  'http://dbjd.9ebo.com',


    'home_css' => 'Public/static/tipDialog/css',
    'home_js' => 'Public/static/tipDialog/js',








    //语言包配置
    'LANG_SWITCH_ON' => true, // 开启语言包功能
    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
    'LANG_LIST' => 'zh-cn,en-us,zh-tw', //必须写可允许的语言列表
    'VAR_LANGUAGE' => 'l', // 默认语言切换变量

);
