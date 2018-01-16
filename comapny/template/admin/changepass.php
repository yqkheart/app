<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19
 * Time: 14:31
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{CSS_PATH}bootstrap.css">
    <script src="{JS_PATH}jquery.min.js"></script>
    <script src="{JS_PATH}jquery.validate.min.js"></script>

</head>
<style>
    .form-horizontal .form-group{
        margin-left: 0px;
        margin-right: 0;
    }
    html{
        background: #F5F5FA;
    }
    .form-horizontal{
        background: #F5F5FA;
        margin-left: -100px;
        margin-top: 50px;
    }
    .form-control{
        width: 40%;
    }
    .messBox{
        width: 200px;
        height: 100px;
        background: rgba(0,0,0,0.5);
        position: absolute;
        left: 0;
        right: 0;
        margin:  -20px auto;
        z-index: 1000;
        font-size: 25px;
        font-weight: 500;
        text-align: center;
        line-height: 100px;
        color: #ffffff;
        display: none;
    }
</style>
<body>
<div class="messBox">修改成功</div>
<form class="form-horizontal" id="boxs">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3"  readonly value="{$user}" name="user">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">新密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">确认新密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3s" placeholder="Password" name="newpass">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">提交</button>
        </div>
    </div>
</form>
</body>
</html>
<script>
    $( "#boxs" ).validate({
        rules: {
            pass: {
                required: true,
                maxlength: 6,
                minlength: 3
            },
            newpass: {
                required: true,
                equalTo: "#inputPassword3",
            }
        },
        messages: {
            pass: {
                required: "请输入密码",
                maxlength: "不能大于6位数",
                minlength: "不能小于3位数"
            },
            newpass: {
                required: "请输入密码",
                equalTo: "两次输入密码不一致",
            }
        },
        submitHandler:function () {
            $.ajax({
                url:"index.php?m=index&a=updatepass",
                type:"post",
                data:$("#boxs").serialize(),
                success:function (res) {
//                    console.log(res)
                    $('.messBox').html(res).slideDown().delay(1000).slideUp()
                    $('input[type=password]').val("")
                }
            })
        }
    })

</script>
