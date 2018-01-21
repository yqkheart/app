<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\1\21 0021
 * Time: 9:47
 */
class search extends admin{
    public $db='';
    function __construct(){
        parent::__construct();
        $this->db=new db("hotel");
    }
    function search(){
        $this->s->display("template/index/search.html");
    }
    function searchResult(){
        $keyword = $_GET['keyword'];
        $result=$this->db->selAll();
        echo json_encode($result);
    }
}