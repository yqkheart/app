<?php
class dongtai extends admin {
    function init(){
        $db=new db("dtlb");
        $arr=$db->selall();
        $this->s->assign("arr",$arr);
        $this->s->display("dongtaishow.html");
    }
    function deldongtai(){
        $id=$_REQUEST["id"];
        $db=new db("dtlb");
        $row=$db->del("id=$id");
        if($row==1){
            $this->jump("删除成功","index.php?m=admin&f=dongtai");
            $this->s->display("template/admin/tiaozhuan.html");
        }else{
            $this->jump("删除失败","index.php?m=admin&f=dongtai");
            $this->s->display("template/admin/tiaozhuan.html");
        }
    }
    function showdongtai(){
        $id=$_REQUEST["id"];
        $db=new db("dtlb");
        $arr=$db->selOne("*","id=$id");
        $this->s->assign("arr",$arr);
        $this->s->display("dtxq.html");
    }
}