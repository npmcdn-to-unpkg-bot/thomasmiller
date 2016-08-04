// =====================================================
// Mobile menu toggle logic
// =====================================================
$(function() {
  $('#mobile-menu-trigger').click(function(){
    $('body').toggleClass('menu-open');
    $('.bar').toggleClass('animate');
  })
});