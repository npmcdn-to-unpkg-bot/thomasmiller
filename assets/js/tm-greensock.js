// =====================================================
// Top animations
// =====================================================
(function($){
  
  // Landing page
  var heyname = $('.home .top>h1, .home .top>h3')
  var build = $('.home .top>h6');

  TweenMax.from(heyname, 1, {opacity: 0});
  TweenMax.from(build, 1, {opacity: 0, x: -50});

})(jQuery);
