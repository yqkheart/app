<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 09:22:32
  from 'G:\myobject\app\comapny\template\admin\cehua.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a61b8d85aff32_09516164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85367a233a534cac4bff31d445f856ba88f57e69' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\admin\\cehua.html',
      1 => 1516353309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a61b8d85aff32_09516164 (Smarty_Internal_Template $_smarty_tpl) {
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
    body,html{
        background: #F5F5FA;
    }
    .panel{
        background: #F5F5FA;
    }
    .btn-success{
        width: 100px;
        margin-left: 37%;
    }

    input{
        width: 30%;
        margin-top: 2px;
        outline: none;
        border: none;
        height: 100%;
    }
    button.btn{
        padding: 3px 5px;

    }
    th,td{
        width: 10%;
        text-align: center;
    }
    .btn-primary a{
        color: #ffffff;
        text-decoration: none;
    }
    #add{

    }
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- TABLE STRIPED -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">内容展示</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>img</th>
                            <th>price</th>
                            <th>sell</th>
                            <th>style</th>
                            <th>place</th>
                            <th>tel</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php echo $_smarty_tpl->tpl_vars['arr']->value;?>

                        </tbody>
                    </table>
                    <!--                    <button type="button" id="add" class="btn btn-success"style="margin-left: 45%">添加</button>-->
                </div>
            </div>
            <!-- END TABLE STRIPED -->
        </div>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $('tbody').on('click','.btn-danger',function () {
        let id=$(this).attr('id');
        let par=$(this).closest('tr')
        console.log(this)
        $.ajax({
            url:"index.php?m=admin&f=cehua&a=del",
            data:{ id },
            type:"post",
            success:function (res) {
                console.log(res)
                if (res==1){
                    par.html(" ");
                }else {
                    alert("删除失败")
                }
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
