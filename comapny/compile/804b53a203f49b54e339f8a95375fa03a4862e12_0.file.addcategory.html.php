<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-18 02:27:44
  from 'D:\quanzhan\app\comapny\template\admin\addcategory.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a5ff810b63ad4_37892538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '804b53a203f49b54e339f8a95375fa03a4862e12' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\addcategory.html',
      1 => 1515057606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5ff810b63ad4_37892538 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
</head>
<style>
    body{
        background: #F5F5FA;
    }
</style>
<body>
<form id="box" class="col-md-4 col-lg-4 col-sm-4 col-xs-4" method="post" enctype="multipart/form-data" action="index.php?m=index&f=category&a=addlanmu">
    <div class="form-group">
        <select class="form-control" style="width: 120px" name="ids">
            <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="请输入栏目名称">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">图片</label>
        <input type="file" id="exampleInputFile" name="file[]" multiple>
        <!--        <p class="help-block">Example block-level help text here.</p>-->
    </div>

    <button type="submit" class="btn btn-default">提交</button>
    <!--    <input type="hidden" name="id" value="--><!--">-->
</form>
</body>
</html>
<?php }
}
