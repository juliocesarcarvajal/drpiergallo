$(window).load(function(){
    
    $(".btn-search").toggle(function(){
        $("#search-header").fadeIn();
        $(".btn-search").addClass("active");
        document.getElementById("search-form_it").focus();
    },function(){
        $("#search-header").fadeOut();
        $(".btn-search").removeClass("active");
    });
    
});





$(document).ready(function(){

var 
  fullList1 = $('.list_1')
, fullFooterMap = $('#map')
, direction = $('body').css("direction")
, _window = $(window)
;


$('.list_1 li').css('display', 'inline-block');
$('#map').css('display', 'block');

$(window).resize(
   function(){
      mainResizer();
   }
).trigger('resize');


function mainResizer(){
  if(direction == "ltr"){
    fullList1.css({width: _window.width(), "margin-left": (_window.width()/-2), "left":"50%" });
    fullFooterMap.css({width: _window.width(), "margin-left": (_window.width()/-2),"left":"50%"});
  }else{
    fullList1.css({width: _window.width(), "margin-right": (_window.width()/-2), "right":"50%" });
    fullFooterMap.css({width: _window.width(), "margin-right": (_window.width()/-2),"right":"50%"});
  }
}

});