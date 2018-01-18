$(function(){
    var color = ["#F0647D", "#FEAA5A", "#8079F2", "#63DD81", "#4FB6F4","#71AFFD",
        "#FF6E8A","#FF8164"];
    var word = ["-摄影-", "-婚宴-", "-策划-", "-礼服-", "-婚车-", "-蜜月-", "-造型-"
        , "-首饰-"];
    console.log($("section.bottom li").length);
    $("section.bottom li").each(function(index,value){
        $(".include-right").append($(`<li style=" display: none;"><div></div></li>`))
        $(value).click(function(){
            $(this).children(".zhao").addClass("active").css({
                "borderColor" : color[index]
            });
            $(this).children(".zhao").children(".zhao-middel").addClass("active").css({
                "background" : color[index],
                "opacity" : 0.8
            });
            $(this).children("p").html(word[index]).css({
                "color": color[index]
            });
            let oldword = $(this).children("p").html().substr(1,2)
            let yusuan ="";
            yusuan +=`${oldword} <div></div>`;
            $(".include-right li").eq(index).html((index,value)=>{
                return yusuan;
            });
            $(".include-right li").eq(index).css({
                "color": color[index],
                "display": "block",
            })
            $(".include-right li").find("div").eq(index).css({
                "borderColor": color[index]
            })
            console.log($(".include-right li").eq(index))
        })
    })
})