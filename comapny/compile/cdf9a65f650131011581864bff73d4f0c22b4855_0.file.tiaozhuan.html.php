<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-18 02:14:19
  from 'D:\quanzhan\app\comapny\template\admin\tiaozhuan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a5ff4eb068e20_37148277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf9a65f650131011581864bff73d4f0c22b4855' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\tiaozhuan.html',
      1 => 1515123286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5ff4eb068e20_37148277 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0;
    }
    .box{
        width: 500px;
        height: 400px;
        background: rgba(255,255,255,0.2);
        box-shadow: 0 0 10px rgba(0,0,0,0.6);
        position: fixed;
        left: 0px;
        top: 0px;
        right: 0px;
        bottom: 0px;
        margin: auto;
        text-align: center;

    }
    .topBox{
        width: 100%;
        height: 50%;
        text-align: center;
        line-height: 300px;
    }
    .color{
        color: red;
    }
    .beijing{
        position: fixed;
        width: 100%;
        height: 100%;
        background: #F3F5F8;
        /*background: red;*/
        /*background: url("../static/img/1464083856.png") no-repeat center;*/
        background-size: cover;
    }
</style>
<body>
<div class="beijing">
    <div class="box">
        <h2 class="topBox"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h2>
        <span class="color">3</span>秒后跳转，点击 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">立即跳转</a>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    var span=document.querySelector("span");
    var a=document.querySelector("a")
    var t=setInterval(function () {
        span.innerHTML--;
        if (span.innerHTML==0){
            clearInterval(t);
            location.href=a.href;
        }
    },1000)
<?php echo '</script'; ?>
><?php }
}