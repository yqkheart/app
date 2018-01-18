<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-18 02:11:34
  from 'D:\quanzhan\app\comapny\template\admin\login2.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a5ff4466defe1_24437050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7799a5b75d7d7036e9d5a45693a3e7ff1e7cff32' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\login2.php',
      1 => 1516237625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5ff4466defe1_24437050 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/18
 * Time: 18:36
 */
<?php echo '?>';?>
<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
    <title>博客登录界面</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
style.css">
<!--    js-->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
main.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo IMG_PATH;?>
apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo IMG_PATH;?>
favicon.png">
</head>
<style>
    #yanzhengma{
        width: 100px;
        height: 100%;
        display: inline-block;
    }
    .imgE{
        width: 100%;
        height: 100%;
        display: block;
    }
    .coverImg{
        width: 100%;
        height: 100%;
        background: rgba(99,150,181,0.8);
        position: absolute;
        top: 0px;
        left: 0;
    }
    .checkBox{
        position: absolute;
        left: 0;
        top: 0;
    }
    .checkBoxs{
        position: relative;
        height: 15px;
    }
    .error{
        margin-bottom: 0px;
        width: 100%;
        height: 100%;
        text-align: left;
    }
    .auth-box .left{
        text-align: left;
    }
</style>
<body>
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content" style="width: 98%;">
                        <div class="header">
                            <div class="logo text-center"><img src="<?php echo IMG_PATH;?>
logo-dark.png" alt="Klorofil Logo"></div>
                            <p class="lead">Login to your blog</p>
                        </div>
                        <form class="form-auth-small" action="index.php?m=index&a=check" id="box" method="post">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">账号</label>
                                <input type="text" class="form-control" id="signin-email" placeholder="user" name="user">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="signin-password" placeholder="Password" name="pass">
                            </div>
                            <div class="form-group ">
                                <label for="yam" class="control-label sr-only">验证码</label>
                                <input type="text" class="form-control" id="yanzhengma" placeholder="验证码" name="code">
                                <img src="index.php?m=index&a=code" onclick="this.src='index.php?m=index&a=code&'+Math.random(0,1)" alt="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            <button type="text" id="resgiter" class="btn btn-primary btn-lg btn-block" onclick="return false">SIGN UP</button>
                            <div class="bottom">
<!--                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>-->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay">
                        <img class="imgE" src="<?php echo IMG_PATH;?>
login-bg.jpg" alt="">
                        <div class="coverImg"></div>
                    </div>
                    <div class="content text">
                        <h1 class="heading">Welcome to my blog!</h1>
                        <p>by The Warmheart</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>

</html>
<?php echo '<script'; ?>
>
    $('#box').validate({
        rules:{
            user:{
                required:true,
            },
            pass:{
                required:true,
            },
            code:{
                required:true,
            }
        },
        messages:{
            user:{
                required:"请输入账号"
            },
            pass:{
                required:"请输入密码"
            }
        }
    })
    $("#resgiter").click(function () {
        location.href="resgiter.php"
    })
<?php echo '</script'; ?>
>

<?php }
}
