<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-21 07:33:52
  from 'D:\quanzhan\app\comapny\template\index\sheying.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a643450168004_45114151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '355a65c57a641b7547459866096d630e68fee820' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\index\\sheying.html',
      1 => 1516516431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a643450168004_45114151 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem-half.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
sheying.css">
</head>
<body>
    <header>
        <div class="topBox">
            <div class="backBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/back.png" alt=""></div>
            <div class="hunlifangan">摄影</div>   
        </div>
        <div class="option">
            <div class="shangjia">精选商家</div>
            <div class="hunsha">婚纱旅拍</div>
        </div>
    </header>
    <div class="textBox">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
        <div class="shangjiaBoxs" style="margin-left:0.07rem;">
            <div class="imgs"><img src="<?php echo $_smarty_tpl->tpl_vars['s']->value['photo'];?>
" alt=""></div>
            <div class="huatu"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</div>
            <div class="huatus"><?php echo $_smarty_tpl->tpl_vars['s']->value['intro'];?>
</div>
            <div class="heng"></div>
            <div class="zan">
                <div class="xing"><img src="<?php echo IMG_PATH;?>
摄影/xing.png" alt=""></div>
                <div class="wenzi"><?php echo $_smarty_tpl->tpl_vars['s']->value['zan'];?>
</div>
                <div class="xing" style="margin-left:0.2rem;"><img src="<?php echo IMG_PATH;?>
摄影/dingwei.png" alt=""></div>
                <div class="wenzi"><?php echo $_smarty_tpl->tpl_vars['s']->value['adress'];?>
</div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</body>
</html><?php }
}
