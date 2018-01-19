<?php
class huati extends admin {
    function init(){
        $db=new db("htlb");
        $arr=$db->selall();
        $this->s->assign("arr",$arr);
        $this->s->display("huatishow.html");
    }
    function changehuati(){
        $id=$_REQUEST["id"];
        $db=new db("htlb");
        $arr=$db->selone("*","id=$id");
        $this->s->assign("arr",$arr);
        $this->s->assign("arr",$arr);
        $this->s->display("changehuati.html");
    }
    function addhuati(){
        $this->s->display("addhuati.html");
    }
    function inserthuati(){
        $htname=$_REQUEST["htname"];
        $htdzcounts=$_REQUEST["htdzcounts"];
        $htsccounts=$_REQUEST["htsccounts"];



        $file=$_FILES["file"];

        $tye=["image/jpeg","image/gif","image/png"];
        $siz=1024*1024*1;

        $geshi=$file["type"];
        $daxiao=$file["size"];
        $path="upload";
        foreach ($geshi as $item){
            if(!in_array($item,$tye)){
                echo "请选择适当格式的图片（jpg/gif/png）";
            }
        };
        foreach ($daxiao as $item){
            if($item>$siz){
                echo "请选择小于1M的图片";
            }
        };
        if(!is_dir($path)){
            mkdir($path);
        }
//获取图片文件路径
        $url=$_SERVER["REQUEST_URI"];
///houtai/public/addcontent.php      echo $url;
        $weizhi=strrpos($url,"/");   //获取反斜杠最后一次出现的位置   echo $weizhi;   14
        $dizhi=substr($url,"0",$weizhi); //获取目录 /houtai/public       echo $dizhi;

        $ytpname=$file["name"];
        $imgwz="";
        foreach ($ytpname as $key=>$item){
            $d=explode(".",$item);
            $ctpname=microtime(true).".".$d[1];
//    echo $file["tmp_name"][$key];
            if($file["tmp_name"][$key]){
                $ydtp=move_uploaded_file($file["tmp_name"][$key],$path.'/'.$ctpname);
                $imgwz.=$dizhi.'/'.$path.'/'.$ctpname.'--';
            }
        }

        $db=new db("htlb");
        $row=$db->insert("htname,htdzcounts,htsccounts,htimgs","'$htname','$htdzcounts','$htsccounts','$imgwz'");
//        var_dump($row);
        if($row==1){
            $this->jump("添加成功","index.php?m=admin&f=huati");
            $this->s->display("template/admin/tiaozhuan.html");
        }else{
            $this->jump("添加失败","index.php?m=admin&f=huati&a=addhuati");
            $this->s->display("template/admin/tiaozhuan.html");
        }
    }
    function delhuati(){
        $id=$_REQUEST["id"];
        $db=new db("htlb");
        $row=$db->del("id=$id");
        if($row==1){
            $this->jump("删除成功","index.php?m=admin&f=huati");
            $this->s->display("template/admin/tiaozhuan.html");
        }else{
            $this->jump("删除失败","index.php?m=admin&f=huati");
            $this->s->display("template/admin/tiaozhuan.html");
        }
    }
    function updatehuati(){
        $id=$_REQUEST["id"];
        $htname=$_REQUEST["htname"];
        $htdzcounts=$_REQUEST["htdzcounts"];
        $htsccounts=$_REQUEST["htsccounts"];
        /* var_dump($id);
         var_dump($htname);
         var_dump($htdzcounts);
         var_dump($htsccounts);*/


        $file=$_FILES["file"];

//        $tye=["image/jpeg","image/gif","image/png"];
//        $siz=1024*1024*1;

//        $geshi=$file["type"];
//        $daxiao=$file["size"];
        $path="upload";
//        foreach ($geshi as $item){
//            if(!in_array($item,$tye)){
//                echo "请选择适当格式的图片（jpg/gif/png）";
//            }
//        };
//        foreach ($daxiao as $item){
//            if($item>$siz){
//                echo "请选择小于1M的图片";
//            }
//        };
        if(!is_dir($path)){
            mkdir($path);
        }
//获取图片文件路径
        $url=$_SERVER["REQUEST_URI"];
///houtai/public/addcontent.php      echo $url;
        $weizhi=strrpos($url,"/");   //获取反斜杠最后一次出现的位置   echo $weizhi;   14
        $dizhi=substr($url,"0",$weizhi); //获取目录 /houtai/public       echo $dizhi;

        $ytpname=$file["name"];
        $imgwz="";
        foreach ($ytpname as $key=>$item){
            $d=explode(".",$item);
//            var_dump($d);
            $ctpname=microtime(true).".".$d[1];
//    echo $file["tmp_name"][$key];
            if($file["tmp_name"][$key]){
                $ydtp=move_uploaded_file($file["tmp_name"][$key],$path.'/'.$ctpname);
                $imgwz.=$dizhi.'/'.$path.'/'.$ctpname.'--';
            }
        }
//        var_dump($imgwz);
        $db=new db("htlb");
        $row=$db->update("htname='$htname',htdzcounts='$htdzcounts',htsccounts='$htsccounts',htimgs='$imgwz'","id=$id");
//        var_dump($row);
        if($row==1){
            $this->jump("修改成功","index.php?m=admin&f=huati");
            $this->s->display("template/admin/tiaozhuan.html");
        }else{
            $this->jump("修改失败","index.php?m=admin&f=huati");
            $this->s->display("template/admin/tiaozhuan.html");
        }
    }
}