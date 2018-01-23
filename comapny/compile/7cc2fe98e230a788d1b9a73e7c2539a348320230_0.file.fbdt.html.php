<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 09:48:28
  from 'G:\myobject\app\comapny\template\index\fbdt.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6704eca328b6_50588752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cc2fe98e230a788d1b9a73e7c2539a348320230' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\fbdt.html',
      1 => 1516700824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6704eca328b6_50588752 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wkpl.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkjquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wkrem.js"><?php echo '</script'; ?>
>
    <title>发布动态</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH;?>
logo.png" media="screen" />
</head>
<body>

<div class="bac">

</div>
<form method="post" action="index.php?m=index&f=huati&a=insertdt" enctype="multipart/form-data">

<main>
    <header>
        <div class="headfh">
            <a href="index.php?m=index&f=huati">&lt;</a>
        </div>
        <div class="headbox">
            <div class="xiaodian">•</div>
            <div class="dadian">•</div>
            <div>动态</div>
            <div class="dadian">•</div>
            <div class="xiaodian">•</div>
        </div>
        <!--<div class="headtj">-->
        <!--<a href="">发布</a>-->

        <!--</div>-->
    </header>
    <div class="huifnr">
        <textarea name="dtnr" id="" cols="30" rows="10" placeholder="输入您想回复的内容">

        </textarea>
        <div class="huifbot">
           <div class="bq">
               <a href="">
                   <img src="<?php echo IMG_PATH;?>
bq.png" alt="">
               </a>
           </div>
            <div class="gx">
                <a href="">
                    <img src="<?php echo IMG_PATH;?>
gx.png" alt="">
                </a>
            </div>
            <div class="sc">
                <a href="">
                    <img src="<?php echo IMG_PATH;?>
sc.png" alt="">
                </a>
            </div>
        </div>
        <div class="huiftpsc">
            <div class="huiftpscbc">+
                <input type="file" class="file" name="file[]" multiple>
            </div>
            <div class="huiftpscwz">
                <p>UPLOAD</p>
                <p>PICTURE</p>
            </div>
        </div>
        <input type="submit">
    </form>

</main>
</form>
</body>
</html><?php }
}
