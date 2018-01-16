<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/28
 * Time: 19:28
 */

class session
{
    public function __construct()
    {
        session_start();
    }
    public function setSession($key,$value){
        $_SESSION[$key]=$value;
    }
    public function unsetSession($key){
        unset($_SESSION[$key]);
    }
    public function getSession($key){
        if (isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }
}
//$bb=new session();
//$bb->setSession("code","nice");
//$bb->unsetSession("code");
//$bb->getSession("code");

