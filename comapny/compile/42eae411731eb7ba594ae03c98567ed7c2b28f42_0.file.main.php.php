<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-21 10:38:45
  from 'D:\quanzhan\app\comapny\template\admin\main.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a645fa5f14ea6_01120286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42eae411731eb7ba594ae03c98567ed7c2b28f42' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\main.php',
      1 => 1516527524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a645fa5f14ea6_01120286 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/13
 * Time: 16:19
 */

//<?php echo '?>';?>
<!doctype html>
<html lang="en">

<head>
    <title>后台管理界面</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo VENDOR_PATH;?>
linearicons/style.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
main.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo IMG_PATH;?>
apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo IMG_PATH;?>
favicon.png">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
klorofil-common.js"><?php echo '</script'; ?>
>
</head>
<style>
    .userBox{
        font-size: 25px;
        font-weight: 500;
        float: right;
        margin-right: 20px;
        margin-top: 22px;
    }
    body,html{
        width: 100%;
        height: 100%;
    }
    #wrapper{
        width: 100%;
        height: 100%
    }
    #main{
        width: 100%;
        height: 100%;
        position: relative;
        top:0;
        left:0;
    }
</style>

<body>
<!-- WRAPPER -->
<div id="wrapper" style="height: 100%;wdith:100%">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="index.html"><img src="<?php echo IMG_PATH;?>
logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>

            <div class="navbar-btn navbar-btn-right">
                <div class="btn btn-success" id="exitBox"><span>退出</span></div>
            </div>
            <span class="userBox">欢迎您！<span style="color: blue"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span></span>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar" style="overflow:auto">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
<!--                    <li><a href="webset.php" class="" target="mima"><i class="lnr lnr-cog"></i> <span>网站设置</span></a></li>-->
                    <li><a href="index.php?m=admin&a=changepass" class="" target="mima"><i class="lnr lnr-code"></i> <span>密码修改</span></a></li>
<!--                    <li><a href="index.php?m=index&a=category" class="" target="mima"><i class="lnr lnr-chart-bars"></i> <span>栏目管理</span></a></li>-->
<!--                    <li><a href="fenlei.php" class="" target="mima"><i class="lnr lnr-text-format"></i> <span>添加栏目</span></a></li>-->
                    <!--                    <li><a href="content.php" class="" target="mima"><i class="lnr lnr-alarm"></i> <span></span></a></li>-->
                    <li><a href="index.php?m=admin&f=category&a=init" class="" target="mima"><i class="lnr-file-empty"></i> <span>栏目展示</span></a></li>
                    <li>
                        <a href="#subPagess" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>摄影</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagess" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?&m=admin&f=content&a=init" class="" target="mima">内容展示</a></li>
                                <li><a href="index.php?m=admin&f=content&a=addcontent" class="" target="mima">内容添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesa" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>婚宴</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesa" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?m=admin&f=hunyue&a=init" class="" target="mima">内容管理</a></li>
                                <li><a href="index.php?m=admin&f=hunyue&a=addcontent" class="" target="mima">内容添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesa2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>策划</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesa2" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?m=admin&f=cehua&a=init" class="" target="mima">内容管理</a></li>
                                <li><a href="index.php?m=admin&f=cehua&a=addcontent" class="" target="mima">内容添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesa2s" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>礼服</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesa2s" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?m=admin&f=lifu&a=init" class="" target="mima">内容管理</a></li>
                                <li><a href="index.php?m=admin&f=lifu&a=addcontent" class="" target="mima">内容添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesa2sw" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>婚车</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesa2sw" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?m=admin&f=car&a=init" class="" target="mima">内容管理</a></li>
                                <li><a href="index.php?m=admin&f=car&a=addcontent" class="" target="mima">内容添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesa2sww" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>蜜月</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesa2sww" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?m=admin&f=miyue&a=init" class="" target="mima">内容管理</a></li>
                                <li><a href="index.php?m=admin&f=miyue&a=addcontent" class="" target="mima">内容添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesa2swww" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>造型</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesa2swww" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?m=admin&f=model&a=init" class="" target="mima">内容管理</a></li>
                                <li><a href="index.php?m=admin&f=model&a=addcontent" class="" target="mima">内容添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagesa2swwa" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>首饰</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagesa2swwa" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?m=admin&f=jewelry&a=init" class="" target="mima">内容管理</a></li>
                                <li><a href="index.php?m=admin&f=jewelry&a=addcontent" class="" target="mima">内容添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPages33" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>话题管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages33" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?m=admin&f=huati&a=init" class="" target="mima">话题展示</a></li>
                                <li><a href="index.php?m=admin&f=huati&a=addhuati" class="" target="mima">话题添加</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPagess44" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>动态评论</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPagess44" class="collapse ">
                            <ul class="nav">
                                <li><a href="index.php?&m=admin&f=dongtai&a=init" class="" target="mima">动态展示</a></li>
                                <li><a href="index.php?m=admin&f=pinglun&a=init" class="" target="mima">评论展示</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="main" id="main">
        <!-- MAIN CONTENT -->
        <div class="main-content" style="height: 100%">
            <div class="container-fluid" style="height: 100%;width: 100%;margin: 0">
                <iframe src="" frameborder="0" name="mima" style="width: 100%;height: 100%"></iframe>
            </div>
        </div>
    </div>

</div>
<!-- END WRAPPER -->
</body>

</html>
<?php echo '<script'; ?>
>
    $('#exitBox').click(function () {
        location.href="index.php?m=admin&a=exits";
    })
<?php echo '</script'; ?>
>


<?php }
}
