$(window).scroll(function(){

    var wScroll = $(this).scrollTop();
    console.log(wScroll)

    $('.img2').css({
        'transform' : 'translate(0px, '+ wScroll /15 +'%)'
    });

    $('.img3').css({
        'transform' : 'translate(0px, '+ wScroll /17 +'%)'
    });

    $('.img4').css({
        'transform' : 'translate(0px, '+ wScroll /15 +'%)'
    });

    $('.img5').css({
        'transform' : 'translate(0px, '+ wScroll /17 +'%)'
    });

    $('.img6').css({
        'transform' : 'translate(0px, '+ wScroll /20 +'%)'
    });
    $('.img7').css({
        'transform' : 'translate(0px, '+ wScroll /40 +'%)'
    });

    $('.img8').css({
        'transform' : 'translate(0px, '+ wScroll /100 +'%)'
    });

    $('.img9').css({
        'transform' : 'translate(0px, -'+ wScroll /70 +'%)'
    });


});
