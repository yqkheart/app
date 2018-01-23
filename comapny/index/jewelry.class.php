<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 16:00
 */

class jewelry extends admin
{
    public $db;
    function __construct()
    {
        parent::__construct();
        $this->db=new db('jewelry');
    }
    function init(){
        header("content-type:text/html;charset=utf8");
        $mz=$_REQUEST['mz'];
        $arr=$this->db->selAll("*");
//        var_dump($arr);
        $engs=$_REQUEST['f'];
        $this->s->assign("engs",$engs);
        $this->s->assign("mz",$mz);
        $this->s->assign("arr",$arr);
        $this->s->display("template/index/hunyan.html");
    }
    function updateColl(){
        $text=$_REQUEST['text'];
        $id=$_REQUEST['id'];
        $row=$this->db->update("collection=$text","id=$id");
        echo $row;
    }
}