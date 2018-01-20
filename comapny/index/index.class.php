<?php
<<<<<<< HEAD


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
        $this->s->display("xinxi.html");
        $row=$db->selOne('*',"zhanghao='$user'");
        if($row==1){

                $this->jump('注册成功','index.php?m=index&f=index&a=main');

        }else{
                $this->jump('注册失败','index.php?m=index&f=index');
        }

        $db->close();

    }

    function check(){
        $sess=new session();
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
            $db=new db('users');
            $row=$db->selOne('*',"zhanghao='$user'");
            if($row){
                $sess->set('user',$user);
                if($row['password']===$pass){
                    $this->jump('登录成功','index.php?m=index&a=main');
                }else{
                    $this->jump('密码错误','index.php?m=index&f=index');
                }
            }else{
                $this->jump('账号不存在','index.php?m=index&f=index');
            }

        $db->close();
    }
    function main(){
        $this->s->display("xinxi.html");
    }
}
=======
    
    
>>>>>>> 02947fcb51a722f114f36991ba254026ab6d28f1
