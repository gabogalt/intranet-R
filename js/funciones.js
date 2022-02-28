// JavaScript Document
$(document).ready(function(){
  if(screen.width <= 475){
    $('.nav2').animate({width: 'toggle'});
  }
  $(window).on("resize",function(){
    if(screen.width <= 475){
      $('.nav2:not(.active)').animate({width: 'toggle'});
    }
  })
                   
  $(".nav2 li").click(function(){
    if($(this).children("ul").length>0){      
      $(this).children("ul").slideDown();
      $(this).addClass("active");
      $(this).siblings("li").find("ul").slideUp().removeClass(".active");      
    }
  })
  $(window).click(function(){
     $('.nav2.active').animate({width: 'toggle'}).removeClass("active");
  })
  $(".menu_mobile").click(function(event){   
    event.stopPropagation();
    $('.nav2').animate({width: 'toggle'}).addClass("active");
  })
  $('.nav2').click(function(event){    
    event.stopPropagation();
  })
  
  $(window).click(function(){
    $(".nav1 .buscador").slideUp("fast");
  })
  $(".nav1 .buscar").click(function(event){
    event.stopPropagation();
    $(".nav1 .buscador").slideDown("fast").click(function(event){
      event.stopPropagation();
    }).find("input").focus();
  })
  $(".nav2 .buscar input").click(function(event){      
      event.stopPropagation();
  })
})