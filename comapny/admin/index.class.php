<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/29
 * Time: 11:48
 */
class index
{
    public $s;
    function __construct()
    {
        include_once LIBS_PATH."smarty/Smarty.class.php";
        $this->s=new Smarty();
        $this->s->setCompileDir("compile/");
        $this->s->setTemplateDir("template/admin/");
    }
    function init(){
        $this->s->display("template/admin/login2.php");
    }
    function code(){
        $code=new codes('libs/font.ttf');
        $code->getphoto();
    }
    function jump($mess,$url){
        $this->s->assign("mess",$mess);
        $this->s->assign("url",$url);
        $this->s->display("template/admin/tiaozhuan.html");
    }
    function check(){
        $session=new session();
        $user=$_REQUEST["user"];
        $pass=$_REQUEST["pass"];
        $code=$_REQUEST['code'];
        if (strtoupper($code)===strtoupper($session->getSession('code'))){
            $dbs=new db('yqk');
            $row=$dbs->selOne('*',"zhanghao='$user'");
            if ($row['zhanghao']){
                $row1=$dbs->selOne('pass',"zhanghao='$user'");
                if ($row1['pass']===$pass){
                    $session->setSession('user',$user);
                    $this->jump('登录成功','index.php?m=admin&a=main');
                }else{
                    $this->jump('密码错误','index.php');
                }
            }else{
                $this->jump('账号不存在','index.php');
            }
        }else{
            $this->jump('验证码错误','index.php');
        }

    }
//    进去后台界面
    function main(){
        $session=new session();
        if ($session->getSession('user')){
            $this->s->assign('user',$session->getSession('user'));
            $this->s->display('template/admin/main.php');
        }else{
            $this->jump('请先登录','index.php?m=admin');
        }
    }
//    退出主界面功能
    function exits(){
        $session=new session();
        $session->unsetSession('user');
        $this->jump('退出成功','index.php?m=admin');
    }
//    密码修改页面呈现
    function changepass(){
        $session=new session();
        $this->s->assign('user',$session->getSession('user'));
        $this->s->display('template/admin/changepass.php');
    }
//    密码修改功能实现
    function updatepass(){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $db=new db('yqk');
        $row=$db->update("pass='$pass'","zhanghao='$user'");
        if ($row==1){
            echo "修改成功";
        }else{
            echo "修改失败";
        }
    }
}