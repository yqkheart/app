<?php
$htmlData = '';
if (!empty($_POST['content1'])) {
    if (get_magic_quotes_gpc()) {
        $htmlData = stripslashes($_POST['content1']);
    } else {
        $htmlData = $_POST['content1'];
    }
}
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
    <link rel="stylesheet" href="{KIND_PATH}themes/default/default.css" />
    <link rel="stylesheet" href="{KIND_PATH}plugins/code/prettify.css" />
    <script charset="utf-8" src="{KIND_PATH}kindeditor-all.js"></script>
    <script charset="utf-8" src="{KIND_PATH}lang/zh-CN.js"></script>
    <script charset="utf-8" src="{KIND_PATH}plugins/code/prettify.js"></script>
    <script>
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
    </script>
</head>
<style>
    body{
        background: #F5F5FA;
    }
</style>
<body>
<form id="box" class="col-md-4 col-lg-4 col-sm-4 col-xs-4" method="post" enctype="multipart/form-data" action="index.php?m=admin&f=jewelry&a=addtext">
    <div class="form-group">
        <label>名字</label>
        <input type="text" class="form-control" name="name" value="{$name}">
    </div>
    <div class="form-group">
        <label>价格</label>
        <input type="text" class="form-control" name="price" value="{$price}">
    </div>
    <div class="form-group">
        <label>风格</label>
        <input type="text" class="form-control" name="style" value="{$style}">
    </div>
    <div class="form-group">
        <label>地址</label>
        <input type="text" class="form-control" name="place" value="{$place}">
    </div>
    <div class="form-group">
        <label>电话</label>
        <input type="text" class="form-control" name="tel" value="{$tel}">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">图片</label>
        <input type="file" id="exampleInputFile" name="file[]" multiple>
        <!--        <p class="help-block">Example block-level help text here.</p>-->
    </div>
    <button type="submit" class="btn btn-default">提交</button>
    <input type="hidden" name="id" value="{$id}">
</form>
</body>
</html>
