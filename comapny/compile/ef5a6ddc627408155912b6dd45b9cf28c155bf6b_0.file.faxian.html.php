<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 09:47:14
  from 'G:\myobject\app\comapny\template\index\faxian.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6704a28ce9f8_44029930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef5a6ddc627408155912b6dd45b9cf28c155bf6b' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\faxian.html',
      1 => 1516700824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6704a28ce9f8_44029930 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>发现</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wkfaxian.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wkidangerous.swiper.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkjquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkrem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkfaxian.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkjquery-1.10.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkidangerous.swiper.min.js"><?php echo '</script'; ?>
>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH;?>
logo.png" media="screen" />
</head>
<body>
    <header>
        <div class="headbox">
            <div class="xiaodian">•</div>
            <div class="dadian">•</div>
            <div>发现</div>
            <div class="dadian">•</div>
            <div class="xiaodian">•</div>
        </div>
    </header>
    <!--热门话题开始-->
    <section class="rmht">
        <div class="rmtitle-wz">
            <div class="rmwz">热门话题</div>
            <div class="rmxx">
                /
            </div>
        </div>
        <div class="rmtitle-yy">
              <div class="rmqs">♦</div>
              <div class="rmss">♦</div>
              <div class="rmyy">HOT WEDDING TOPIC</div>
              <div class="rmss">♦</div>
              <div class="rmqs">♦</div>
              <div class="rmgd">
                  <a href="index.php?m=index&f=huati&a=htgd">更多 &gt;</a>
              </div>
        </div>
        <div class="rmxx">
            /
        </div>
        <div class="rmlbt">

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'iteam', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['iteam']->value) {
?>
                    <div class="swiper-slide red-slide">
                        <div class="title">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['imgarr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" alt="">
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!--<div class="swiper-slide blue-slide">-->
                        <!--<div class="title">-->

                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="swiper-slide orange-slide">-->
                        <!--<div class="title">-->

                        <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="pagination"></div>
        </div>
    </section>
<!--//最新发布开始-->
<section class="zxfb">
    <div class="zxfb-title">
        <div class="zxfb-titlelet">
            <img src="<?php echo IMG_PATH;?>
faxian0.png" alt="">
        </div>
        <div class="zxfb-titlerit">
            <div class="zxfb-titlerittop fontorg">LATEST</div>
            <div class="zxfb-titlerittop">RELEASE</div>
            <div class="zxfb-titleritbot">最新发布</div>
        </div>
    </div>
    <div class="zxfb-detailbox">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brr']->value, 'iteam', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['iteam']->value) {
?>
        <div class="zxfb-detail">
                <div class="zxfb-top">
                    <div class="zxfbtx">
                        <div class="zxfbtximg">

                        </div>
                    </div>
                    <div class="zxfbnc">
                        <div class="zxfbnc-nc"><?php echo $_smarty_tpl->tpl_vars['iteam']->value["dtname"];?>
</div>
                        <div class="zxfbnc-sj"><?php echo $_smarty_tpl->tpl_vars['iteam']->value["dttime"];?>
</div>
                    </div>
                    <div class="zxfbdd">
                        <div class="zxfbdd-img">
                            <img src="<?php echo IMG_PATH;?>
zxfbhg.png" alt="">
                        </div>
                        <div class="zxfbdd-wz"><?php echo $_smarty_tpl->tpl_vars['iteam']->value["dtdd"];?>
</div>
                    </div>
                </div>
                <div class="zxfb-main">
                    <div class="zxfb-mainwz">
                       <a href="index.php?m=index&f=huati&a=pinglun&id=<?php echo $_smarty_tpl->tpl_vars['iteam']->value['id'];?>
">
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['iteam']->value["dtnr"];?>

                        </p>
                       </a>
                    </div>
                    <div class="zxfb-maintp">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dtimgarr']->value, 'img');
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
                        <!--<div class="zxfb-mainimg">-->
                            <!--<img src="<?php echo IMG_PATH;?>
zxfbtp01.png" alt="">-->
                        <!--</div>-->
                    </div>
                    <div class="zxfb-dian">
                        &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot;
                        &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot;

                    </div>
                    <div class="zxfb-bot">
                        <ul>
                            <li><a href="">
                                <div class="zxfb-botimg">
                                    <img src="<?php echo IMG_PATH;?>
zxfb-dz.png" alt="">
                                </div>
                                <div class="zxfb-botwz"><?php echo $_smarty_tpl->tpl_vars['iteam']->value["dtdzcount"];?>
</div>
                            </a></li>
                            <li><a href="index.php?m=index&f=huati&a=pinglun&id=<?php echo $_smarty_tpl->tpl_vars['iteam']->value['id'];?>
">
                                <div class="zxfb-botimg">
                                    <img src="<?php echo IMG_PATH;?>
zxfb-pl.png" alt="">
                                </div>
                                <div class="zxfb-botwz"><?php echo $_smarty_tpl->tpl_vars['iteam']->value["dtplcount"];?>
</div>

                            </a></li>
                            <li><a href="">
                                <div class="zxfb-botimg">
                                    <img src="<?php echo IMG_PATH;?>
zxfb-sc.png" alt="">
                                </div>
                                <div class="zxfb-botwz"><?php echo $_smarty_tpl->tpl_vars['iteam']->value["dtsccount"];?>
</div>

                            </a></li>
                            <li>
                                <div class="zxfb-botimg">
                                    <img src="<?php echo IMG_PATH;?>
zxfb-fx.png" alt="">
                                </div>
                                <div class="zxfb-botwz">分享至</div>

                            </li>
                        </ul>
  
                    </div>

                </div>


        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <!--<div class="zxfb-detail">-->
            <!--<div class="zxfb-top">-->
                <!--<div class="zxfbtx">-->
                    <!--<div class="zxfbtximg">-->

                    <!--</div>-->
                <!--</div>-->
                <!--<div class="zxfbnc">-->
                    <!--<div class="zxfbnc-nc">维多利亚</div>-->
                    <!--<div class="zxfbnc-sj">2017012.26 8:00</div>-->
                <!--</div>-->
                <!--<div class="zxfbdd">-->
                    <!--<div class="zxfbdd-img">-->
                        <!--<img src="<?php echo IMG_PATH;?>
zxfbhg.png" alt="">-->
                    <!--</div>-->
                    <!--<div class="zxfbdd-wz">南京市</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="zxfb-main">-->
                <!--<div class="zxfb-mainwz">-->
                    <!--<a href="dtxq.html">-->
                    <!--<p>-->
                        <!--婚礼已过，2017缘定今生，图中主持人表情亮了，哈哈，感谢婚约的特别定制！-->
                    <!--</p>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="zxfb-maintp">-->
                    <!--<div class="zxfb-mainimg">-->
                        <!--<img src="<?php echo IMG_PATH;?>
zxfbtp01.png" alt="">-->
                    <!--</div>-->
                    <!--<div class="zxfb-mainimg">-->
                        <!--<img src="<?php echo IMG_PATH;?>
zxfbtp01.png" alt="">-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="zxfb-dian">-->
                    <!--&middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot;-->
                    <!--&middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot; &middot;-->
                <!--</div>-->
                <!--<div class="zxfb-bot">-->
                    <!--<ul>-->
                        <!--<li>-->
                            <!--<div class="zxfb-botimg">-->
                                <!--<img src="<?php echo IMG_PATH;?>
zxfb-dz.png" alt="">-->
                            <!--</div>-->
                            <!--<div class="zxfb-botwz">520</div>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="zxfb-botimg">-->
                                <!--<img src="<?php echo IMG_PATH;?>
zxfb-pl.png" alt="">-->
                            <!--</div>-->
                            <!--<div class="zxfb-botwz">520</div>-->

                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="zxfb-botimg">-->
                                <!--<img src="<?php echo IMG_PATH;?>
zxfb-sc.png" alt="">-->
                            <!--</div>-->
                            <!--<div class="zxfb-botwz">520</div>-->

                        <!--</li>-->
                        <!--<li>-->
                            <!--<div class="zxfb-botimg">-->
                                <!--<img src="<?php echo IMG_PATH;?>
zxfb-fx.png" alt="">-->
                            <!--</div>-->
                            <!--<div class="zxfb-botwz">分享至</div>-->

                        <!--</li>-->
                    <!--</ul>-->

                <!--</div>-->

            <!--</div>-->


        <!--</div>-->
    </div>
</section>


    <!--<footer>-->
        <!--<ul>-->
            <!--<li><img src="../../src/img/foot_dzw.png" alt=""></li>-->
            <!--<li><img src="../../src/img/foot_hdw.png" alt=""></li>-->
            <!--<li><img src="../../src/img/foot_fxw.png" alt=""></li>-->
            <!--<li><img src="../../src/img/foot_zsx.png" alt=""></li>-->
            <!--<li><img src="../../src/img/foot_wmw.png" alt=""></li>-->
            <!--<div class="shuxian1 shuxian"></div>-->
            <!--<div class="shuxian2 shuxian"></div>-->
        <!--</ul>-->
    <!--</footer>-->
    <!-- 底部table栏 -->
    <div class="tableBox">

        <div class="option">
            <a href="index.php?m=index&f=custom&a=shouye">
                <div class="opp">
                    <img src="<?php echo IMG_PATH;?>
wkdingzhi.png" alt="">
                </div>
                <div class="shu"></div>

                <div class="character">定制</div>
            </a>

        </div>

        <div class="option">
            <a href="index.php?m=index&f=active">
                <div class="opp">
                    <img src="<?php echo IMG_PATH;?>
wkhuodong.png" alt="">
                </div>
                <div class="shu"></div>
                <div class="character">活动</div>
            </a>

        </div>
        <div class="option">
            <a href="index.php?m=index&f=huati&a=adddongtai">
                <div class="opp0">
                    <img src="<?php echo IMG_PATH;?>
wkfaxian0.png" alt="">
                </div>
                <div class="shu"></div>
                <!--<div class="character">发现</div>-->
            </a>

        </div>
        <div class="option">
            <a href="index.php?m=index&f=assistant">
                <div class="opp">
                    <img src="<?php echo IMG_PATH;?>
wkzhushou.png" alt="">
                </div>
                <div class="shu"></div>
                <div class="character">助手</div>
            </a>

        </div>
        <div class="option">
            <a href="index.php?m=index&f=women">
                <div class="opp">
                    <img src="<?php echo IMG_PATH;?>
wkwomen.png" alt="">
                </div>
                <div class="character">我们</div>
            </a>

        </div>
    </div>
</body>
</html><?php }
}
