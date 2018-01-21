<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-21 09:44:54
  from 'G:\myobject\app\comapny\template\index\hunlifangan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a646116c7e544_61030121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9cdc8a8b189568d232d1ba44e5c0bb2bfe3401d' => 
    array (
      0 => 'G:\\myobject\\app\\comapny\\template\\index\\hunlifangan.html',
      1 => 1516527893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a646116c7e544_61030121 (Smarty_Internal_Template $_smarty_tpl) {
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
hunlifangan.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
</head>
<?php echo '<script'; ?>
 type="text/javascript">

    var myScroll;

    function loaded() {
        myScroll = new IScroll('#wrapper', { scrollX: true, scrollY: false, mouseWheel: true });
    }

<?php echo '</script'; ?>
>
<style>

</style>
<body onload="loaded()">
    <header>
        <div class="topBox">
            <div class="backBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/back.png" alt=""></div>
            <div class="hunlifangan">婚礼方案</div>
        </div>
        <div id="wrapper">
            <div id="scroller">
                <ul class="bottomBox">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li>
                        <a class="mao" href="#1">
                             <a><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</a>
                        <div class="shu"></div>
                        <div class="english">BANQUET</div>
                        </a>
                    </li>     
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>     
                </ul>
            </div>
        </div>
    </header>
    <div class="content">
        <!-- <div class="yusuan"><img src="<?php echo IMG_PATH;?>
婚礼方案/xinxibiao.png" alt=""></div> -->
        <div class="hotel">
            <!-- 摄影师 -->
            <div class="hotelTitle">
                <p>WEDDINXINGHEGRAPHY</p>
                <p>摄影师</p>
            </div>
            <div class="ggbox">
                <div class="priceBox">
                    <div class="leftPrice">
                        <span style="color:#E3E3E3">￥</span>
                        <span style="color:#FD7C71">3999</span>
                        <span style="color:#E3E3E3">起</span>
                    </div>
                    <div class="rightXing">
                        <img src="<?php echo IMG_PATH;?>
婚礼方案/wuxing.png" alt="">
                    </div>
                </div>
                <div class="hotelImg">
                    <img src="<?php echo IMG_PATH;?>
婚礼方案/sheying.png" alt="">
                </div>
            
                <div class="hotelDizhi" style="height:0.8rem">
                    <div class="iconBoxs">
                        <img src="<?php echo IMG_PATH;?>
婚礼方案/touxiang2.png" alt="">
                    </div>
                    <div class="dizhis">灰灰</div>
                    <div class="dizhiss">
                        <span style="color:#FE7C38">造梦师</span>&nbsp;
                        <span style="color:#CACACA">策划一流</span>
                    </div>
                </div>
                <div class="zixun">立即咨询</div>
            </div>
            <!-- 酒店 -->
            <div class="hotelTitle" id="1">
                <p>WEDDINXINGHEGRAPHY</p>
                <p>星河湾酒店</p>
            </div>
            <div class="ggbox">
                <div class="priceBox">
                    <div class="leftPrice"><span style="color:#E3E3E3">￥</span><span style="color:#FD7C71">1899</span><span style="color:#E3E3E3">起</span></div>
                    <div class="rightXing"><img src="<?php echo IMG_PATH;?>
婚礼方案/wuxing.png" alt=""></div>
                </div>
                <div class="hotelImg"><a href="hotel.html"><img src="<?php echo IMG_PATH;?>
婚礼方案/jiudian.png" alt=""></a></div>
                <div class="hotelDizhi">
                    <div class="iconBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/dingwei.png" alt=""></div>
                    <div class="dizhi">三亚湾海坡12巷万家戴斯酒店7楼观海整层</div>
                </div>
                <div class="hotelDizhi">
                    <div class="iconBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/shijian.png" alt=""></div>
                    <div class="dizhi" style="color:#8D8E90">8:00AM-10:00PM</div>
                </div>
                <div class="hotelDizhi">
                    <div class="iconBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/dianhua.png" alt=""></div>
                    <div class="dizhi" style="color:#FE7C38">400-9088-345</div>
                </div>
                <div class="zixun">立即咨询</div>
            </div>
            <!-- 策划师 -->
            <div class="hotelTitle">
                <p>WEDDINXINGHEGRAPHY</p>
                <p>策划师</p>
            </div>
            <div class="ggbox">
                <div class="priceBox">
                    <div class="leftPrice"><span style="color:#E3E3E3">￥</span><span style="color:#FD7C71">3999</span><span style="color:#E3E3E3">起</span></div>
                    <div class="rightXing"><img src="<?php echo IMG_PATH;?>
婚礼方案/wuxing.png" alt=""></div>
                </div>
                <div class="hotelImg"><img src="<?php echo IMG_PATH;?>
婚礼方案/cehua.png" alt=""></div>
                    
                <div class="hotelDizhi" style="height:0.8rem">
                        <div class="iconBoxs"><img src="<?php echo IMG_PATH;?>
婚礼方案/touxiang1.png" alt=""></div>
                        <div class="dizhis">灰灰</div>
                        <div class="dizhiss"><span style="color:#FE7C38">造梦师</span>&nbsp;<span style="color:#CACACA">策划一流</span></div>
                </div>
                <div class="zixun">立即咨询</div>
            </div>
            
            <!-- 婚纱 -->
            <div class="hotelTitle">
                <p>WEDDINXINGHEGRAPHY</p>
                <p>爱睦婚纱</p>
            </div>
            <div class="ggbox" style="margin-bottom:0.7rem;">
                <div class="priceBox">
                    <div class="leftPrice"><span style="color:#E3E3E3">￥</span><span style="color:#FD7C71">1899</span><span style="color:#E3E3E3">起</span></div>
                    <div class="rightXing"><img src="<?php echo IMG_PATH;?>
婚礼方案/wuxing.png" alt=""></div>
                </div>
                <div class="hotelImg"><img src="<?php echo IMG_PATH;?>
婚礼方案/lifu.png" alt=""></div>
                <div class="hotelDizhi">
                    <div class="iconBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/dingwei.png" alt=""></div>
                    <div class="dizhi">三亚湾海坡12巷万家戴斯酒店7楼观海整层</div>
                </div>
                <div class="hotelDizhi">
                    <div class="iconBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/shijian.png" alt=""></div>
                    <div class="dizhi" style="color:#8D8E90">8:00AM-10:00PM</div>
                </div>
                <div class="hotelDizhi">
                    <div class="iconBox"><img src="<?php echo IMG_PATH;?>
婚礼方案/dianhua.png" alt=""></div>
                    <div class="dizhi" style="color:#FE7C38">400-9088-345</div>
                </div>
                <div class="zixun">立即咨询</div>
            </div>
        </div>  
    </div>
    <!-- table栏目 -->
    <div class="tableBoxs">
        <div class="yuyue">
            <div class="xiugai">
                <div class="tubiao"><img src="<?php echo IMG_PATH;?>
婚礼方案/bianji.png" alt=""></div>
                <div class="character">修改方案</div>
            </div>
            <div class="sanjiao"></div>
        </div>
        <div class="yuyues">
            <div class="xiugai">
                <div class="tubiao"><img src="<?php echo IMG_PATH;?>
婚礼方案/yuyue.png" alt=""></div>
                <div class="character" style="color:#fff">预约全部</div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
