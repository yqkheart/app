$(function(){
    $(".character").click(function(){
        // id="tanchuang"
        $("#tanchuang").stop().fadeIn(500);
    })
    $("#yes").click(function(){
        location.href="index.php?m=index&f=custom&a=shouye";
    })
    $("#no").click(function () {
        $("#tanchuang").stop().fadeOut(500);
    })
})