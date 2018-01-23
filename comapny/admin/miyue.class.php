<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/4
 * Time: 20:44
 */

class miyue extends admin
{
    public $db;
    public $brr;
    public $ctr;
    function __construct()
    {
        parent::__construct();
        $this->db=new db('honeymoon');
    }
//    内容页面展示
    function init(){
        $this->getcontent($this->db);
        $this->s->assign('arr',$this->brr);
        $this->s->display('template/admin/miyue.html');
    }
    function getcontent($db){
        $arr=$this->db->selAll('*');
        if ($arr){
            foreach ($arr as $item){
                $img=explode("--","{$item['img']}")[0];
                $title=mb_substr($item['style'],0,10,'utf8');
                $this->brr.="
                  <tr>
                    <td>{$item['id']}</td>
                    <td>{$item['name']}</td>
                    <td>{$img}</td> 
                    <td>{$item['price']}</td>   
                    <td>{$item['sell']}</td>
                    <td>{$title}</td>
                    <td>{$item['place']}</td> 
                    <td>{$item['tell']}</td> 
                    <td>
                        <button type='button' class='btn btn-danger' id='${item['id']}'>删除</button>
                        <button type='button' class='btn btn-primary'><a href='index.php?m=admin&f=miyue&a=change&id={$item['id']}'>修改</a></button>
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
        $this->s->display('template/admin/miyueadd.php');
    }
    function getoption($db,$id=6){
        $result=$db->selAll('*',"id=$id");
        if ($result){
            foreach ($result as $item){
                $this->ctr=$item['name'];
            }
        }
    }
    function addcheck(){
        $name=$_REQUEST['name'];
        $price=$_REQUEST['price'];
        $style=$_REQUEST['style'];
        $place=$_REQUEST['place'];
        $tel=$_REQUEST['tell'];
        //处理图片
        date_default_timezone_set("Asia/chongqing");
        $file=$_FILES['file'];
        if ($file['size'][0]==0){
            $k="";
            $row=$this->db->insert('name,price,style,place,tell,img',"'$name','$price','$style','$place','$tel','$k'");
            if($row==1){
                $this->jump('添加成功','index.php?m=admin&f=miyue&a=init');
            }else{
                $this->jump('添加失败','index.php?m=admin&f=miyue&a=init');
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
                $this->jump('请上传图片','index.php?m=admin&f=miyue&a=addcontent');
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
                $prr=mb_substr($prr,0,strlen($prr)-2);
            }
        }
        $row=$this->db->insert('name,price,style,place,tell,img',"'$name','$price','$style','$place','$tel','$prr'");
        if($row==1){
            $this->jump('添加成功','index.php?m=admin&f=miyue&a=init');
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
        $result=$this->db->selAll('*',"id=$id");
        if ($result){
            foreach ($result as $item){
                $name=$item['name'];
                $price=$item['price'];
                $style=$item['style'];
                $place=$item['place'];
                $tel=$item['tell'];
            }
        }
        $this->s->assign('name',$name);
        $this->s->assign('price',$price);
        $this->s->assign('style',$style);
        $this->s->assign('place',$place);
        $this->s->assign('tel',$tel);
        $this->s->assign('id',$id);
        $this->s->display('template/admin/changemiyue.php');
    }
    function addtext(){
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $price=$_REQUEST['price'];
        $style=$_REQUEST['style'];
        $place=$_REQUEST['place'];
        $tel=$_REQUEST['tel'];
        //处理图片
        date_default_timezone_set("Asia/chongqing");
        $file=$_FILES['file'];
        if ($file['size'][0]==0){
            $k="";
            $row=$this->db->update("name='$name',price='$price',style='$style',img='$k',place='$place',tell='$tel'","id='$id'");
            if($row==1){
                $this->jump('修改成功','index.php?m=admin&f=miyue&a=init');
            }else{
                $this->jump('修改失败','index.php?m=admin&f=miyue&a=init');
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
                $this->jump('请上传图片','index.php?m=index&f=car&a=change');
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
                $prr=mb_substr($prr,0,strlen($prr)-2);
            }
        }
        $row=$this->db->update("name='$name',price='$price',style='$style',img='$prr',place='$place',tell='$tel'","id='$id'");
        if($row==1){
            $this->jump('修改成功','index.php?m=admin&f=miyue&a=init');
        }else{
            echo 'bad';
        }
    }
}