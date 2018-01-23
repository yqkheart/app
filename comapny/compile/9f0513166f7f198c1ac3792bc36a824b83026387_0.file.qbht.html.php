<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 09:52:59
  from 'G:\myobject\app\comapny\template\index\qbht.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6705fb4f4a03_08768382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f0513166f7f198c1ac3792bc36a824b83026387' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\qbht.html',
      1 => 1516700824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6705fb4f4a03_08768382 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>全部话题</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wkqbht.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkjquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkrem.js"><?php echo '</script'; ?>
>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH;?>
logo.png" media="screen" />
</head>
<body>
<header>
    <div class="head-fh"><a href="index.php?m=index&f=huati">&lt;</a></div>
    <div class="head-wz">全部话题</div>
</header>
<section class="qbht">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'iteam', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['iteam']->value) {
?>
    <div class="qbht-detail">
        <div class="qbhtyy"></div>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgarr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" alt="">
        <div class="qbht-wz">
           <div class="qbzt-title"><?php echo $_smarty_tpl->tpl_vars['iteam']->value["htname"];?>
</div>
            <a class="qbht-dz" href="">
                <div class="qbht-dzimg">
                    <img src="<?php echo IMG_PATH;?>
zxfb-dz.png" alt="">
                </div>

                <span><?php echo $_smarty_tpl->tpl_vars['iteam']->value["htdzcounts"];?>
</span>
            </a>
            <a class="qbht-sc" href="">
                <div class="qbht-scimg">
                    <img src="<?php echo IMG_PATH;?>
zxfb-sc.png" alt="">
                </div>
                <span><?php echo $_smarty_tpl->tpl_vars['iteam']->value["htsccounts"];?>
</span>
            </a>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!--<div class="qbht-detail">-->
        <!--<div class="qbhtyy"></div>-->
        <!--<img src="<?php echo IMG_PATH;?>
qbht01.png" alt="">-->
        <!--<div class="qbht-wz">-->
            <!--<div class="qbzt-title">最具创意的婚纱</div>-->
            <!--<a class="qbht-dz" href="">-->
                <!--<div class="qbht-dzimg">-->
                    <!--<img src="<?php echo IMG_PATH;?>
zxfb-dz.png" alt="">-->
                <!--</div>-->

                <!--<span>200</span>-->
            <!--</a>-->
            <!--<a class="qbht-sc" href="">-->
                <!--<div class="qbht-scimg">-->
                    <!--<img src="<?php echo IMG_PATH;?>
zxfb-sc.png" alt="">-->
                <!--</div>-->
                <!--<span>200</span>-->
            <!--</a>-->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="qbht-detail">-->
        <!--<div class="qbhtyy"></div>-->
        <!--<img src="<?php echo IMG_PATH;?>
qbht01.png" alt="">-->
        <!--<div class="qbht-wz">-->
            <!--<div class="qbzt-title">最具创意的婚纱</div>-->
            <!--<a class="qbht-dz" href="">-->
                <!--<div class="qbht-dzimg">-->
                    <!--<img src="<?php echo IMG_PATH;?>
zxfb-dz.png" alt="">-->
                <!--</div>-->

                <!--<span>200</span>-->
            <!--</a>-->
            <!--<a class="qbht-sc" href="">-->
                <!--<div class="qbht-scimg">-->
                    <!--<img src="<?php echo IMG_PATH;?>
zxfb-sc.png" alt="">-->
                <!--</div>-->
                <!--<span>200</span>-->
            <!--</a>-->
        <!--</div>-->
    <!--</div>-->
</section>
</body>
</html><?php }
}
