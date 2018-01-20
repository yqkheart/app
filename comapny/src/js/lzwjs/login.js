$(function () {
   var denglu=$(".lo-zi");
   var ul=$('ul');
   var sanjiao=$('.triangle_border_down');
   var sec=$('.footer-box');
   $('.login').click(function () {
       $('.sibian2').removeClass('active');
       $('.sanjiao2').removeClass('active1');
        $('.sibian1').addClass('active');
        $('.sanjiao1').addClass('active1');
        $('.box2').removeClass('active3');
        $('.box1').addClass('active3');
    })
    $('.register').click(function () {
        $('.sibian1').removeClass('active');
        $('.sanjiao1').removeClass('active1');
        $('.sibian2').addClass('active');
        $('.sanjiao2').addClass('active1');
        $('.box1').removeClass('active3');
        $('.box2').addClass('active3');
    })
});