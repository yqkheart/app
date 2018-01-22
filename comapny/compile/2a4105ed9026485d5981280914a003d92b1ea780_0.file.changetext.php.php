<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-22 03:01:15
  from 'G:\myobject\app\comapny\template\admin\changetext.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6553fb4841f2_56651648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a4105ed9026485d5981280914a003d92b1ea780' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\admin\\changetext.php',
      1 => 1516353309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6553fb4841f2_56651648 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>$htmlData = '';
if (!empty($_POST['content1'])) {
    if (get_magic_quotes_gpc()) {
        $htmlData = stripslashes($_POST['content1']);
    } else {
        $htmlData = $_POST['content1'];
    }
}
<?php echo '?>';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo KIND_PATH;?>
themes/default/default.css" />
    <link rel="stylesheet" href="<?php echo KIND_PATH;?>
plugins/code/prettify.css" />
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
kindeditor-all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
lang/zh-CN.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
plugins/code/prettify.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="content1"]', {
                cssPath : '../plugins/code/prettify.css',
                uploadJson : '../php/upload_json.php',
                fileManagerJson : '../php/file_manager_json.php',
                allowFileManager : true,
                afterCreate : function() {
                    var self = this;
                    K.ctrl(document, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                    K.ctrl(self.edit.doc, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                }
            });
            prettyPrint();
        });
    <?php echo '</script'; ?>
>
</head>
<style>
    body{
        background: #F5F5FA;
    }
</style>
<body>
<form id="box" class="col-md-4 col-lg-4 col-sm-4 col-xs-4" method="post" enctype="multipart/form-data" action="index.php?m=admin&f=content&a=addtext">
    <div class="form-group">
        <label>名字</label>
        <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    </div>
    <div class="form-group">
        <label>价格</label>
        <input type="text" class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
    </div>
    <div class="form-group">
        <label>简介</label>
        <input type="text" class="form-control" name="intro" value="<?php echo $_smarty_tpl->tpl_vars['intro']->value;?>
">
    </div>
    <div class="form-group">
        <label>地址</label>
        <input type="text" class="form-control" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">图片</label>
        <input type="file" id="exampleInputFile" name="file[]" multiple>
        <!--        <p class="help-block">Example block-level help text here.</p>-->
    </div>
    <button type="submit" class="btn btn-default">提交</button>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
</form>
</body>
</html>
<?php }
}
