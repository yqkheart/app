<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 16:00
 */

class photography extends admin
{
    public $db;
    function __construct()
    {
        parent::__construct();
        $this->db=new db('photography');
    }
    function init(){
        $this->s->display("template/index/sheying.html");
    }
    function send(){
        $pid=$_REQUEST['pid'];
        $arr=$this->db->selAll("*","pid=$pid");
        echo json_encode($arr);
    }
}