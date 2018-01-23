<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 00:57:28
  from 'G:\myobject\app\comapny\template\index\sheying.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a66887831b303_65650820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3de675b0be90b8e18eefcdbe7569b88090ad09ee' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\sheying.html',
      1 => 1516608158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66887831b303_65650820 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem-half.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
sheying.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <div class="topBox">
            <a href="index.php?m=index&f=custom&a=shouye"><div class="backBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/back.png" alt=""></div></a>
            <div class="hunlifangan">摄影</div>   
        </div>
        <div class="option">
            <div class="hunsha" id="box">精选商家</div>
            <div class="hunsha active" id="boxs">婚纱旅拍</div>
        </div>
    </header>
    <div class="textBox">

    </div>
</body>
</html>
<?php echo '<script'; ?>
>
    var lis=document.querySelectorAll('.hunsha');
        function ajax(pid=0) {
            $.ajax({
                url:"index.php?m=index&f=photography&a=send",
                type:"post",
                data:{ pid:pid },
                dataType:"json",
                success:function (res) {
//                    console.log(1)
                    let arr="";
                    res.forEach(function (val) {
                        arr+=`
        <div class="shangjiaBoxs">
            <div class="imgs"><img src="${ val.img }" alt=""></div>
            <div class="huatu">${ val.name }</div>
            <div class="huatus">${ val.intro }</div>
            <div class="heng"></div>
            <div class="zan">
                <div class="xing"><img src="<?php echo IMG_PATH;?>
摄影/xing.png" alt=""></div>
                <div class="wenzi">${ val.zan }</div>
                <div class="xing" style="margin-left:0.2rem;"><img src="<?php echo IMG_PATH;?>
摄影/dingwei.png" alt=""></div>
                <div class="wenzi">${ val.place }</div>
            </div>
        </div>
                        `
                        $('.textBox').html(arr);
                    })
                }
            })
        }
        ajax();
        lis.forEach(function (value, index) {
            value.onclick=function () {
                for (i = 0; i < lis.length; i++) {
                    lis[i].classList.remove('active');
                }
                value.classList.add('active');
            }
        });
        $('#box').click(function (value) {
            ajax(pid=1)
        })
        $('#boxs').click(function (value) {
            ajax(pid=0)
        })

<?php echo '</script'; ?>
><?php }
}
