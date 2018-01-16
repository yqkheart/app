<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/28
 * Time: 16:07
 */

class codes
{
    private $width=120;
    private $height=32;
    private $color="";
    private $img="";
    private $back="";
    private $fillpath="";
    private $dian="";
    private $line="";
    private $text="";
    function __construct($fillpath){
        $this->img=imagecreate($this->width,$this->height);
        $this->fillpath=$fillpath;
    }
    private function getback(){
        $this->back=imagefill($this->img,20,20,$this->getcolor($type="b"));
    }
    private function getcolor($type="l"){
        if ($type==="l"){
            $this->color=imagecolorallocate($this->img,mt_rand(120,240),mt_rand(120,240),mt_rand(120,240));
        }elseif($type==="b"){
            $this->color=imagecolorallocate($this->img,mt_rand(10,120),mt_rand(10,120),mt_rand(10,120));
        }
        return $this->color;
    }
    private function getdian(){
        for ($i=0;$i<20;$i++){
            $this->dian=imagesetpixel($this->img,mt_rand(0,120),mt_rand(0,40),$this->getcolor($type="l"));
        }
    }
    private function getline(){
        for ($i=0;$i<5;$i++){
            $this->line=imageline($this->img,mt_rand(0,30),mt_rand(0,30),mt_rand(100,120),mt_rand(0,40),$this->getcolor($type="b"));
        }
    }
    private function gettext(){

        $texts="0123456789qwertyuiopasdfghjklzxcvbnm";
        $codes="";
        for ($i=0;$i<4;$i++){
            $size=mt_rand(20,25);
            $anle=mt_rand(-10,10);
            $world=mb_substr($texts,mt_rand(0,strlen($texts)-1),1,'utf8');
            $world=mt_rand(0,1)? strtoupper($world):strtolower($world);
            $this->text=imagettftext($this->img,$size,$anle,$i*30+5,mt_rand(26,28),$this->getcolor($type="l"),$this->fillpath,$world);
            $codes.=$world;
        }
        session_start();
        $_SESSION['code']=$codes;
    }
    public function getphoto(){
        header("content-type:image/png");
        $this->getcolor();
        $this->getback();
        $this->getdian();
        $this->getline();
        $this->gettext();
        imagepng($this->img);
    }
}

