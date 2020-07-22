$(document).ready(function($) { 
   var navHeight = $('.navbar').innerHeight()
   $(".scroll").click(function(event){        
       event.preventDefault();
       $('html,body').animate({scrollTop:$(this.hash).offset().top - navHeight}, 1000);
   });
   $("#aTop").click(function(event){
       event.preventDefault();
       $('html,body').animate({scrollTop:0}, 1000);
   })
});