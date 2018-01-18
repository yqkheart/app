$(function(){

    $(".your-city").on("click",function(){
        $(".middle ul").removeClass("active");
        getip(); 
    })
    $(".now").on("click",".restart",function(){
        getip();
        $(this).css({ "color": "#FF8A2C"})
    })
    $(".now-img-place").click(function(){
        var nowplace=$(this).html();
        $(".your-city span").html(nowplace).css({ "color": "#FF8630"});
        $(".your-city img").css({
            "transform" : "rotate(90deg)" 
        })
    })
    $(".middle").on("click","li",function(){
        var nowp=$(this).html();
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
            let str1="";
            for(var i=0;i<b.length;i++){
                b[i] = "￥" + b[i];
                str1+=b[i]+"--";
                s=str1.slice(0,-2);
            }
            // console.log(s);
            $(".select-budget span").html(s).css({
                "color": "#FF8C2A"
            });
        }
    });

})