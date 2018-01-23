<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 10:28:14
  from 'G:\myobject\app\comapny\template\index\xinxi.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a670e3ed6f127_33055822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40eafbc7c3d601ec1d229ddbe9b968482d0b23c3' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\xinxi.html',
      1 => 1516703292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a670e3ed6f127_33055822 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>完善资料</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG_PATH;?>
lzwimg/logo.png" media="screen" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
lzwcss/xinxi.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lzwjs/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
    <section>
        <header>
            <div class="zi-left-box">
                <div class="zi-top">完善资料</div>
                <div class="zi-bottom">完善您的资料，开启你的备婚之礼</div>
            </div>
            <div class="zi-right-box">跳过 &gt;</div>
        </header>

        <main>
            <div class="img-box">
                <div class="dianji">+</div>
                <img src="<?php echo IMG_PATH;?>
lzwimg/yonghu_03.png" alt="">
            </div>

            <form>
                <ul>
                    <li class="content">
                        <div class="con-left">
                            <div class="con-left1">
                                <img src="<?php echo IMG_PATH;?>
lzwimg/tubiao_03.png" alt="">
                            </div>

                            <div class="con-left2">
                                <div class="zi-box1">
                                    <div class="nicheng">昵称</div>
                                    <div class="yuandian">
                                        <div class="dian"></div>
                                        <div class="dian dian2"></div>
                                    </div>
                                </div>
                                <div class="zi-box2">YOUR NAME</div>
                            </div>
                        </div>
                        <div class="con-right">
                            <input type="text" placeholder="请设置您的昵称" maxlength="10" autofocus>
                        </div>
                    </li>

                    <li class="content">
                        <div class="con-left">
                            <div class="con-left1">
                                <img src="<?php echo IMG_PATH;?>
lzwimg/tubiao_06.png" alt="">
                            </div>

                            <div class="con-left2">
                                <div class="zi-box1">
                                    <div class="nicheng">性别</div>
                                    <div class="yuandian">
                                        <div class="dian"></div>
                                        <div class="dian dian2"></div>
                                    </div>
                                </div>
                                <div class="zi-box2">YOUR SEX</div>
                            </div>
                        </div>
                        <div class="con-right">
                            <select name="" id="">
                                <option value="">男</option>
                                <option value="">女</option>
                            </select>
                        </div>
                    </li>

                    <li class="content">
                        <div class="con-left">
                            <div class="con-left1">
                                <img src="<?php echo IMG_PATH;?>
lzwimg/tubiao_08.png" alt="">
                            </div>

                            <div class="con-left2">
                                <div class="zi-box1">
                                    <div class="nicheng">电话</div>
                                    <div class="yuandian">
                                        <div class="dian"></div>
                                        <div class="dian dian2"></div>
                                    </div>
                                </div>
                                <div class="zi-box2">TELEPHONE NUMBER</div>
                            </div>
                        </div>
                        <div class="con-right">
                            <input type="text" placeholder="请输入你的电话" required maxlength="11">
                        </div>
                    </li>

                    <li class="content">
                        <div class="con-left">
                            <div class="con-left1">
                                <img src="<?php echo IMG_PATH;?>
lzwimg/tubiao_10.png" alt="">
                            </div>

                            <div class="con-left2">
                                <div class="zi-box1">
                                    <div class="nicheng">生日</div>
                                    <div class="yuandian">
                                        <div class="dian"></div>
                                        <div class="dian dian2"></div>
                                    </div>
                                </div>
                                <div class="zi-box2">YOUR BIRTHDAY</div>
                            </div>
                        </div>
                        <div class="con-right">
                            <input type="date" placeholder="">
                        </div>
                    </li>

                    <li class="content">
                        <div class="con-left">
                            <div class="con-left1">
                                <img src="<?php echo IMG_PATH;?>
lzwimg/tubiao_12.png" alt="">
                            </div>

                            <div class="con-left2">
                                <div class="zi-box1">
                                    <div class="nicheng">所在地</div>
                                    <div class="yuandian">
                                        <div class="dian"></div>
                                        <div class="dian dian2"></div>
                                    </div>
                                </div>
                                <div class="zi-box2">YOUR LOCATION</div>
                            </div>
                        </div>
                        <div class="con-right">
                            <input type="text" placeholder="请输入您的所在地">
                        </div>
                    </li>
                </ul>

                <a href="index.php?m=index&f=custom">
                    <button type="button" class="btn">点击提交</button>
                </a>
            </form>
        </main>
    </section>
</body>
</html><?php }
}
