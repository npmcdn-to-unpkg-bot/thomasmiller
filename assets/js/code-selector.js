// =====================================================
// Code selector js
// =====================================================
$(function(){
  //setting up container height on page load
  var first_desc_height = $('.description').first().height();
  $("#code-container").height(first_desc_height+40);

  // when clicking on menu item
  $('#code-selector ul li').on('click', function() {
    // manage classes of menu
    $(this).siblings().removeClass('codemenu-selected');
    $(this).addClass('codemenu-selected');
    
    var number = $(this).data('code');
    // manage classes of descriptions
    $('.description').removeClass('code-selected');
    $('.description[data-code="'+number+'"]').addClass('code-selected');

    // change container height
    var desc_height = $('.description[data-code="'+number+'"]').height();
    $("#code-container").height(desc_height+40);
  });

  //MOBILE SELECT
  // when clicking on menu item
  $('#code-selector-mobile').on('change', function() {
    // manage classes of menu
    // $(this).siblings().removeClass('codemenu-selected');
    // $(this).addClass('codemenu-selected');
    
    var number = $(this).val();
    // manage classes of descriptions
    console.log(number);
    $('.description').removeClass('code-selected');
    $('.description[data-code="'+number+'"]').addClass('code-selected');

    // change container height
    var desc_height = $('.description[data-code="'+number+'"]').height();
    $("#code-container").height(desc_height+40);
  });

  //on window resize, change container height
  $(window).resize(function(event) {
    var number = $('#code-selector-mobile').val();
    var desc_height = $('.description[data-code="'+number+'"]').height();
    $("#code-container").height(desc_height+40);
  });
  
});