$(function(){
    
  // init controller
  var controller = new ScrollMagic.Controller();
  // var scrollElements = $('.portfolio .project, .project-desc');
  var screensLeft = $('.portfolio .project.left .container-screen');
  var screensRight = $('.portfolio .project.right .container-screen');
  var hr = $('.project-desc>hr');

  // only execute on large screens
  if (window.matchMedia('(min-width: 767px)').matches) {

    // =====================================================
    // Projects description animation
    // =====================================================
    // $(scrollElements).each(function() {
    //   // build a tween (how we want the elements to come into the view, 0.3 = duration)
    //   var tween = TweenMax.from($(this), 0.3, {autoAlpha: 0, y: '+=30', ease:Linear.easeNone});
    //   // hr tween
    //   // build a scene
    //   var scene = new ScrollMagic.Scene({
    //     triggerElement: this,
    //     offset: -300
    //   })
    //   .setTween(tween) // trigger a TweenMax.to tween
    //   .addTo(controller);
    // });
    
    // =====================================================
    // Projects Monitors animation
    // =====================================================
    $(screensLeft).each(function() {
      
      var tween = TweenMax.from($(this), 0.3, {autoAlpha: 0, x: '+=30', ease:Linear.easeNone});
      var scene = new ScrollMagic.Scene({
        triggerElement: this,
        offset: -300
      })
      .setTween(tween)
      .addTo(controller);
      
    });
    $(screensRight).each(function() {
      
      var tween = TweenMax.from($(this), 0.3, {autoAlpha: 0, x: '-=30', ease:Linear.easeNone});
      var scene = new ScrollMagic.Scene({
        triggerElement: this,
        offset: -300
      })
      .setTween(tween)
      .addTo(controller);
      
    });
  }// end of if matchmedia
  else {
    // Do nothing
  }
  
});