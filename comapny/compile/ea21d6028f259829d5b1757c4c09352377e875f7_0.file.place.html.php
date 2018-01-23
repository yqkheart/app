<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 02:04:00
  from 'G:\myobject\app\comapny\template\index\place.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a615210ea9256_71118430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea21d6028f259829d5b1757c4c09352377e875f7' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\place.html',
      1 => 1516327431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a615210ea9256_71118430 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
jquery.range.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
place.css">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem-half.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.range.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
place.js"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <div class="header">
            <div class="header-left">
                <img src="<?php echo IMG_PATH;?>
定制流程/date_03.png" alt="">
                <p class="first-p">
                    填写所在地及预算
                </p>
                <p>
                    BASIC INFORMATION ..
                </p>
            </div>
            <div class="header-right">
                <a href="">
                    跳过
                    <img src="<?php echo IMG_PATH;?>
定制流程/date_06.png" alt="">
                </a>
            </div>
        </div>
        <div class="page">
            .....................................
            <span>01</span>
            <span style="color: #F7A766;">/ 04</span> .....................................
        </div>
    </header>
    <main>
        <div class="bac">
            <div class="content">
                <section class="top">
                    <div class="content-top-left">
                         <img src="<?php echo IMG_PATH;?>
定制流程/custom_03.png" alt="">   
                    </div>
                    <div class="content-top-right">
                        <div class="select-city your-city">
                            <span>
                               <input type="hidden" class="myinput" value="北京">
                                请选择您所在的城市
                            </span>&nbsp;&nbsp;
                            <img src="<?php echo IMG_PATH;?>
定制流程/custom_06.png" alt="">
                        </div>        
                    </div>
                </section>
                <div class="shandow"></div>
                <section class="middle">
                    <div class="now">
                        <span>
                            当前定位:
                        </span>
                        <span class="now-img">
                            <div class="now-img-place">
                              
                            </div>
                        </span>
                        
                        <span class="restart">
                            重新定位
                        </rspan>
                    </div>
                    <ul class="push-place active">
                        <li>
                            <span>北京</span>
                        </li>
                        <li>
                            <span>上海</span>
                        </li>
                        <li>
                            <span>广州</span>
                        </li>
                        <li>
                            <span>天津</span>
                        </li>
                    </ul>
                    <ul class="push-place1 active">
                        <li>
                            <span>河北</span>
                        </li>
                        <li>
                            <span>西安</span>
                        </li>
                        <li>
                            <span>苏州</span>
                        </li>
                    </ul>
                </section>
                <section class="bottom">
                    <div class="budget">
                        <section class="bo">
                            <div class="content-bo-left">
                                <img src="<?php echo IMG_PATH;?>
定制流程/custom_21.png" alt="">
                            </div>
                            <div class="content-bo-right">
                                <div class="select-city select-budget">
                                    <span>
                                        <input type="hidden" class="myinput" value="200000">
                                        请选择或者数去您的预算
                                    </span>
                                    &nbsp;
                                    <img src="<?php echo IMG_PATH;?>
定制流程/custom_24.png" alt="">
                                </div>
                            </div>
                        </section>
                        <div class="shandow"></div>
                        <div class="slider">
                            <input type="hidden" class="slider-input04" value="200000" />
                            <a >
                            <div class="sub-next ">
                                    下一步
                            </div>
                            </a>
                        </div>
                    </div>        
                </section>
            </div>    
        </div>
    </main>
</body>
</html>
<?php }
}
