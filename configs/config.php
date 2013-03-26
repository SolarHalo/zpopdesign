<?php
ob_start();

// 手动指定Smarty的libs目录位置
 
define('SMARTY_DIR', '/htdocs/phpfile/lib/Smarty-3.1.13/libs/');


ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.SMARTY_DIR);

//配置程序根目录,非文档根目录
 
 
define('BASE_HOME', "/htdocs/phpfile/");
 
//获得http路径的地址
define('URL_ROOT', "http://www.zpopdesign.com/phpfile/htcdoc/");

?>
