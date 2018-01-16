<?php
/**
 * Created by PhpStorm.
 * User: 陶慧勇
 * Date: 2018/1/7
 * Time: 16:45
 */

class page
{
//    共多少条 共多少页 首页 第几页 尾页
    public $totle=0;
    public $num=0;

    public $current=0;
    public $url="";
    public $str="";
    public $page="";
    //初始化
    function __construct($totle,$num)
    {
        $this->totle=$totle;
        $this->num=$num;
        $this->page=ceil($this->totle/$this->num);
        //当前页判断page
        $this->current=isset($_REQUEST['page'])? $_REQUEST['page']:0;
        $this->url=isset($_REQUEST['page'])? substr($_SERVER['REQUEST_URI'],0,-1):
            $_SERVER["REQUEST_URI"]."&page=";
    }
    function output(){
//        $p=$this->current*$this->num;
        $end=$this->page-1;
        $prev=$this->current-1<0? 0 :$this->current-1;
        $next=$this->current+1>$end? $end : $this->current+1;
        $start=$this->current-1<0 ? 0 :$this->current-1;
        $stop=$this->current+1>$end? $end : $this->current+1;
        $this->str.="<div class='nextPage'>";
//        $this->str.="<div class='first-page'>共{$this->totle}条</div>";
//        $this->str.="<div class='first-page'>共{$this->page}页</div>";
//        $this->str.="<div class='first-page'><a href='{$this->url}0'>首页</a></div>";
        $this->str.="<div class='preBox'><a href='{$this->url}{$prev}'>上一页</a></div>";
        for ($i=$start;$i<=$stop;$i++){
            $n=$i+1;
            if($i==$this->current){
                $this->str.="<div  class='oneBox'><a style='color: #fff;'>{$n}</a></div>";
            }else{
                $this->str.="<div class='oneBox'><a href='{$this->url}{$i}'>{$n}</a></div>";
            }
        }
        $this->str.="<div class='nextBox'><a href='{$this->url}{$next}'>下一页</a></div>";
//        $this->str.="<div class='first-page'><a href='{$this->url}{$end}'>尾页</a></div>";
        $this->str.="</div>";
        return $this->str;
    }

}