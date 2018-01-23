<?php
class huati extends wkindexmain {
    function init(){
        $huatidb=new db("htlb");
        $result=$huatidb->limit("*","1","3");
        $imgarr=[];
        foreach ($result as $iteam){
            $imgwz=substr($iteam['htimgs'],0,strrpos($iteam['htimgs'],"--"));
           array_push($imgarr,$imgwz);
        }
        $this->s->assign("imgarr",$imgarr);
        $this->s->assign("arr",$result);

        //动态展示
        $dongtaidb=new db("dtlb");
        $result=$dongtaidb->selall();
        $this->s->assign("brr",$result);
        $dtimgarr=[];
        foreach ($result as $iteam){

            $imgwz=substr($iteam['ddimg'],0,strrpos($iteam['ddimg'],"--"));
            $imgwz=explode("--",$imgwz);
            $dtimgarr=$imgwz;
        }
        $this->s->assign("dtimgarr",$dtimgarr);
        $this->s->display("faxian.html");
    }
    //更多话题
    function htgd(){
        $huatidb=new db("htlb");
        $result=$huatidb->selall();
        $imgarr=[];
        foreach ($result as $iteam){
            $imgwz=substr($iteam['htimgs'],0,strrpos($iteam['htimgs'],"--"));
            array_push($imgarr,$imgwz);
        }
        $this->s->assign("imgarr",$imgarr);
        $this->s->assign("arr",$result);
        $this->s->display("qbht.html");
    }
    //动态详情页
    function pinglun(){
        $pid=$_REQUEST["id"];


        $huatidb=new db("dtlb");
        $result=$huatidb->selone("*","id=$pid");
        //处理图片
        $imgres=substr($result["ddimg"],0,strrpos($result["ddimg"],"--"));
        $imgres=explode("--",$imgres);
        $this->s->assign("imgres",$imgres);
        $this->s->assign("arr",$result);


        $pinglundb=new db("pllb");
        $plarr=$pinglundb->selall("*","pid=$pid");
        $plimgarr=[];
        foreach ($plarr as $iteam){

            $imgwz=substr($iteam['plimg'],0,strrpos($iteam['plimg'],"--"));
            $imgwz=explode("--",$imgwz);
            $plimgarr=$imgwz;
        }
        $this->s->assign("plimgarr",$plimgarr);
        $this->s->assign("plarr",$plarr);

        $this->s->display("dtxq.html");
    }

    function addpinglun(){
        $pid=$_REQUEST["id"];
        $this->s->assign("pid","$pid");
        $this->s->display("pl.html");

    }
    function insertpl(){
        $pid=$_REQUEST["pid"];
        $plnr=$_REQUEST["plnr"];
        $file=$file=$_FILES["file"];

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

        $dtdb=new db("pllb");
        $res=$dtdb->insert("plname,plnr,pid,plimg","'***','$plnr','$pid','$imgwz'");
//        var_dump($res);
        if($res){
            Header("Location:index.php?m=index&f=huati&a=pinglun&id={$pid}");
        }

    }


    function adddongtai(){
        $this->s->display("fbdt.html");
    }
    function insertdt(){
       $dtnr=$_REQUEST["dtnr"];
       $file=$file=$_FILES["file"];

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

        $dtdb=new db("dtlb");
        $res=$dtdb->insert("dtname,dtnr,dtdd,ddimg","'***','$dtnr','太原','$imgwz'");
        if($res){
            Header("Location:index.php?m=index&f=huati");
        }

    }
}