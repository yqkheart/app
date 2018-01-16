$(function () {
    function lunbo() {
        // 首页轮播图
        var width=$(`.banner ul`).eq(0).outerWidth();
        var now=0;
        var next=0;
        var flag=true;
        function move(way=`l`) {
            if (way==`l`){
                if (flag){
                    flag=false
                    next=now+1;
                    if (next>=$(`.banner ul`).length){
                        next=0;
                    }
                    $(`.banner ul`).eq(next).css(`left`,width)
                    $(`.banner ul`).eq(now).animate({left:-width},1000,function () {
                        $(`.character-box span`).eq(0).animate({top:275,opacity:1},function () {
                            $(`.character-box span`).eq(1).animate({top:327,opacity:1})
                        });
                    })

                    $(`.banner ul`).eq(next).animate({left:0},1000,function () {
                        flag=true;
                        $(`.character-box span`).eq(2).animate({top:275,opacity:1},function () {
                            $(`.character-box span`).eq(3).animate({top:327,opacity:1})
                        });
                    })
                    $(`.character-box span`).eq(0).css({top:255,opacity:0})
                    $(`.character-box span`).eq(1).css({top:355,opacity:0})
                    $(`.character-box span`).eq(2).css({top:255,opacity:0})
                    $(`.character-box span`).eq(3).css({top:355,opacity:0})
                    now=next;
                }
            }else if(way==`r`){
                if (flag){
                    flag=false;
                    next=now-1;
                    if (next<0){
                        next=$(`.banner ul`).length-1
                    }
                    $(`.banner ul`).eq(next).css(`left`,-width)
                    $(`.banner ul`).eq(now).animate({left:width},1000,function () {
                        $(`.character-box span`).eq(0).animate({top:275,opacity:1},500,function () {
                            $(`.character-box span`).eq(1).animate({top:327,opacity:1},500)
                        });
                    })
                    $(`.banner ul`).eq(next).animate({left:0},1000,function () {
                        flag=true;
                        $(`.character-box span`).eq(2).animate({top:275,opacity:1},500,function () {
                            $(`.character-box span`).eq(3).animate({top:327,opacity:1},500)
                        });
                    
                    })
                    $(`.character-box span`).eq(0).css({top:255,opacity:0})
                    $(`.character-box span`).eq(1).css({top:355,opacity:0})
                    $(`.character-box span`).eq(2).css({top:255,opacity:0})
                    $(`.character-box span`).eq(3).css({top:355,opacity:0})
                    now=next;
                }
            }
        }
        var t=setInterval(move,6000)
        $(`.left-box`).click(function () {
            move(way=`r`)
        })
        $(`.right-box`).click(function () {
            move(way=`l`)
        })
        // 轮播图文字效果
        function textmove() {
            if ($(`.banner ul`).eq(0).offset().left==0){
                $(`.character-box span`).eq(0).animate({top:275,opacity:1},function () {
                    $(`.character-box span`).eq(1).animate({top:327,opacity:1})
                });
            // }else if ($(`.banner ul`).eq(1).offset().left==0){
            //     $(`.character-box span`).eq(2).animate({top:275,opacity:1},500,function () {
            //         $(`.character-box span`).eq(3).animate({top:327,opacity:1},500)
            //     });
            }
        }
        textmove();
    }
    lunbo();
    // 选项卡
    function option() {
        var t
        $(`.head-center-box li`).hover(function () {
            t=setTimeout(()=> {
                $(this).find(`.option`).slideDown(function () {
                    $(`.option div`).animate({opacity:1,paddingLeft:20})
                })
            },300)
        },function () {
            clearTimeout(t)
            $(this).find(`.option`).slideUp(function () {
                $(`.option div`).css({opacity:0,paddingLeft:0})
            })
        })
    }
    option();
})
