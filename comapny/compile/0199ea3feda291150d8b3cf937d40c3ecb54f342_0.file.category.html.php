<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-18 08:31:02
  from 'D:\quanzhan\app\comapny\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a604d36c6bae6_60154021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0199ea3feda291150d8b3cf937d40c3ecb54f342' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\admin\\category.html',
      1 => 1516260656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a604d36c6bae6_60154021 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
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
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <!-- TABLE STRIPED -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">栏目管理</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>adress</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php echo $_smarty_tpl->tpl_vars['btr']->value;?>

                        </tbody>
                    </table>
                    <!--                    <button type="button" id="add" class="btn btn-success">添加</button>-->
                </div>
            </div>
            <!-- END TABLE STRIPED -->
        </div>
    </div>
</div>
</body>
</html>


<?php }
}
