<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 04:24:01
  from 'D:\quanzhan\app\comapny\template\admin\pinglunshow.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6164d1b8b011_40522090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27b164acb93f26f85f05ffd267dd17ca5fe6d06f' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\pinglunshow.html',
      1 => 1516331688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6164d1b8b011_40522090 (Smarty_Internal_Template $_smarty_tpl) {
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
                <th>评论作者</th>
                <th>缩略图</th>
                <th>发布时间</th>
                <th>点赞个数</th>
                <th>回复个数</th>
                <th>上级ID</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['plname'];?>
</td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['plimg'];?>

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
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pltime'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pldzcount'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['plhfcount'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pid'];?>
</td>
                <td>
                    <a href="index.php?m=admin&f=pinglun&a=showpinglun&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><span class=\"text-danger\">查看</span></a>
                    <a href="index.php?m=admin&f=pinglun&a=delpinglun&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
