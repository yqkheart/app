<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 04:23:31
  from 'D:\quanzhan\app\comapny\template\admin\huatishow.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6164b3e5d258_84399637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b3630bbce92c39051be89f62e65efa06590a35' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\huatishow.html',
      1 => 1516331688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6164b3e5d258_84399637 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo IMG_PATH;?>
apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo IMG_PATH;?>
favicon.png">
    <title>修改类别</title>
    <style>
        td span{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="panel">
    <div class="panel-body">
        <table class="table">
            <thead>
            <tr>
                <th>序号</th>
                <th>主题名称</th>
                <th>缩略图</th>
                <th>点赞个数</th>
                <th>收藏个数</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <!--<tr>
                <td>1</td>
                <td>Steve</td>
                <td>
                    <a href=""><span class="text-danger">修改</span></a>
                    <a href="delcategory.php?"><span class="text-info">删除</span></a>
                </td>
            </tr>-->
            <!--<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
-->
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr>

                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['htname'];?>
</td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['htimgs'];?>

                    <!--{ $brr=explode('&#45;&#45;',$item['img']);}
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brr']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                       if($i){
                           echo "<img width='30' src='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' alt=''>";
                       }
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['htdzcounts'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['htsccounts'];?>
</td>
                <td>
                    <a href="index.php?m=admin&f=huati&a=changehuati&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><span class=\"text-danger\">修改</span></a>
                    <a href="index.php?m=admin&f=huati&a=delhuati&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><span class=\"text-info\">删除</span></a>
                </td>
            </tr>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html><?php }
}
