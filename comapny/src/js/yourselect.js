$(function(){
    $(".sub-next1").click(function(){
        var place=$(".modify-place").text();
        var cprice = $(".modify-cprice").text();  
        var date = $(".modify-date").text();  
        var style = $(".modify-style").text();
       
        var project="";
        $(".modify-project span li").each(function(){
            project += $(this).text() + $(this).find(".pro").val()+" ";
        })
        console.log(place,cprice,date,style,project);
        $.ajax({
            url:"index.php?m=index&f=custom&a=getyourselect",
            data:{place,cprice,date,style,project},
            type:"post",
            success:function(res){
                if(res==1){
                    alert("定制成功");
                }
            }
        })
    })
})
