<?php
class pinglun extends admin {
    function init(){
        $db=new db("pllb");
        $arr=$db->selall();
        $this->s->assign("arr",$arr);
        $this->s->display("pinglunshow.html");
    }
    function delpinglun(){
        $id=$_REQUEST["id"];
        $db=new db("pllb");
        $row=$db->del("id=$id");
        if($row==1){
            $this->jump("删除成功","index.php?m=admin&f=pinglun");
            $this->s->display("template/admin/tiaozhuan.html");
        }else{
            $this->jump("删除失败","index.php?m=admin&f=pinglun");
            $this->s->display("template/admin/tiaozhuan.html");
        }
    }
    function showpinglun(){
        $id=$_REQUEST["id"];
        $db=new db("pllb");
        $arr=$db->selOne("*","id=$id");
        $this->s->assign("arr",$arr);
        $this->s->display("plxq.html");
    }
}