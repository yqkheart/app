$(function () {
    $(".bottom").on("click","li",function(){
        $(".bottom li .img-zhao").removeClass("active");
        $(this).children(".img-zhao").addClass("active");
        var res=$(this).children("input").val();
        $(".sub-style").html(res);
    })
})