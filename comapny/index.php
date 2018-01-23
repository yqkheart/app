<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2
 * Time: 15:04
 */
header('content-type:text/html;charset=utf8');
//var_dump($_SERVER);

//定义web路径
define('WEB_PATH','http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/')+1));
//echo WEB_PATH;
//定义本地路径
define('ROOT_PATH',__DIR__."/");
define('LIBS_PATH',ROOT_PATH."libs/");
define('CSS_PATH',WEB_PATH."src/css/");
define('JS_PATH',WEB_PATH."src/js/");
define('IMG_PATH',WEB_PATH."src/img/");
define('FONT_PATH',WEB_PATH."src/iconfont/");
define('VENDOR_PATH',WEB_PATH."src/vendor/");
define('KIND_PATH',WEB_PATH."src/kindeditor/");
//echo KIND_PATH;
include_once LIBS_PATH."router.class.php";
include_once LIBS_PATH."codes.class.php";
include_once LIBS_PATH."session.class.php";
include_once LIBS_PATH."db.class.php";
include_once LIBS_PATH."admin.class.php";
include_once LIBS_PATH."page.class.php";
include_once LIBS_PATH."indexmain.class.php";



include_once LIBS_PATH."wkindexmain.php";
include_once LIBS_PATH."smarty/Smarty.class.php";
$r=new router();
$r->getFun();