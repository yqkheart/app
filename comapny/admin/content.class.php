<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/4
 * Time: 20:44
 */

class content extends admin
{
    public $db;
    public $brr;
    public $ctr;
    function __construct()
    {
        parent::__construct();
        $this->db=new db('content');
    }
//    内容页面展示
    function init(){
        $this->getcontent($this->db);
        $this->s->assign('arr',$this->brr);
        $this->s->display('template/admin/content.html');
    }
    function getcontent($db){
        $arr=$this->db->selAll('*');
        if ($arr){
            foreach ($arr as $item){
                $title=mb_substr($item['title'],0,10,'utf8');
                $this->brr.="
                  <tr>
                    <td>{$item['id']}</td>
                    <td>{$title}</td>
                    <td>{$item['description']}</td>
                    <td>{$item['time']}</td>
                    <td>{$item['pid']}</td>                  
                    <td>
                        <button type='button' class='btn btn-danger' id='${item['id']}'>删除</button>
                        <button type='button' class='btn btn-primary'><a href='index.php?m=index&f=content&a=change&id={$item['id']}&pid={$item['pid']}'>修改</a></button>
                    </td>
                 </tr>
                ";
            }
        }
    }
//    内容添加功能实现
    function addcontent(){
        $dbs=new db('category');
        $this->getoption($dbs);
        $this->s->assign('option',$this->ctr);
        $this->s->display('template/admin/addtext.php');
    }
    function getoption($db,$pid=0,$num=0,$selected=null){
        $result=$db->selAll('*',"pid=$pid");
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
    function addcheck(){
        $pid=$_REQUEST['ids'];
        $title=$_REQUEST['title'];
        $description=$_REQUEST['description'];
        $content=$_REQUEST['content1'];
        //处理图片
        date_default_timezone_set("Asia/chongqing");
        $file=$_FILES['file'];
        if ($file['size'][0]==0){
            $k="";
            $row=$this->db->insert('title,description,img,pid,text',"'$title','$description','$k','$pid','$content'");
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
        $row=$this->db->insert('title,description,img,pid,text',"'$title','$description','$prr','$pid','$content'");
        if($row==1){
            $this->jump('添加成功','index.php?m=index&f=content&a=init');
        }else{
            echo 'bad';
        }
    }
    //    内容删除功能实现
    function del(){
        $id=$_POST['id'];
        $row=$this->db->del("id='$id'");
        echo $row;
    }
    //    修改功能实现
    function change(){
        $id=$_REQUEST['id'];
        $pid=$_REQUEST['pid'];
        $result=$this->db->selAll('*',"id=$id");
        if ($result){
            foreach ($result as $item){
                $name=$item['title'];
                $des=$item['description'];
                $text=$item['text'];
            }
        }
        $dbs=new db('category');
        $this->getoption($dbs,0,0,$pid);
        $this->s->assign('ctr',$this->ctr);
        $this->s->assign('name',$name);
        $this->s->assign('des',$des);
        $this->s->assign('text',$text);
        $this->s->assign('id',$id);
        $this->s->display('template/admin/changetext.php');
    }
    function addtext(){
        $id=$_REQUEST['id'];
        $pid=$_REQUEST['ids'];
        $title=$_REQUEST['title'];
        $des=$_REQUEST['description'];
        $text=$_REQUEST['content1'];
        //处理图片
        date_default_timezone_set("Asia/chongqing");
        $file=$_FILES['file'];
        if ($file['size'][0]==0){
            $k="";
            $row=$this->db->update("title='$title',description='$des',text='$text',pid='$pid',img='$k'","id='$id'");
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
        $row=$this->db->update("title='$title',description='$des',text='$text',pid='$pid',img='$prr'","id='$id'");
        if($row==1){
            $this->jump('修改成功','index.php?m=index&f=content&a=init');
        }else{
            echo 'bad';
        }
    }
}