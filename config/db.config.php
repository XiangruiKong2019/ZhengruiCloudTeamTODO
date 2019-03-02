<?php

// 检查是否运行在SAE环境下, BAE不支持哦
if (defined('SAE_APPNAME')) {
    // 如果运行在SAE环境下, 使用默认的配置
    $GLOBALS['config']['db']['db_host'] = SAE_MYSQL_HOST_M;
    $GLOBALS['config']['db']['db_host_read'] = SAE_MYSQL_HOST_S;
    $GLOBALS['config']['db']['db_port'] = SAE_MYSQL_PORT;
    $GLOBALS['config']['db']['db_user'] = SAE_MYSQL_USER;
    $GLOBALS['config']['db']['db_password'] = SAE_MYSQL_PASS;
    $GLOBALS['config']['db']['db_name'] = SAE_MYSQL_DB;
} else {
    // 如果使用本地环境, 那么, 使用本地的数据库配置
    // 此套数据库配置为PHPStudy设计, 如果需要使用WAMP MAMP XAMPP 请自行更改
    $GLOBALS['config']['db']['db_host'] = 'localhost';
    $GLOBALS['config']['db']['db_port'] = 3306;
    $GLOBALS['config']['db']['db_user'] = 'root';
    $GLOBALS['config']['db']['db_password'] = 'root';
    $GLOBALS['config']['db']['db_name'] = 'publishdb';
}
