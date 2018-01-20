<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 10:02:15
  from 'C:\wamp64\www\php\app\comapny\template\index\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a61c22720d145_40022518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ed44d04984733825500a8dc18fab68e5feb45a' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\app\\comapny\\template\\index\\login.html',
      1 => 1516356129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a61c22720d145_40022518 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登陆</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../src/img/lzwimg/logo.png" media="screen" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
lzwcss/login.css">
    <link rel="stylesheet" href="<?php echo FONT_PATH;?>
lzeiconfont/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lzwjs/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lzwjs/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lzwjs/login.js"><?php echo '</script'; ?>
>
</head>
<body>
<section>
    <section class="bg-img">
        <!--背景遮罩-->
        <div class="zhao"></div>
        <!--头部-->
        <header>
            <div class="header-zi2">&middot;&middot;&nbsp;&nbsp;正在登录&nbsp;&nbsp;&middot;&middot;</div>
            <div class="header-zi3">其他方式</div>
        </header>

        <!--用户头像-->
        <div class="yonghu-box">
            <img src="<?php echo IMG_PATH;?>
lzwimg/yonghu_03.png" alt="">
        </div>

        <!--登陆注册-->
        <div class="login-box">
            <ul class="login">
                <li class="yinying"></li>
                <li class="lo-zi sibian1 active">
                    
                </li>
                <span class="denglu">登录</span>
                <li class="triangle_border_down  sanjiao1 active1"></li>
            </ul>

            <ul class="register">
                <li class="yinying"></li>
                <li class="lo-zi sibian2">
                    
                </li>
                <span class="denglu">注册</span>
                <li class="triangle_border_down sanjiao2"></li>
            </ul>
        </div>
    </section>
    <!--登陆 注册 选项卡-->
    <!--注册-->
    <form class="footer-box box2" action="index.php?m=index&f=index&a=zhuce" method="post">
        <div class="xg-box">
            <div class="input">
                <div>
                    <img src="<?php echo IMG_PATH;?>
lzwimg/icon_03.png" alt="">
                </div>
                <input type="text" name="user" placeholder="请输入用户名" autofocus required maxlength="10">
            </div>
            <div class="input">
                <div>
                    <img src="<?php echo IMG_PATH;?>
lzwimg/icon_06.png" alt="">
                </div>
                <input type="password" name="pass" placeholder="请设置您的密码" required maxlength="16">
            </div>
            <div class="input input1">
                <div>
                    <img src="<?php echo IMG_PATH;?>
lzwimg/icon_08.png" alt="">
                </div>
                <input type="password" name="pass1" placeholder="请重新输入密码" required maxlength="16">
            </div>
            <!--提交按钮-->
            <a>
                <input type="submit" class="btn" value="立即注册">
                 <!--<button type="submit" class="btn">立即注册</button>-->
            </a>
           
            <!--底部三个icon-->
            <footer>
                <div class="icon">
                    <i class="iconfont1 icon-weixin"></i>
                </div>
                <div class="icon">
                    <i class="iconfont1 icon-QQ"></i>
                </div>
                <div class="icon">
                    <i class="iconfont1 icon-89"></i>
                </div>
            </footer>
        </div>
    </form>
    <!--登陆-->
    <form class="footer-box active3 box1" action="index.php?m=index&f=index&a=check" method="post">
        <div class="xg-box">
            <div class="input">
                <div>
                    <img src="<?php echo IMG_PATH;?>
lzwimg/icon_03.png" alt="">
                </div>
                <input type="text" placeholder="请输入您的账号/手机号" autofocus required maxlength="10" name="user">
            </div>
            <div class="input input2">
                <div>
                    <img src="<?php echo IMG_PATH;?>
lzwimg/icon_06.png" alt="">
                </div>
                <input type="password" placeholder="请设置您的密码" required maxlength="16" name="pass">
                <span>
                    <i class="iconfont icon-biyan"></i>
                </span>
            </div>
            <div class="input1 ">
                <a href="password.html">
                    <div class="input-zi">忘记密码</div>
                </a>
                <div class="input-zi">
                    <i class="icon icon-aixin"></i>
                    <a href="">记住密码</a>
                </div>
            </div>
            <!--提交按钮-->
            <a>
                <input type="submit" class="btn" value="立即登陆">
                <!--<button type="submit" class="btn">立即登陆</button>-->
            </a>
            <!--第三方登陆-->
            <div class="sanfang">第三方账号登陆</div>
            <!--底部三个icon-->
            <footer>
                <div class="icon">
                    <i class="iconfont1 icon-weixin"></i>
                </div>
                <div class="icon">
                    <i class="iconfont1 icon-QQ"></i>
                </div>
                <div class="icon">
                    <i class="iconfont1 icon-89"></i>
                </div>
            </footer>
        </div>
    </form>
</section>

</body>
</html><?php }
}
