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
    option()
})