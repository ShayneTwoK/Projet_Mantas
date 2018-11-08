/* click sur burger = affiche menu */

$(function($){
  $(".toggle").click(function(){
    $(".Menu").toggleClass("is-open");
  })
});

/* click sur élément du menu = désactive menu */

$(function($){
  $(".1").click(function(){
    $(".Menu").removeClass("is-open");
  });
});

$(function($){
  $(".2").click(function(){
    $(".Menu").removeClass("is-open");
  });
});

$(function($){
  $(".3").click(function(){
    $(".Menu").removeClass("is-open");
  });
});
