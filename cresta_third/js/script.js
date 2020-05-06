$(function () {

  var imgHeight = $('#js-height').outerHeight();
  var header = $('#js-header');
  $(window).on('load scroll', function(){
    if ($(window).scrollTop() < imgHeight) {
      header.removeClass('header__js-bg');
    } else {
      header.addClass('header__js-bg');
    }
  });

  $('#nav-toggle').on('click', function() {
    $('body').toggleClass('open');
  });

  $('a[href^="#"]').click(function(){
    const speed = 500;
    const href= $(this).attr("href");
    const target = $(href == "#" || href == "" ? 'html' : href);
    const position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  /* floating */
  const pagetop = $('#page_top');
  pagetop.hide();

  $(window).scroll(function () {
      if (400 < $(this).scrollTop()) {
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
      }
  });
  pagetop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 500);
      return false;
  });
});