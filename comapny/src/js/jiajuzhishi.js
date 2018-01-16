$(function () {
    // 选项卡
    function option() {
        var t
        $(`.head-center-box li`).hover(function () {
            t = setTimeout(() => {
                $(this).find(`.option`).slideDown(function () {
                    $(`.option div`).animate({opacity: 1, paddingLeft: 20})
                })
            }, 300)
        }, function () {
            clearTimeout(t)
            $(this).find(`.option`).slideUp(function () {
                $(`.option div`).css({opacity: 0, paddingLeft: 0})
            })
        })
    }
    option();

    $(window).scroll(function () {
        var scrolls = document.body.scrollTop || document.documentElement.scrollTop;
        // console.log(scrolls)
        if (scrolls >= 1500) {
            $(`.backTop`).css({opacity:1})
            // console.log($(`.backTop`))
        } else {
            $(`.backTop`).css({opacity:0})
        }
        // console.log($('.backTop'))
    })
    function backtop() {
        $(`.backTop`).on(`click`,function () {
            // console.log(1)
            $(`body`).animate({scrollTop:0})
            $(document.documentElement).animate({scrollTop:0})
        })
    }
    backtop();
})