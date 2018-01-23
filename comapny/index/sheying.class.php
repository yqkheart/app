<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 16:00
 */

class sheying extends admin
{
    public $db;
    function __construct()
    {
        parent::__construct();
        $this->db=new db('photography');
    }
    function init(){
        $arr=$this->db->selAll("*");
//        var_dump($arr);
        $this->s->assign("arr",$arr);
        $this->s->display("template/index/sheying.html");
    }
}