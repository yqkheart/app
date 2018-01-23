$(function () {
    $(".bottom").on("click","li",function(){
        $(".bottom li .img-zhao").removeClass("active");
        $(this).children(".img-zhao").addClass("active");
        var res=$(this).children("input").val();
        $(".sub-style").html(res);
    })

    function sub(dizhi) {
        var style = $(".sub-style").text();
        $.ajax({
            url: "index.php?m=index&f=custom&a=getmanner",
            data: { style },
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
    $(".sub-next1").click(function(){
        sub("index.php?m=index&f=custom&a=yourselect");
    })
    $(".jump").click(function(){
        sub("index.php?m=index&f=custom&a=yourselect");
    })
    $(".sub-change").click(function(){
        sub("index.php?m=index&f=custom&a=yourselect");
    })
})