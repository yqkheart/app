$(function(){
    var color = ["#F0647D", "#FEAA5A", "#8079F2", "#63DD81", "#4FB6F4","#71AFFD",
        "#FF6E8A","#FF8164"];
    var word = ["-摄影-", "-婚宴-", "-策划-", "-礼服-", "-婚车-", "-蜜月-", "-造型-"
        , "-首饰-"];
    // console.log($("section.bottom li").length);
    // 循环  
    $("section.bottom li").each(function(index,value){
        // 创建空的li 放入到里面
        $(".include-right").append($(`<li style=" display: none;"><div></div></li>`))
        // 点击循环的li里的当前li
        if ($(value).children(".zhao").hasClass("active")){
            let oldword = word[0].substr(1, 2);
            let yusuan = "";
            // console.log(oldword);
            yusuan += `${oldword} <div></div>`;
            //          显示内容
            $(".include-right li").eq(index).html((index, value) => {
                return yusuan;
            });
            //字体颜色  显示内容
            $(".include-right li").eq(index).css({
                "color": color[index],
                "display": "block",
            })
            //对勾颜色
            $(".include-right li").find("div").eq(index).css({
                "borderColor": color[index]
            })
        }
        $(value).click(function(){
            if ($(this).children(".zhao").hasClass("active")){
                //消除遮罩  不同遮罩不同颜色
                $(this).children(".zhao").removeClass("active").css({
                    "borderColor": color[index]
                });
                //消除遮罩中心
                $(this).children(".zhao").children(".zhao-middel").removeClass("active").css({
                    "background": color[index],
                    "opacity": 0.8
                });
                //遮罩下方文字
                let bottomword = word[index].substr(1, 2);
                console.log(bottomword);
                $(this).children("p").html(bottomword).css({
                    "color": "#7F8282;"
                });

                //点击选中到上面
                let oldword = $(this).children("p").html()
                let yusuan = "";
                yusuan = `<div style="display: none;"></div>`;
                //          添加内容
                $(".include-right li").eq(index).html((index, value) => {
                    return yusuan;
                });
                //字体颜色  显示内容
                $(".include-right li").eq(index).css({
                    "color": color[index],
                    "display": "block",
                })
                //对勾颜色
                $(".include-right li").find("div").eq(index).css({
                    "borderColor": color[index]
                })
                console.log($(".include-right li").eq(index))
            }else{
                //添加遮罩  不同遮罩不同颜色
                $(this).children(".zhao").addClass("active").css({
                    "borderColor": color[index]
                });
                //遮罩中心
                $(this).children(".zhao").children(".zhao-middel").addClass("active").css({
                    "background": color[index],
                    "opacity": 0.8
                });
                //遮罩下方文字
                $(this).children("p").html(word[index]).css({
                    "color": color[index]
                });
                //点击选中到上面
                let oldword = $(this).children("p").html().substr(1, 2)
                let yusuan = "";
                yusuan += `${oldword} <div></div>`;
                //          添加内容
                $(".include-right li").eq(index).html((index, value) => {
                    return yusuan;
                });
                //字体颜色  显示内容
                $(".include-right li").eq(index).css({
                    "color": color[index],
                    "display": "block",
                })
                //对勾颜色
                $(".include-right li").find("div").eq(index).css({
                    "borderColor": color[index]
                })
                console.log($(".include-right li").eq(index))
            }
            
            
        })
    })

    // 点击发送ajax

    $(".sub-next").click(function(){
        let myproject=$(".include-right li").text();
        $.ajax({
            url:"index.php?m=index&f=custom&a=getproject",
            data:{myproject},
            type:"post",
            success:function(res){
                console.log(res);
                if(res==1){
                    location.href="index.php?m=index&f=custom&a=manner";
                }else if(res==0){
                    location.href = "index.php?m=index&f=custom&a=manner";
                }
            }
        })
    })
})