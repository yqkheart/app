<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3
 * Time: 17:32
 */

class category extends admin
{
    public $btr;
    public $db;
    public $ctr;
    public $dtr;
    function __construct()
    {
        parent::__construct();
        $this->db=new db('category');
    }
    //    栏目页面展示
    function init(){
        $this->getcategory($this->db);
        $this->s->assign('btr',$this->btr);
        $this->s->display('template/admin/category.html');
    }
    function getcategory($db,$pid=0){
        $arr=$this->db->selAll('*',"pid=$pid");
        if ($arr){
            foreach ($arr as $item){
                $img=explode("--","{$item['img']}")[0];
                $this->btr.="
                    <tr>
                            <td>{$item['id']}</td>
                            <td>{$item['name']}</td>
                            <td><img src='{$img}' alt='' width='40' height='40'></td>
                            <td>{$item['pid']}</td>
                            <td>
                                <button type='button' class='btn btn-danger' id='{$item['id']}'>删除</button>
                                <button type='button' class='btn btn-primary'><a href='index.php?&m=index&f=category&a=change&pid={$item['pid']}&name={$item['name']}&id={$item['id']}'>修改</a></button>
                            </td>
                        </tr>
                ";
                $this->getcategory($db,$pid=$item['id']);
            }
        }
    }
    //    栏目添加页面呈现
    function addcategory(){
        $this->getoption($this->db);
        $this->s->assign('option',$this->ctr);
        $this->s->display("template/admin/addcategory.html");
    }
    function getoption($db,$pid=0,$num=0,$selected=null){
//        echo $pid;
        $result=$this->db->selAll('*',"pid=$pid");
        $q=str_repeat('*',$num+1);
        if ($result){
            foreach ($result as $item){
                if ($item['id']==$selected){
                    $this->ctr.="
                    <option value='{$item['id']}' selected>{$q}{$item['name']}</option>
                ";
                }else{
                    $this->ctr.="
                    <option value='{$item['id']}'>{$q}{$item['name']}</option>
                ";
                }
                $this->getoption($db,$pid=$item['id'],$num+1,$selected);
            }
        }
    }
    function addlanmu(){
        $pid=$_POST['ids'];
        $title=$_POST['title'];
        //处理图片
        date_default_timezone_set("Asia/chongqing");
        $file=$_FILES['file'];
        if ($file['size'][0]==0){
            $k="";
            $row=$this->db->insert('name,img,pid',"'$title','$','$pid'");
            if($row==1){
                $this->jump('添加成功','index.php?m=index&f=category&a=init');
            }else{
                $this->jump('添加失败','index.php?m=index&f=category&a=init');
            }
            exit;
        }
        $type=['image/jpeg','image/png','image/gif'];
        $size=1024*1024*1;
        //判断图片尺寸
        $arr=$file['size'];
        foreach ($arr as $item){
            if ($item>$size){
                echo "图片尺寸太大，请重新上传";
            }
        }
        //判断图片格式
        $brr=$file['type'];
        foreach ($brr as $key=>$item){
            if (!in_array($item,$type)){
                $this->jump('请上传图片','index.php?m=index&f=category&a=addcategory');
                include_once "template/admin/tiaozhuan.html";
                exit();
            }
        }
        //检测目录
        $path="imgs";
        if (!is_dir($path)){
            mkdir($path);
        }
        $crr=$file['name'];
        $prr="";
        foreach ($crr as $key=>$item){
            $names=microtime(true).".".explode(".",$item)[1];
            if (is_uploaded_file($file['tmp_name'][$key])){
                move_uploaded_file($file['tmp_name'][$key],$path."/".$names);
                $prr.=WEB_PATH.$path."/".$names."--";
            }
        }
        $row=$this->db->insert('name,img,pid',"'$title','$prr','$pid'");
        if($row==1){
            $this->jump('添加成功','index.php?m=index&f=category&a=init');
        }else{
            $this->jump('添加失败','index.php?m=index&f=category&a=init');
        }
    }
    //    删除栏目功能实现
    function dellanmu(){
        $id=$_POST['id'];
        $row=$this->db->del("id='$id'");
        echo $row;
    }
    //    修改栏目功能实现
    function change(){
        $pid=$_REQUEST['pid'];
        $name=$_REQUEST['name'];
        $id=$_REQUEST['id'];
        $this->getoption($this->db,0,0,$pid);
        $this->s->assign('dtr',$this->ctr);
        $this->s->assign('name',$name);
        $this->s->assign('pid',$pid);
        $this->s->assign('id',$id);
        $this->s->display('template/admin/xiugai.html');
    }
    function upload(){
        $id=$_REQUEST['id'];
        $name=$_REQUEST['title'];
        $topid=$_REQUEST['topid'];
        //处理图片
        date_default_timezone_set("Asia/chongqing");
        $file=$_FILES['file'];
        if ($file['size'][0]==0){
            $k="";
            $row=$this->db->update("name='$name',img='$k',pid='$topid'","id='$id'");
            if($row==1){
                $this->jump('添加成功','index.php?m=index&f=category&a=init');
            }else{
                $this->jump('添加失败','index.php?m=index&f=category&a=init');
            }
            exit;
        }
        $type=['image/jpeg','image/png','image/gif'];
        $size=1024*1024*1;
        //判断图片尺寸
        $arr=$file['size'];
        foreach ($arr as $item){
            if ($item>$size){
                echo "图片尺寸太大，请重新上传";
            }
        }
        //判断图片格式
        $brr=$file['type'];
        foreach ($brr as $key=>$item){
            if (!in_array($item,$type)){
                $this->jump('请上传图片','index.php?m=index&f=category&a=addcategory');
                include_once "template/admin/tiaozhuan.html";
                exit();
            }
        }
        //检测目录
        $path="imgs";
        if (!is_dir($path)){
            mkdir($path);
        }
        $crr=$file['name'];
        $prr="";
        foreach ($crr as $key=>$item){
            $names=microtime(true).".".explode(".",$item)[1];
            if (is_uploaded_file($file['tmp_name'][$key])){
                move_uploaded_file($file['tmp_name'][$key],$path."/".$names);
                $prr.=WEB_PATH.$path."/".$names."--";
            }
        }
        $row=$this->db->update("name='$name',img='$prr',pid='$topid'","id='$id'");
        if($row==1){
            $this->jump('添加成功','index.php?m=index&f=category&a=init');
        }else{
            $this->jump('添加失败','index.php?m=index&f=category&a=init');
        }
    }
}