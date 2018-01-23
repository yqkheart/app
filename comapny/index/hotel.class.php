<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 16:00
 */

class hotel extends admin
{
    public $db;
    function __construct()
    {
        parent::__construct();
        $this->db=new db('hotel');
    }
    function init(){
        $arr=$this->db->selAll("*");
//        var_dump($arr);
        $this->s->assign("arr",$arr);
        $this->s->display("template/index/hunyan.html");
    }
}