<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3
 * Time: 17:35
 */

class admin
{
    public $s;
    function __construct()
    {
        include_once LIBS_PATH."smarty/Smarty.class.php";
        $this->s=new Smarty();
        $this->s->setCompileDir("compile/");
        $this->s->setTemplateDir("template/admin/");
    }
    function jump($mess,$url){
        $this->s->assign("mess",$mess);
        $this->s->assign("url",$url);
        $this->s->display("template/admin/tiaozhuan.html");
    }
}