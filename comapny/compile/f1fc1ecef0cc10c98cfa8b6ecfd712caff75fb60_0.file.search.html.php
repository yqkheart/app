<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-22 03:37:02
  from 'D:\quanzhan\app\comapny\template\index\search.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a654e4ef0a269_43159857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1fc1ecef0cc10c98cfa8b6ecfd712caff75fb60' => 
    array (
      0 => 'D:\\quanzhan\\app\\comapny\\template\\index\\search.html',
      1 => 1516529609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a654e4ef0a269_43159857 (Smarty_Internal_Template $_smarty_tpl) {
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
search.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem-ljb.js"><?php echo '</script'; ?>
>
</head>
<body>
<header class="header">
    <div class="header-top">
        <a class="back">
            <div class="fanhui"></div>
        </a>
        <div class="title">
            <span class="pix1"></span>
            <span class="pix2"></span>
            <span class="tt">搜索</span>
            <span class="pix3"></span>
            <span class="pix4"></span>
        </div>
        <a href="">
            <div class="yuyin"></div>
        </a>
    </div>
    <div class="search-box">
        <input type="text" class="search-box-input" placeholder="搜索风格、元素和商家~" autofocus>
        <span class="search-icon"></span>
    </div>
</header>
<main>
    <section class="hot-search">
        <div class="title"></div>
        <div class="theme">
            <a href="index.php?m=admin&f=hunyue">
                <div class="theme-box1">
                    <div class="theme-icon"></div>
                    <div class="theme-word">
                        <div class="title-img">
                            <span>婚宴</span>
                        </div>
                        <div class="subtitle">
                            Wedding banquet
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </a>
            <a href="index.php?m=admin&f=cehua">
                <div class="theme-box2">
                    <div class="theme-icon"></div>
                    <div class="theme-word">
                        <div class="title-img">
                            <span>策划</span>
                        </div>
                        <div class="subtitle">
                            Wedding plan
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </a>
            <a href="">
                <div class="theme-box3">
                    <div class="theme-icon"></div>
                    <div class="theme-word">
                        <div class="title-img">
                            <span>摄影</span>
                        </div>
                        <div class="subtitle">
                            Wedding photo
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </a>
            <a href="index.php?m=admin&f=lifu">
                <div class="theme-box4">
                    <div class="theme-icon"></div>
                    <div class="theme-word">
                        <div class="title-img">
                            <span>礼服</span>
                        </div>
                        <div class="subtitle">
                            Wedding dress
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </a>
        </div>
    </section>
    <section class="history-search">
        <div class="title-box">
            <div class="title"></div>
            <div class="rabish"></div>
        </div>
        <ul class="history-list">
            <li>
                <div class="record">跟拍</div>
                <div class="info">
                    <span class="time-icon"></span>
                    <span class="time">2017/11/13</span>
                    <span class="delete"></span>
                </div>
            </li>
            <li>
                <div class="record">婚纱照</div>
                <div class="info">
                    <span class="time-icon"></span>
                    <span class="time">2017/11/13</span>
                    <span class="delete"></span>
                </div>
            </li>
            <li>
                <div class="record">旅拍</div>
                <div class="info">
                    <span class="time-icon"></span>
                    <span class="time">2017/11/13</span>
                    <span class="delete"></span>
                </div>
            </li>
            <li>
                <div class="record">定制</div>
                <div class="info">
                    <span class="time-icon"></span>
                    <span class="time">2017/11/13</span>
                    <span class="delete"></span>
                </div>
            </li>
        </ul>
    </section>
</main>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        if (localStorage.history){
            var recordList = JSON.parse(localStorage.history)
        }else{
            var recordList = [];
        }
        $('.history-list').html();
        var brr='';

        render(recordList);
        function render(recordList) {
            if (recordList.length<=4){
                for(var i=0;i<recordList.length;i++){
                    brr+=`<li id="${ i}">
                <div class="record">${ recordList[i].keyword}</div>
                <div class="info">
                    <span class="time-icon"></span>
                    <span class="time">${ recordList[i].date}</span>
                    <span class="delete"></span>
                </div>
            </li>`
                }
            }else{
                for(var i=0;i<4;i++){
                    brr+=`<li>
                <div class="record">${ recordList[i].keyword}</div>
                <div class="info">
                    <span class="time-icon"></span>
                    <span class="time">${ recordList[i].date}</span>
                    <span class="delete"></span>
                </div>
            </li>`
                }
            }
            $('.history-list').html(brr);
        }
        $('.back').click(function () {
            history.go(-1);
        })
        $('.delete').click(function () {
            alert(1)
            let mark=parseInt($(this).closest('li').attr('id'));
            if (localStorage.history){
                var recordList = JSON.parse(localStorage.history)
            }
            recordList.splice(mark,1);
            localStorage.history=JSON.stringify(recordList);
            $(this).closest('li').remove();
        })
        $('.search-icon').click(function () {
            if (localStorage.history){
                recordList = JSON.parse(localStorage.history)
            }
            let keyword = $('.search-box-input').val();
            let time=new Date();
            var year =time.getFullYear();
            var month = time.getMonth()+1;
            var day = time.getDate();
            var date =year+'/'+month+'/'+day;
            if (keyword != ""){
                var record={
                    keyword:keyword,
                    date:date
                }
                recordList.unshift(record);
                localStorage.history=JSON.stringify(recordList);
            }
            $.ajax({
                url: 'index.php?m=index&f=search&a=searchResult',
                data: { keyword},
                type: 'get',
                dataType: 'json',
                success: function (data) {
                    $('main').html('');
                    var str='';
                    for (var i=0;i<data.length;i++){
                        str += `<section class="search-result">
			<div class="search-result-top">
				<div class="search-result-top-img">
					<img src="<?php echo IMG_PATH;?>
search-img/jiudian.png" alt="">
				</div>
				<div class="background1"></div>
				<div class="background2"></div>
				<div class="search-result-top-right">
					<div class="info-title">
						<span class="title">${ data[i].name}</span>
						<span class="img-box"><img src="<?php echo IMG_PATH;?>
search-img/wujiaoxing.png" alt=""></span>
					</div>
					<div class="line"></div>
					<div class="desc-box">
						<span class="desc1">#${ data[i].style}</span>
						<!--<span class="desc2">#超高人气</span>
						<span class="desc3">#中式风格</span>-->
					</div>
					<div class="price-info">
						<div class="price">
							<div class="danwei">RMB</div>
							<div class="amount">${ data[i].price}起</div>
						</div>
						<div class="sell-count">
							<span class="biao">已售：</span>
							<span class="count">${ data[i].sell}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="fenjie">
			</div>
			<div class="other-info">
				<div class="shoucang son">
					<span class="img-box"><img src="<?php echo IMG_PATH;?>
search-img/shoucang.png" alt=""></span>
					<span class="store">收藏</span>
					<span class="store-count">${ data[i].collection}</span>
				</div>
				<div class="time son">
					<span class="img-box"><img src="<?php echo IMG_PATH;?>
search-img/time.png" alt=""></span>
					<span class="store">8:00-10：00</span>
				</div>
				<div class="address son">
					<span class="img-box"><img src="<?php echo IMG_PATH;?>
search-img/dizhi.png" alt=""></span>
					<span class="store">${ data[i].place}</span>
					<span class="store-count">5km</span>
				</div>
			</div>

		</section>`
                    }
                    $('main').html(str);

                }
            })
        })

    })
<?php echo '</script'; ?>
><?php }
}
