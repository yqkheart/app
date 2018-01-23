<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 09:52:23
  from 'G:\myobject\app\comapny\template\index\dtxq.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6705d7bdc183_84427157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e418dadca2899c1c629fcf83dd06b94cbba6591c' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\dtxq.html',
      1 => 1516700824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6705d7bdc183_84427157 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>动态详情</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wkdtxq.css">
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
    <div class="head-wz">动态详情</div>
</header>
<main>
    <div class="zxfb-detail">
        <div class="zxfb-top">
            <div class="zxfbtx">
                <div class="zxfbtximg">
                </div>
            </div>
            <div class="zxfbnc">
                <div class="zxfbnc-nc"><?php echo $_smarty_tpl->tpl_vars['arr']->value["dtname"];?>
</div>
                <div class="zxfbnc-sj"><?php echo $_smarty_tpl->tpl_vars['arr']->value["dttime"];?>
</div>
            </div>
            <div class="zxfbdd">
                <a href="">关注</a>
            </div>
        </div>
        <div class="zxfb-main">
            <div class="zxfb-mainwz">
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['arr']->value["dtnr"];?>

                </p>
            </div>
            <div class="zxfb-maintp">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgres']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                <div class="zxfb-mainimg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="">
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="zxfb-dian">
                &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot;
                &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot;

            </div>
            <div class="zxfb-bot">
                <div class="zxfbdd-img">
                    <img src="<?php echo IMG_PATH;?>
zxfbhg.png" alt="">
                </div>
                <div class="zxfbdd-wz"><?php echo $_smarty_tpl->tpl_vars['arr']->value["dtdd"];?>
</div>
            </div>

        </div>
    </div>

</main>
<div class="qbpl">
    <div class="qbpl-title">
        <div class="qbpl-titlewz">全部评论</div>
        <div class="qbpl-titletp">
            <img src="<?php echo IMG_PATH;?>
qbpl0.png" alt="">
        </div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plarr']->value, 'pl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->value) {
?>
    <div class="qbpl-detail">
        <div class="qbpl-detailtx">

        </div>
        <div class="qbpl-detailnr">
             <div class="plnrwz">
                 <p>
                     <?php echo $_smarty_tpl->tpl_vars['pl']->value["plnr"];?>

                 </p>
             </div>
            <div class="plnrtp">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plimgarr']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                <div class="plnrtp1">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="">
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <!--<div class="plnrtp1">-->
                    <!--<img src="<?php echo IMG_PATH;?>
plimg01.png" alt="">-->
                <!--</div>-->
            </div>
        </div>
        <div class="qbpl-detailsjbox">
            <div class="qbpl-detailsj">

            </div>
            <span><?php echo $_smarty_tpl->tpl_vars['pl']->value["pltime"];?>
</span>
        </div>

        <div class="qbpl-detaildz">
            <span><?php echo $_smarty_tpl->tpl_vars['pl']->value["pldzcount"];?>
</span>
        </div>
        <div class="qbpl-detailpl">
            <span><?php echo $_smarty_tpl->tpl_vars['pl']->value["plhfcount"];?>
</span>
        </div>
        <div class="zxfb-dian">
            &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot;
            &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot;
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!--<div class="qbplhf-detail">-->
        <!--<div class="qbplhf-detailtx">-->

        <!--</div>-->
        <!--<div class="qbplhf-detailnr">-->
            <!--<div class="plhfnrwz">-->
                <!--<p>-->
                    <!--太好看了吧！！！这是谁家场地啊？我想要你的方案，楼主！-->
                <!--</p>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="qbplhf-detailsjbox">-->
            <!--<div class="qbplhf-detailsj">-->

            <!--</div>-->
            <!--<span>5小时前</span>-->
        <!--</div>-->

        <!--<div class="qbplhf-detaildz">-->
            <!--<span>520</span>-->
        <!--</div>-->
        <!--<div class="qbplhf-detailpl">-->
            <!--<span>520</span>-->
        <!--</div>-->
    <!--</div>-->
</div>
<footer>
   <div class="foot-bq">
       <img src="<?php echo IMG_PATH;?>
bq0.png" alt="">
   </div>
    <div class="foot-hf">
        <!--<input type="text">-->
        <a href="index.php?m=index&f=huati&a=addpinglun&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
"></a>
    </div>
    <div class="foot-dz">
        <a href=""><img src="<?php echo IMG_PATH;?>
zxfb-dz.png" alt=""></a>
        <span>852</span>
    </div>
    <div class="foot-sc">
        <a href=""><img src="<?php echo IMG_PATH;?>
zxfb-sc.png" alt=""></a>
        <span>852</span>
    </div>
    <div class="foot-fx">
        <a href=""><img src="<?php echo IMG_PATH;?>
zxfb-fx.png" alt=""></a>
        <span>852</span>
    </div>

</footer>
</body>
</html><?php }
}
