<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 10:24:22
  from 'G:\myobject\app\comapny\template\index\shanping.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a670d56d3ec70_00770451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ca3f5e809ee43854e4d58178178bed46d8e7af' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\shanping.html',
      1 => 1516703040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a670d56d3ec70_00770451 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH;?>
lzwimg/logo.png" media="screen" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
lzwcss/swiper.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
lzwcss/shanping.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lzwjs/shanping.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lzwjs/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lzwjs/swiper.min.js"><?php echo '</script'; ?>
>

</head>
<body>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
lzwimg/shan.png" alt="">
            <div class="zi-box">
                <div class="top-box">
                    婚约
                    <img src="<?php echo IMG_PATH;?>
lzwimg/shan3_03.png" alt="">
                </div>
                <div class="bottom-box">
                    全新上线 &nbsp; 惊喜不断
                </div>
            </div>
            <div class="tiyan-box">滑动到下一页</div>
        </div>

        <div class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
lzwimg/shan1.png" alt="">
            <div class="zi-box">
                <div class="top-box top-box1">
                    婚姻大事
                </div>
                <div class="bottom-box">
                    此生唯一 &nbsp; 不可将就
                </div>
            </div>
            <div class="tiyan-box">滑动到下一页</div>
        </div>

        <div class="swiper-slide">
            <img src="<?php echo IMG_PATH;?>
lzwimg/shan2.png" alt="">
            <div class="zi-box">
                <div class="top-box top-box1">
                    天作之合
                </div>
                <div class="bottom-box">
                    缘起相识 &nbsp; 缘定终生
                </div>
            </div>
            <a href="index.php?m=index&a=login">
                <div class="tiyan-box">立即体检</div>
            </a>
        </div>
    </div>
    <!-- Add Pagination -->
    <!--<div class="swiper-pagination dian"></div>-->
</div>

</body>
</html>
<?php }
}
