$(function () {
    $(".bottom").on("click","li",function(){
        $(".bottom li .img-zhao").removeClass("active");
        $(this).children(".img-zhao").addClass("active");
        var res=$(this).children("input").val();
        $(".sub-style").html(res);
    })

    $(".sub-next1").click(function(){
       var style=$(".sub-style").text();
       $.ajax({
           url:"index.php?m=index&f=custom&a=getmanner",
           data:{style},
           type:"post",
           success:function(res){
               console.log(res);
               if(res==1){
                location.href="index.php?m=index&f=custom&a=yourselect";
               }else if(res==0){
                   location.href = "index.php?m=index&f=custom&a=yourselect";
               }
           }
       })
    })
})