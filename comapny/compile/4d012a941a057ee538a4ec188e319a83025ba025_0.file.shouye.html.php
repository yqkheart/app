<?php
<<<<<<< HEAD
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 06:10:03
=======
/* Smarty version 3.1.32-dev-38, created on 2018-01-21 03:38:24
>>>>>>> cb53805f1d0164caf4be67b83373df71b8d99f0b
  from 'G:\myobject\app\comapny\template\index\shouye.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
<<<<<<< HEAD
  'unifunc' => 'content_5a66d1bb5e1495_66048062',
=======
  'unifunc' => 'content_5a640b30aeb105_17202957',
>>>>>>> cb53805f1d0164caf4be67b83373df71b8d99f0b
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d012a941a057ee538a4ec188e319a83025ba025' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\shouye.html',
<<<<<<< HEAD
      1 => 1516687772,
=======
      1 => 1516505903,
>>>>>>> cb53805f1d0164caf4be67b83373df71b8d99f0b
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5a66d1bb5e1495_66048062 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5a640b30aeb105_17202957 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> cb53805f1d0164caf4be67b83373df71b8d99f0b
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
shouye.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
</head>
<body>
    <!-- 头部 -->
    <header>
        <div class="topBox">
            <div class="oneBox" style="display: flex;
            justify-content: space-between;">
                <div class="zuanshi"><img src="<?php echo IMG_PATH;?>
/首页/zuanshi.png" alt=""></div>
                <div class="cityBox">北京</div>
            </div>
            <div class="oneBox" style="padding-top:0.07rem;width:0.8rem;text-align: center;font-size: 0.14rem;
            color: #fff;
            font-weight: 500;">
                <p style="font-size:0.18rem">定制</p> 
                <p>Customized</p>   
            </div>
            <div class="oneBox" style="width:0.44rem;height:100%">
                <img src="<?php echo IMG_PATH;?>
/首页/beibao.png" alt="">
            </div>
        </div>
        <div class="bottomBox">
            <a href="search.html">
                 <div class="inputBox">
                <input type="text" class="puts">
                <div class="sousuo"><img src="<?php echo IMG_PATH;?>
/首页/search_搜索@2x.png" alt=""></div>
            </div>
            </a>
           
        </div>
    </header>
    <!-- banner -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/首页/banner2.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/首页/banner3.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/首页/banner4.png" alt=""></div>
          <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/首页/banner5.png" alt=""></div>
        </div>
        <!-- Add Pagination -->
    </div>
    <!-- 方案 -->
    <div class="fangan">
            <div class="titleBox"><img src="<?php echo IMG_PATH;?>
/首页/biaoti.png" alt=""></div>
            <input class="mypid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="photoBox">
                <img src="<?php echo IMG_PATH;?>
/首页/<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" alt="">
                <div class="textBox">
                    <div class="firstBox">
                        <div class="leftBox">
                            <img src="<?php echo IMG_PATH;?>
/首页/矢量智能对象@2x的副本 6.png" alt="">
                        </div>
                        <div class="rightBox">
                            <div class="topTitle" style=" margin-left: 0.04rem;"><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</div>
                            <div class="bottomEng">
                                <span style="color:rgba(255,255,255,0.7); margin-left: 0.04rem;">priceBox</span> BANQUET</div>
                        </div>
                    </div>
                    <div class="dian">...........................................</div>
                    <div class="zhu">注：该价格为每桌单价</div>
                    <div class="priceBox">￥<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="bottomBox">
                <div class="xiugai" style="margin-left:14%">修改项目</div>
                <a href=""></a><div class="xiugai guanli" style="margin-right:14%;background:#FF8C2A; "> 
                    <a href="index.php?m=index&f=custom&a=guanli&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" style="color: #fff;">方案管理</a> 
                </div>
            </div>
    </div>
    <div class="tableBox1"></div>
    <!-- 底部table栏 -->
    <div class="tableBox">
        
        <div class="option" style="background:#FF8C2A">
            <a href="index.php?m=index&f=custom&a=shouye">
                <div class="opp">
                    <img src="<?php echo IMG_PATH;?>
/首页/矢量智能对象@2x.png" alt="">
                </div>
                <div class="shu"></div>
            
                <div class="character" style="color:#fff">定制</div>
            </a>
            
        </div>
        
        <div class="option">
            <a href="index.php?m=index&f=active">
                <div class="opp">
                <img src="<?php echo IMG_PATH;?>
/首页/活动@2x.png" alt="">
                </div>
                <div class="shu"></div>
                <div class="character">活动</div>
            </a>
            
        </div>
        <div class="option">
            <a href="index.php?m=index&f=huati">
                <div class="opp">
                <img src="<?php echo IMG_PATH;?>
/首页/发现@2x.png" alt="">
            </div>
            <div class="shu"></div>
            <div class="character">发现</div>
            </a>
            
        </div>
        <div class="option">
            <a href="index.php?m=index&f=assistant">
                <div class="opp">
                <img src="<?php echo IMG_PATH;?>
/首页/助手@2x.png" alt="">
            </div>
            <div class="shu"></div>
            <div class="character">助手</div>
            </a>
            
        </div>
        <div class="option">
            <a href="index.php?m=index&f=women">
                <div class="opp">
                <img src="<?php echo IMG_PATH;?>
/首页/我们@2x.png" alt="">
            </div>
            <div class="character">我们</div>
            </a>
            
        </div>
    </div>
</body>
</html>
<!-- Swiper JS -->
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
shouye.js"><?php echo '</script'; ?>
>
<!-- Initialize Swiper -->
<?php }
}
