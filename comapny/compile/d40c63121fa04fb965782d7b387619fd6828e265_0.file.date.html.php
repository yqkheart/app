<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-22 02:50:04
  from 'G:\myobject\app\comapny\template\index\date.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a65515c3dab13_11587975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40c63121fa04fb965782d7b387619fd6828e265' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\date.html',
      1 => 1516589403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a65515c3dab13_11587975 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
date.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
calendar.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
calendar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
date.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem-half.js"><?php echo '</script'; ?>
>
</head>

<body>
    <header>
        <div class="header">
            <div class="header-left">
                <a href="index.php?m=index&f=custom">
                    <img src="<?php echo IMG_PATH;?>
/定制流程/date_03.png" alt="">
                    <p class="first-p">
                        选择婚期
                    </p>
                    <p>
                        WEDDING DATE ..
                    </p>
                </a>
                
            </div>
            <div class="header-right">
                <a class="jump">
                    跳过
                    <img src="<?php echo IMG_PATH;?>
/定制流程/date_06.png" alt="">
                </a>
            </div>
        </div>
        <div class="page">
            .....................................
            <span>02</span>
            <span style="color: #F7A766;">/04</span> .....................................
        </div>
    </header>

    <main>
        <div class="bac">
            <div class="content">
                <section class="top">
                    <div class="content-top-left">
                        <img src="<?php echo IMG_PATH;?>
/定制流程/custom_03.png" alt="">
                    </div>
                    <div class="content-top-right">
                        <div class="select-city your-date">
                            <span>
                                <input type="hidden" class="mydate">
                                请选择您的婚礼日期
                            </span>
                            &nbsp;&nbsp;
                            <img src="<?php echo IMG_PATH;?>
/定制流程/custom_06.png" alt="">
                        </div>
                    </div>
                </section>
                <div class="shandow"></div>
                <section class="bottom">
                    <div id="demo">
                        <div id="ca"></div>
                    </div>
                    
                        <a >
                            <div class="btn">
                                 完成 
                            </div>
                        </a>
                </section>
               
            </div>
        </div>
    </main>
    
</body>
</html>
<?php }
}
