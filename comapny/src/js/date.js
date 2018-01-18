$(function(){
    $('#ca').calendar({
        width: 300,
        height: 300,
        data: [
            {
                date: '2018/02/15',
                value: '除夕'
            }
        ],
        onSelected: function (view, date , date1) {
            //实例化日期对象
            var d = new Date(date);
            d.setDate(d.getDate() );
            var m = d.getMonth() + 1;
            let da=d.getFullYear() + '-' + m + '-' + d.getDate();
            // console.log(da) ; 
            $(".your-date span").html(da).css({ "color": "#FF8630" });
            $(".your-date img").css({
                "transform": "rotate(90deg)"
            })
            $("ol.days").find("li").removeClass("now");
        }
    });
})