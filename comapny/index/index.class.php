<?php



class index extends indexmain
{
    function init(){
        $this->s->display('login.html');
    }

    function zhuce(){

        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $db=new db('users');
        $row=$db->insert("zhanghao,password","'$user','$pass'");
//        var_dump($row);

        if($row==1){
                $this->jump('注册成功',"index.php?m=index&f=index&a=main&zhanghao=$user");

        }else{
                $this->jump('注册失败','index.php?m=index&f=index');
        }


    }

    function check(){
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
            $db=new db('users');
            $row=$db->selOne('*',"zhanghao='$user'");
            if($row){
                if($row['password']===$pass){
                    $this->jump('登录成功','index.php?m=index&a=main');
                }else{
                    $this->jump('密码错误','index.php?m=index&f=index');
                }
            }else{
                $this->jump('账号不存在','index.php?m=index&f=index');
            }


    }
    function main(){
        $zhanghao=$_REQUEST["zhanghao"];
        $this->s->assign("zhanghao","$zhanghao");
        $this->s->display("xinxi.html");
    }
    function addxinxi(){
        $zhanghao=$_REQUEST["zhanghao"];
        $name=$_REQUEST["name"];
        $sex=$_REQUEST["sex"];
        $tel=$_REQUEST["tel"];
        $location=$_REQUEST["location"];
        $birthday=$_REQUEST["birthday"];

        $xxdb=new db("users");
        $res=$xxdb->update("name='$name',sex='$sex',tel='$tel',location='$location',birthday='$birthday'","zhanghao='$zhanghao'");

        if($res==1){
            $this->jump('修改成功',"index.php?m=index");

        }else{
            $this->jump('修改失败','index.php?m=index&f=index&a=addxinxi');
        }
    }
}

