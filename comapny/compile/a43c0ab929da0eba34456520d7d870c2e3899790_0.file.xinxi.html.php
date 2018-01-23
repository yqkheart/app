<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-19 09:57:10
  from 'C:\wamp64\www\php\app\comapny\template\index\xinxi.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a61c0f6861ed0_33669562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a43c0ab929da0eba34456520d7d870c2e3899790' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\app\\comapny\\template\\index\\xinxi.html',
      1 => 1516287188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a61c0f6861ed0_33669562 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>完善资料</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../src/img/lzwimg/logo.png" media="screen" />
    <link rel="stylesheet" href="../../src/css/lzwcss/xinxi.css">
    <?php echo '<script'; ?>
 src="../../src/js/lzwjs/rem.js"><?php echo '</script'; ?>
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
                <img src="../../src/img/lzwimg/yonghu_03.png" alt="">
            </div>

            <form>
                <ul>
                    <li class="content">
                        <div class="con-left">
                            <div class="con-left1">
                                <img src="../../src/img/lzwimg/tubiao_03.png" alt="">
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
                                <img src="../../src/img/lzwimg/tubiao_06.png" alt="">
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
                                <img src="../../src/img/lzwimg/tubiao_08.png" alt="">
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
                                <img src="../../src/img/lzwimg/tubiao_10.png" alt="">
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
                                <img src="../../src/img/lzwimg/tubiao_12.png" alt="">
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

                <a href="place.html">
                    <button type="button" class="btn">点击提交</button>
                </a>
            </form>
        </main>
    </section>
</body>
</html><?php }
}
