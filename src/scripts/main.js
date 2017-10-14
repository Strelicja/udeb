

$(document).ready( function(){
//Persons Tabs
$('.tabsListTitle').each(function (index, item) {
        $(this).attr('rel', index+1);
          if (index+1 == 1) {
             $(this).addClass('nowa');
          }
    });
$('.tabsListContent').each(function (index, item) {

        $(this).attr('rel', index+1);
          if (index+1 == 1) {
            $('.tabsListContent').hide();
            //  $(this).addClass('nowa2');
             $(this).show();
          }
    });

$(".tabsListTitle").on("click", function(){
  var rell = $(this).attr('rel');
    $(".tabsListTitle").removeClass("nowa");
     liClass = $(this).addClass("nowa");

    $('.tabsListContent').each(function (index, item) {
      var divy = $(this).attr('rel');
      if (divy == rell) {
        $('.tabsListContent').hide();
        // $(this).addClass('nowa2');
        $(this).show();
      }
    });
});
//Acordion faq

$(".acordionBox").click(function() {
var display = $(this).next().css("display");
console.log(display);
    $(this).next().addClass('showAcordion').slideToggle('slow');
    $(this).addClass('colorAcordion arrowUp').removeClass('arrowDown');

    $(".acordionBox").not(this).next().removeClass('showAcordion').slideUp('slow');
    $(".acordionBox").not(this).removeClass('colorAcordion arrowUp').addClass('arrowDown');

    if (display=="block") {
      $(this).removeClass('arrowUp').addClass(' arrowDown');

    }
console.log(this);

});

//******  active submenu  *****////
var navHover = $(".sub-menu").find('li').find('a');
$(navHover).on("mouseenter", function(){
  $(".sub-menu").parent().addClass('hoverNav-menu');
});
$(navHover).on("mouseleave", function(){
  $(".sub-menu").parent().removeClass('hoverNav-menu');
});

//***** *****//
var  mn = $(".nava");
    mns = "main-nav-scrolled";
    hdr = $('header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});

 });
