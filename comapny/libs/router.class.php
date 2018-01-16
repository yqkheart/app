<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/29
 * Time: 11:32
 */

class router
{
    private $m;
    private $f;
    private $a;

    function getFun(){
        $this->m=isset($_REQUEST['m'])? $_REQUEST['m']:'index';
        $this->f=isset($_REQUEST['f'])? $_REQUEST['f']:'index';
        $this->a=isset($_REQUEST['a'])? $_REQUEST['a']:'init';
        if (is_dir($this->m)){
            $path=$this->m;
            $file=$path."/".$this->f.".class.php";
//            echo $file;
            if (is_file($file)){
                include_once $file;
                if (class_exists($this->f)){
                    $class=$this->f;
                    $c=new $class();
                    if (method_exists($c,$this->a)){
                        $fun=$this->a;
                        $c->$fun();
                    }else{
                        echo $this->a."方法不存在";
                    }
                }else{
                    echo $this->f."类不存在";
                }
            }else{
                echo $this->f.".class.php文件不存在";
            }
        }else{
            echo $this->m."模块不存在";
        }
    }
}
