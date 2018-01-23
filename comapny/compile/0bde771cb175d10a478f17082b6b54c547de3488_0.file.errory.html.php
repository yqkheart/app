<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-22 10:35:05
  from 'C:\wamp64\www\php\app\comapny\template\index\errory.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a65be59df6d15_87248354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bde771cb175d10a478f17082b6b54c547de3488' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\app\\comapny\\template\\index\\errory.html',
      1 => 1516617303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a65be59df6d15_87248354 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lzwjs/rem.js"><?php echo '</script'; ?>
>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        text-decoration: none;
    }
    .box{
        width: 5.54rem;
        height: 4.62rem;
        /*background: rgba(0,0,0,.2);*/
        /*box-shadow: 0 0 10px rgba(0,0,0,0.6);*/
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        /*margin-right: auto;*/
        /*margin-left: auto;*/
        /*text-align: center;*/
    }
    .box img{
        display: block;
        width: 100%;
        height: 100%;
    }
    .topBox{
        width: auto;
        height: auto;
        font-size: .24rem;
        color: #fff;
        text-align: center;
        line-height: .24rem;
        /*background: #000;*/
        position: absolute;
        top: 2.2rem;
        left: 0;
        right: 0;
        margin-right: auto;
        margin-left: auto;
        /*margin-bottom: .12rem;*/
    }
    .color{
        display: block;
        width: auto;
        height: auto;
        color: #FFBF97;
        font-size: .14rem;
        line-height: .14rem;
        position: absolute;
        top: 2.56rem;
        left: 0;
        right: 0;
        margin-right: auto;
        margin-left: auto;
        /*background: #000;*/
        text-align: center;
    }
    .beijing{
        position: fixed;
        width: 100%;
        height: 100%;
        /*background: #F3F5F8;*/
        /*background: red;*/
        background: url("<?php echo IMG_PATH;?>
lzwimg/mess.png") no-repeat center;
        background-size: cover;
    }
    .zhao{
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,.6);
    }
    .zi-box{
        width: 3.77rem;
        height: .69rem;
        background: #333843;
        position: absolute;
        bottom: .13rem;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        border-radius: .4rem;
        display: flex;
        justify-content: space-between;
        padding: .06rem .08rem;
    }
    .zi-box > div{
        width: 1.87rem;
        height: .57rem;
        /*background: red;*/
        border-radius: 3rem;
        font-size: .22rem;
        color: #fff;
        text-align: center;
        line-height: .57rem;
    }
    .zi{
        background: #FFD452;
        position: relative;
    }
    .zi a{
        color: #fff;
    }
    .dian{
        width: .12rem;
        height: .12rem;
        background: #FF8C2A;
        border-radius: 50%;
        position: absolute;
        top: 0;
        bottom: 0;
        margin-bottom: auto;
        margin-top: auto;
        font-size: .4rem;
        color: #fff;
        text-align: center;
        line-height: .06rem;
    }
    .dian1{
        left: .06rem;
    }
    .dian2{
        right: .06rem;
    }
</style>
<body>
<div class="beijing">
    <div class="zhao"></div>
    <div class="box">
        <img src="<?php echo IMG_PATH;?>
lzwimg/errory_03.png" alt="">
        <h2 class="topBox"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h2>
        <span class="color">SORRY, THE NUMBER YOU ENTERED DOSE NOT EXIST</span>
        <div class="zi-box">
            <div class="zi">
                <div class="dian dian1">&middot;</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">重新输入</a>
                <div class="dian dian2">&middot;</div>
            </div>
            <div>稍后再试</div>
        </div>
        <!--<h2 class="topBox"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h2>-->
        <!--<span class="color">3</span>秒后跳转，点击 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">立即跳转</a>-->
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    // var span=document.querySelector("span");
    // var a=document.querySelector("a")
    // var t=setInterval(function () {
    //     span.innerHTML--;
    //     if (span.innerHTML==0){
    //         clearInterval(t);
    //         location.href=a.href;
    //     }
    // },1000)

    var zi=document.querySelector('.zi');
    var a=document.querySelector("a");
    // console.log(zi,a);
    zi.onclick=function () {
        location.href=a.href;
    }
<?php echo '</script'; ?>
><?php }
}
