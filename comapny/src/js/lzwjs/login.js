$(function () {
   var denglu=$(".lo-zi");
   var ul=$('ul');
   var sanjiao=$('.triangle_border_down');
   var sec=$('.footer-box');
   // console.log(sec);
   ul.click(function(event){
       ul.each(function (index,value) {
           $(value).find('.lo-zi').removeClass('active');
           $(value).find('.triangle_border_down').removeClass('active1');
       });
       $(this).find('.lo-zi').addClass('active');
       $(this).find('.triangle_border_down').addClass('active1');
       // sec.each(function (index,value) {
       //     $(value).removeClass('active3');
       // });
       $(this).parent().parent().parent().find('.footer-box').addClass('active3');
   })
});