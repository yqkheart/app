<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 07:50:32
  from 'G:\myobject\app\comapny\template\index\yourselect.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a61a348b882e4_73010579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5c1f72cd461b5efbf097c21842120970982dd6' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\yourselect.html',
      1 => 1516348232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a61a348b882e4_73010579 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
yourselect.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem-half.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
yourselect.js"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <div class="header">
            <div class="header-left">
                <a href="manner.html">
                    <img src="<?php echo IMG_PATH;?>
定制流程/date_03.png" alt="">
                    <p class="first-p">
                        您的婚礼选择 ..
                    </p>
                    <p>
                        WEDDING STYLE ..
                    </p>
                </a>
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
            .....................................&nbsp;
            <span><img src="<?php echo IMG_PATH;?>
定制流程/page4_03.png" alt=""></span>&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;.....................................
        </div>
    </header>
    
    <main>
        <div class="bac">
            <div class="content">
                <section class="top">
                    <div class="content-top-left content-scale1">
                        <img src="<?php echo IMG_PATH;?>
定制流程/page4_07.png" alt="">
                    </div>
                    <div class="content-top-right">
                        <div class="modify">
                            <div class="modify-content modify-place"><?php echo $_smarty_tpl->tpl_vars['mycustom']->value["place"];?>
</div>
                            <img src="<?php echo IMG_PATH;?>
定制流程/custom_24.png" alt="">
                        </div>
                    </div>
                </section>
                <div class="shandow"></div>
                <section class="top">
                    <div class="content-top-left  content-scale2">
                        <img src="<?php echo IMG_PATH;?>
定制流程/page4_11.png" alt="">
                    </div>
                    <div class="content-top-right">
                        <div class="modify">
                            <div class="modify-budget modify-cprice"><?php echo $_smarty_tpl->tpl_vars['mycustom']->value["cprice"];?>
</div>
                        <img src="<?php echo IMG_PATH;?>
定制流程/custom_24.png" alt="">
                        </div>
                    </div>
                </section>
                <div class="shandow"></div>
                <section class="top">
                    <div class="content-top-left  content-scale3">
                        <img src="<?php echo IMG_PATH;?>
定制流程/page4_14.png" alt="">
                    </div>
                    <div class="content-top-right">
                        <div class="modify">
                            <div class="modify-date modify-date"><?php echo $_smarty_tpl->tpl_vars['mycustom']->value["date"];?>
</div>
                            <img src="<?php echo IMG_PATH;?>
定制流程/custom_24.png" alt="">
                        </div>
                    </div>
                </section>
                <div class="shandow"></div>
                <section class="top">
                    <div class="content-top-left  content-scale4">
                        <img src="<?php echo IMG_PATH;?>
定制流程/page4_18.png" alt="">
                    </div>
                    <div class="content-top-right">
                        <div class="modify">
                            <div class="modify-fugu modify-style"><?php echo $_smarty_tpl->tpl_vars['mycustom']->value["style"];?>
</div>
                            <img src="<?php echo IMG_PATH;?>
定制流程/custom_24.png" alt="">
                        </div>
                    </div>
                </section>
                <div class="shandow"></div>
                <section class="top">
                    <div class="content-top-left  content-scale5">
                        <span>
                             您的预算里包含:  
                        </span>
                       
                    </div>
                    <div class="content-top-right">
                        <div class="modify modify-project">
                            <span>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mproject']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
:<input class="pro" type="text" value="<?php echo $_smarty_tpl->tpl_vars['proportion']->value;?>
"></li>&nbsp;
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </span>
                            
                            <img src="<?php echo IMG_PATH;?>
定制流程/custom_24.png" alt="">
                        </div>
                    </div>
                </section>
                <a >
                    <div class="sub-next1 ">
                        立即定制
                    </div>
                </a>
            </div>
        </div>
    </main>
</body>
</html><?php }
}
