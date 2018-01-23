$(function(){
    var nowplace;
    // 点击弹出所有城市
    $(".your-city").on("click",function(){
        $(".middle ul").removeClass("active");
        getip(); 
    })
    // 重新定位
    $(".now").on("click",".restart",function(){
        getip();
        $(this).css({ "color": "#FF8A2C"})
    })
    // 点击当前定位 选中到所在地
    $(".now-img-place").click(function(){
        nowplace=$(this).html();
        $(".your-city span").html(nowplace).css({ "color": "#FF8630"}).addClass("me");
        $(".your-city img").css({
            "transform" : "rotate(90deg)" 
        })
        console.log(nowplace);
    })
//  点击城市选中到当前定位
    $(".middle").on("click","li",function(){
        var nowp=$(this).find("span").html();
        $(".now-img-place").html(nowp);
    })

    var ip = "";
    var city="";
    function getip() {
        $.ajax({
            url: 'http://freegeoip.net/json/',
            type: 'GET',
            dataType: 'JSONP',
            success: function (data) {
                var val = JSON.parse(JSON.stringify(data));
                ip = val.ip;
                // console.log(ip);
                $.ajax({
                    url: `http://api.jisuapi.com/ip/location?appkey=d844b0839ff12da9&ip=${ip}`,
                    dataType: "jsonp",
                    success: function (res) {
                        city=res.result.area.split(" ");
                        // console.log(city[1]);
                        $(".now-img div").html(city[1]);
                    }
                })
            },
        });
    }
    getip();
    $('.slider-input04').jRange({
        from: 0,
        to: 200000,
        step: 25000,
        scale: ['￥0', '￥25000', '￥50000', '￥100000', '￥150000', ''],
        format: '%s',
        width: 300,
        showLabels: true,
        isRange: true,
        ondragend: function () {
            let ran = $('.slider-input04').val();
            var b = ran.split(",");
            let str1 = "";
            for(var i=0;i<b.length;i++){
                b[i] = "￥" + b[i];
                str1+=b[i]+"--";
                s=str1.slice(0,-2);
            }
            $(".select-budget span").html(s).css({
                "color": "#FF8C2A"
            }).addClass("me");
        }
    });
    /* ********发送数据   判断***** */
    function sub(dizhi){
        let placeval;
        let priceval;
        if ($(".your-city span input").hasClass("myinput") &&
            $(".select-budget span input").hasClass("myinput")) {

            placeval = $(".your-city input").val();
            priceval = $(".select-budget input").val();
            console.log(placeval, priceval);

        } else if ($(".your-city span input").hasClass("myinput") &&
            $(".select-budget span").hasClass("me")) {

            placeval = $(".your-city input").val();
            priceval = $(".select-budget span").html();
            var arr = priceval.split("--");
            var aprice = parseInt(arr[1].slice(1)) - parseInt(arr[0].slice(1));
            console.log(aprice);
            priceval = aprice;
            console.log(placeval, priceval);

        } else if ($(".your-city span").hasClass("me") &&
            $(".select-budget span input").hasClass("myinput")) {

            placeval = $(".your-city span").html();
            priceval = $(".select-budget input").val();
            console.log(placeval, priceval);

        } else if ($(".your-city span").hasClass("me") &&
            $(".select-budget span ").hasClass("me")) {

            placeval = $(".your-city span").html();
            priceval = $(".select-budget span").html();
            var arr = priceval.split("--");
            var aprice = parseInt(arr[1].slice(1)) - parseInt(arr[0].slice(1));
            console.log(aprice);
            priceval = aprice;
            console.log(placeval, priceval);

        }

        console.log(placeval, priceval);
        $.ajax({
            url: "index.php?m=index&f=custom&a=getplace",
            data: { placeval, priceval },
            type: "post",
            success: function (res) {
                console.log(res);
                if (res == 1) {
                    location.href = dizhi;
                } else if (res == 0) {
                    location.href = dizhi;
                }
            }
        })
    }
    $(".sub-next").click(function(){
        sub("index.php?m=index&f=custom&a=date");
    })

    $(".jump").click(function () {
        sub("index.php?m=index&f=custom&a=date");
    })
    $(".sub-change").click(function () {
        sub("index.php?m=index&f=custom&a=yourselect");
    })
})