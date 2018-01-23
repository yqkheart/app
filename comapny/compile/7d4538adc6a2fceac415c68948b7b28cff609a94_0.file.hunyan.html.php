<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 14:16:00
  from 'C:\Users\Administrator\Desktop\app\comapny\template\index\hunyan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a66d3208dff91_26231873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4538adc6a2fceac415c68948b7b28cff609a94' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\app\\comapny\\template\\index\\hunyan.html',
      1 => 1516685879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66d3208dff91_26231873 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
hunyan.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem-ljb.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<header class="header">
		<div class="header-top">
			<a href="index.php?m=index&f=custom&a=shouye"><div class="fanhui"></div></a>
			<div class="title">
				<span class="pix1"></span>
				<span class="pix2"></span>
				<span class="tt" id="name"><?php echo $_smarty_tpl->tpl_vars['mz']->value;?>
</span>
				<span class="pix3"></span>
				<span class="pix4"></span>
			</div>
			<div></div>
		</div>
		<div class="select-type">
			<div class="title-type title">类型 - 中式<img src="<?php echo IMG_PATH;?>
search-img/xiala.png" alt=""></div>
			<div class="title-area title">区域 - 不限<img src="<?php echo IMG_PATH;?>
search-img/xiala.png" alt=""></div>
			<div class="title-other title">筛选 - 不限<img src="<?php echo IMG_PATH;?>
search-img/xiala.png" alt=""></div>
		</div>
	</header>
	<main class="search-result-box">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
		<section class="search-result">
			<div class="search-result-top">
				<div class="search-result-top-img">
					<img src="<?php echo $_smarty_tpl->tpl_vars['s']->value['img'];?>
" alt="">
				</div>
				<div class="background1"></div>
				<div class="background2"></div>
				<div class="search-result-top-right">
					<div class="info-title">
						<span class="title"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</span>
						<span class="img-box"><img src="<?php echo IMG_PATH;?>
search-img/wujiaoxing.png" alt=""></span>
					</div>
					<div class="line"></div>
					<div class="desc-box">
						<span class="desc1">#<?php echo $_smarty_tpl->tpl_vars['s']->value['style'];?>
</span>
					</div>
					<div class="price-info">
						<div class="price">
							<div class="danwei">RMB</div>
							<div class="amount"><?php echo $_smarty_tpl->tpl_vars['s']->value['price'];?>
起</div>
						</div>
						<div class="sell-count">
							<span class="biao">已售：</span>
							<span class="count"><?php echo $_smarty_tpl->tpl_vars['s']->value['sell'];?>
</span>
						</div>
					</div>
				</div>
			</div>
			<div class="fenjie">
			</div>
			<div class="other-info">
				<div class="shoucang son">
					<span class="img-box coll" id="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><img src="<?php echo IMG_PATH;?>
search-img/shoucang.png" alt=""></span>
					<span class="store">收藏</span>
					<span class="store-count shu"><?php echo $_smarty_tpl->tpl_vars['s']->value['collection'];?>
</span>
				</div>
				<div class="time son">
					<span class="img-box"><img src="<?php echo IMG_PATH;?>
search-img/time.png" alt=""></span>
					<span class="store">8:00-10：00</span>
				</div>
				<div class="address son">
					<span class="img-box"><img src="<?php echo IMG_PATH;?>
search-img/dizhi.png" alt=""></span>
					<span class="store"><?php echo $_smarty_tpl->tpl_vars['s']->value['place'];?>
</span>
					<span class="store-count"><?php echo $_smarty_tpl->tpl_vars['s']->value['juli'];?>
</span>
				</div>
			</div>
		</section>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['engs']->value;?>
">
	</main>
</body>
</html>
<?php echo '<script'; ?>
>
	$('.son').on("click",".coll",function () {
	    let name=$('input').val();
	    console.log(name)
	    let id=$(this).attr("id")
//		console.log(id)
		let text=$(this).siblings('.shu').text();
		text=parseInt(text)
		text++;
        $(this).siblings('.shu').text(text);
        $.ajax({
			url:`index.php?m=index&f=${ name }&a=updateColl`,
			data:{ text:text,id:id },
			success:function (res) {
//				console.log(res)
            }
		})
    })
<?php echo '</script'; ?>
><?php }
}
