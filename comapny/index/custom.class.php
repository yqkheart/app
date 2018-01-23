<?php
    class custom extends admin
    {
        public $db;
        function __construct(){
            parent::__construct();
            $this->db=new db("custom");
        }
        function init(){

            $this->s->display("template/index/place.html");
        }
        function getplace(){
            $place=$_REQUEST['placeval'];
            $price=$_REQUEST['priceval'];
            // 必须获取用户id    缺失用户id
            $row=$this->db->update("place='$place',cprice='$price'","pid=1");
            echo $row;
        }
        function date(){
            $this->s->display("template/index/date.html");
        }
        function getdate(){
            $date=$_REQUEST["date"];
             // 必须获取用户id    缺失用户id
            $row=$this->db->update("date='$date'","pid=1");
            echo $row;
        }
        function project(){
            $this->s->display("template/index/project.html");
        }
        function getproject(){
            $project=$_REQUEST['myproject'];
            $row=$this->db->update("project='$project'","pid=1");
            echo $row;
        }
        function manner(){
            $this->s->display("template/index/manner.html");
        }
        function getmanner(){
            $style=$_REQUEST['style'];
            $row=$this->db->update("style='$style'","pid=1");
            echo $row;
        }
        function yourselect(){
            $mycustom=$this->db->selOne("*","pid=1");
            // var_dump($mycustom);
            $mlength=count(explode(" ",$mycustom['project'])) -1;
            $mproject=array_slice(explode(" ",$mycustom['project']),0,$mlength);
            $proportion=ceil(1/$mlength*$mycustom['cprice']);
            $arr=array();
            $brr=array();
            foreach ($mproject as $key => $value) {
                if(strpos($value,":")==true){
                    $a=explode(":",$value);
                }else if (strpos($value,"--")==true) {
                    $a=explode("--",$value);
                }
                array_push($arr,$a);
            }
            $this->s->assign("proportion",$proportion);
            $this->s->assign("mproject",$arr); 
            $this->s->assign("mycustom",$mycustom);
            $this->s->display("template/index/yourselect.html");
        }
        function getyourselect(){
            // place,cprice,date,style,project
            $place=$_REQUEST['place'];
            $cprice=$_REQUEST['cprice'];
            $date=$_REQUEST['date'];
            $style=$_REQUEST['style'];
            $project=$_REQUEST['project'];
            $row=$this->db->update("place='$place',cprice='$cprice',date='$date',project='$project',style='$style'","pid=1");
            echo $row;
        }
        function shouye(){
            $row0=$this->db->selOne("project,pid","pid=1");
            $row1=explode(" ",$row0['project']);
            $row2=array_slice($row1,0,count($row1)-1);
            $shouyearr=array();
            foreach ($row2 as $key => $value) {
                $row3=explode(":",$value);
                array_push($shouyearr,$row3);
            }
            $this->s->assign("arr",$shouyearr);
            $this->s->assign("pid",$row0['pid']);
            $this->s->display("template/index/shouye.html");
        }
        function guanli(){
            $pid=$_REQUEST['pid'];
            $row0=$this->db->selOne("project,style","pid='$pid'");
            $row1=explode(" ",$row0['project']);
            $row2=array_slice($row1,0,count($row1)-1);
            $shouyearr=array();
            foreach ($row2 as $key => $value) {
                $row3=explode(":",$value);
                array_push($shouyearr,$row3);
            }
            $xiangxi=array();
            foreach ($shouyearr as $key => $value) {
                
                $a="db";
                $d=$a.strval($key);
                $d=new db("$value[2]");
                $row="row".strval($key);
                $row=$d->selAll("*","price < $value[1] or style = '{$row0['style']}'  ");
                array_push($xiangxi,$row);
            }
            $this->s->assign("xiangxi",$xiangxi);
            $this->s->assign("arr",$shouyearr);
            $this->s->display("template/index/hunlifangan.html");
        }
        
        /* 修改项目 */
        function changeplace(){
            $this->s->display("template/index/changeplace.html");
        }
        function changedate(){
            $this->s->display("template/index/changedate.html");
        }
        function changemanner(){
            $this->s->display("template/index/changemanner.html");
        }
        function changeproject(){
            $this->s->display("template/index/changeproject.html");
        }
    }
    