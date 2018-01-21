<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 04:15:20
  from 'D:\quanzhan\app\comapny\template\admin\addhuati.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6162c85fce36_72455972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b5d4d14544dcdac3c9fe672a507f209c298a1cb' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\addhuati.html',
      1 => 1516331688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6162c85fce36_72455972 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
style.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <title>增加类别</title>
    <style>
        form{
            margin-top: 20px;
            overflow: hidden;
        }
        .form-group{
            width: 100%;
        }
        label.error{
            color:red;
        }
        .xghidden{
            width: 100px;
            height: 50px;
            border-radius: 10px;
            position: fixed;
            left:50%;
            right: -100px;
            margin-top: 100px;
            z-index: 1000;
            background-color: rgba(0,0,0,0.3);
            color:#fff;
            line-height: 50px;
            text-align: center;
            display: none;
        }
    </style>
</head>
<body>
<div class="xghidden">
    修改成功
</div>
<form class="form-horizontal" action="index.php?m=admin&f=huati&a=inserthuati" method="post" enctype="multipart/form-data">
    <div class="form-group ">
        <label   class="col-sm-3 control-label">话题名称</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text" class="form-control" name="htname" id="" value="" placeholder="话题名称">
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">点赞个数</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text" readonly class="form-control" name="htdzcounts" id="" value="0" placeholder="点赞个数">
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">收藏个数</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text"  readonly class="form-control" name="htsccounts" id="" value="0" placeholder="收藏个数">
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">选择缩略图</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="file"  name="file[]" multiple>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10">
            <button type="submit" class="btn btn-default">提交</button>
        </div>
    </div>
</form>
</body>
<?php echo '<script'; ?>
>
    $("form").validate({
        rules:{
            category:{
                required:true
            }
        },
        messages:{
            category:{
                required:"必填项不可为空！"
            }
        }

    })
<?php echo '</script'; ?>
>
</html>
<?php }
}
