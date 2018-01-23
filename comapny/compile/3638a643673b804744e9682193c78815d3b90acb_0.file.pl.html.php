<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 09:52:39
  from 'G:\myobject\app\comapny\template\index\pl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6705e73a0fa2_36134574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3638a643673b804744e9682193c78815d3b90acb' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\pl.html',
      1 => 1516700824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6705e73a0fa2_36134574 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>评论</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH;?>
logo.png" media="screen" />
</head>
<body>

<div class="bac">

</div>
<form method="post" action="index.php?m=index&f=huati&a=insertpl&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" enctype="multipart/form-data">

    <main>
        <header>
            <div class="headfh">
                <a href="index.php?m=index&f=huati&a=pinglun&id=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
">&lt;</a>
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
        <textarea name="plnr" id="" cols="30" rows="10" placeholder="输入您想回复的内容">

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
