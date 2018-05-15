<?php
return array(
	//'配置项'=>'配置值'
    //配置常用路径：包括Jquery\bootstrap
    'TMPL_PARSE_STRING' => array(
        '__ADMIN__' => __ROOT__.'/Public/Admin',
        '__HOME__' => __ROOT__.'/Public/Home',
        '__COMMONCSS__' =>__ROOT__.'/Public/common.css',
        '__JQUERY__' =>__ROOT__.'/Public/jquery-3.3.1.js',
        '__BOOTSTRAPCSS__'=>__ROOT__.'/Public/bootstrap-3.3.7/dist/css/bootstrap.css',
        '__BOOTSTRAPJS__'=>__ROOT__.'/Public/bootstrap-3.3.7/dist/js/bootstrap.js',
    ),
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'hgp',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '1234',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
//    SHOW_PAGE_TRACE'     =>  true,
);