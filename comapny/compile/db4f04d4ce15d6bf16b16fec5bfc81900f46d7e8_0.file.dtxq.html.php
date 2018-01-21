<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 07:31:03
  from 'D:\quanzhan\app\comapny\template\admin\dtxq.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a6190a77be616_05652362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db4f04d4ce15d6bf16b16fec5bfc81900f46d7e8' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\dtxq.html',
      1 => 1516331688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6190a77be616_05652362 (Smarty_Internal_Template $_smarty_tpl) {
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
<form class="form-horizontal">
    <div class="form-group ">
        <label class="col-sm-3 control-label">序号</label>
    </div>
    <div class="form-group">
       <div class="col-sm-5 col-sm-offset-1">
            <input type="text" readonly class="form-control" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
       </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">发布作者</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text" readonly class="form-control" name="htname" id="" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['dtname'];?>
">
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">详细内容</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <textarea class="form-control" name="" readonly id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['arr']->value['dtnr'];?>
</textarea>
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">发布时间</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text" readonly class="form-control" name="htname" id="" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['dttime'];?>
">
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">发布地点</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text" readonly class="form-control" name="htname" id="" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['dtdd'];?>
">
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">点赞个数</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text" readonly  readonly class="form-control" name="htdzcounts" id="" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['dtdzcount'];?>
" placeholder="栏目">
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">评论个数</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text" readonly  readonly class="form-control" name="htsccounts" id="" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['dtplcount'];?>
" placeholder="栏目">
        </div>
    </div>
    <div class="form-group ">
        <label   class="col-sm-3 control-label">收藏个数</label>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <input type="text" readonly  readonly class="form-control" name="htsccounts" id="" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['dtsccount'];?>
" placeholder="栏目">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10">
            <a href="index.php?m=admin&f=dongtai">返回</a>
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
