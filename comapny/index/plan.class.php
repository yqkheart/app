<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 16:00
 */

class plan extends admin
{
    public $db;
    function __construct()
    {
        parent::__construct();
        $this->db=new db('plan');
    }
    function init(){
        header("content-type:text/html;charset=utf8");
        $mz=$_REQUEST['mz'];
        $arr=$this->db->selAll("*");
//        var_dump($arr);
        $this->s->assign("mz",$mz);
        $this->s->assign("arr",$arr);
        $this->s->display("template/index/hunyan.html");
    }
}