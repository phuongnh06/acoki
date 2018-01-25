$(document).ready(function(){
    setInterval(slideAnimationChange, 0);
    setInterval(slideChangeImage, 3000);
    center();
    $(".menu-block-body").niceScroll({horizrailenabled:false});
});

$('.slider-tick').click(function(){
    var customer = $(this).attr('slide');

    $('.slider-tick').removeClass('slider-black');
    $('.customer-detail').addClass('hide');

    $(this).addClass('slider-black');
    $('.'+customer).removeClass('hide');
});

$(window).resize(function(){
    center();
});

function center(){
    var screen = $('.screen-mobile');

    if($(window).width() < 1200) {
        screen.css('left', ($(window).width()-screen.width())/2);
    } else {
        screen.css('left', 'auto');
    }
}

function slideChangeImage() {
    var scr1 = $('.screen1');
    var scr2 = $('.screen2');
    var scr3 = $('.screen3');
    var scr4 = $('.screen4');
    var scr5 = $('.screen5');
    var scr6 = $('.screen6');

    var img1 = scr1.attr('src');
    var img2 = scr2.attr('src');
    var img3 = scr3.attr('src');
    var img4 = scr4.attr('src');
    var img5 = scr5.attr('src');

    scr1.removeClass('screen1').addClass('screen2');
    scr4.removeClass('screen4').addClass('screen1');
    scr5.removeClass('screen5').addClass('screen4');
    scr2.removeClass('screen2').addClass('screen3');
    scr3.removeClass('screen3').addClass('screen6').attr('src', img2);
    scr6.removeClass('screen6').addClass('screen5');
}

function slideAnimationChange() {
    var scr1 = $('.screen1');
    var scr2 = $('.screen2');
    var scr3 = $('.screen3');
    var scr4 = $('.screen4');
    var scr5 = $('.screen5');
    var scr6 = $('.screen6');

    scr1.css('animation', 'move1 1s infinite').css('animation-delay', '2s');
    scr2.css('animation', 'move2 1s infinite').css('animation-delay', '2s');
    scr3.css('animation', 'move3 1s infinite').css('animation-delay', '2s');
    scr4.css('animation', 'move4 1s infinite').css('animation-delay', '2s');
    scr5.css('animation', 'move5 1s infinite').css('animation-delay', '2s');
    scr6.css('animation', 'move6 1s infinite').css('animation-delay', '2s');
}