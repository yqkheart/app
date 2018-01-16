<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2
 * Time: 15:53
 */

class db{
    public $db="";
    private $host="localhost";
    private $uname="root";
    private $pass="";
    private $dbname="class2016";
    private $port="3306";
    private $table="";
    public function __construct($table)
    {
        $this->db=new mysqli($this->host,$this->uname,$this->pass,$this->dbname,$this->port);
        header("content-type:text/html;charset=utf8");
        $this->db->query("set names utf8");
        $this->table=$table;
    }
    //查询所有
    public function selAll($b="*",$where=null){
        if ($where===null){
            $sql="select * from ".$this->table;
        }else{
            $sql="select ".$b." from ".$this->table." where ".$where;
        }
        $result=$this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    //查询单个
    public function selOne($b="*",$where){
        $sql="select ".$b." from ".$this->table." where ".$where;
        $result=$this->db->query($sql);
        return $result->fetch_assoc();
    }
    //删除
    public function del($where){
        $sql="delete from ".$this->table." where ".$where;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    //更新
    public function update($shezhi,$where){
        $sql="update ".$this->table." set ".$shezhi." where ".$where;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    //增加
    public function insert($name,$newname){
        $sql="insert into ".$this->table." ( $name ) values (" .$newname." )";
        $this->db->query($sql);
        return $this->db->affected_rows;
//        echo $sql;
    }
    function limit($b="*",$where=null,$limit=null){
        $sql=$sql="select ".$b." from ".$this->table." where ".$where." limit ".$limit;
        $result=$this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
//$aa=new db("contact");
//
////echo  $aa->insert("name,tel,email,calls,liuyan" , " 's','a','a','a','wqw'");
//echo $aa->insert("name","'yqk'");