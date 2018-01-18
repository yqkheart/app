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
    function getcategory($db){
        $arr=$this->db->selAll('*');
        if ($arr){
            foreach ($arr as $item){
                $this->btr.="
                    <tr>
                            <td>{$item['id']}</td>
                            <td>{$item['name']}</td>
                            <td>{$item['price']}</td>
                            <td>{$item['address']}</td>
                        </tr>
                ";
            }
        }
    }
}