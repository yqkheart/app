$(function(){
    $('#ca').calendar({
        width: 300,
        height: 300,
        data: [
            {
                date: '2018/02/15',
            }
        ],
        onSelected: function (view, date , date1) {
            //实例化日期对象 获取点击的日期
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

    $("div.btn").click(function(){
        var d = new Date();
        d.setDate(d.getDate());
        var m = d.getMonth() + 1;
        let da = d.getFullYear() + '-' + m + '-' + d.getDate();
        var date;
        // console.log(da); 
        if ($(".your-date span input").hasClass("mydate")){
            date=da;
        }else{
            date = $(".your-date span").html()
            
        }
        $.ajax({
            url:"index.php?m=index&f=custom&a=getdate",
            data:{date},
            type:"post",
            success:function(res){
                if(res==1){
                    location.href="index.php?m=index&f=custom&a=project";
                }else if(res==0){
                    location.href = "index.php?m=index&f=custom&a=project";
                }
            }
        })
    })
})