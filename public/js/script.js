$(document).ready(function(){
    setInterval(slideAnimationChange, 0);
    setInterval(slideChangeImage, 3000);
    center();
    $(".menu-block-body").niceScroll({horizrailenabled:false});

    var buy = $('.buy');
    var pg = $('.pg');
    var work = $('.work');
    var talk = $('.talk');
    var ship = $('.ship');
    var online = $('.online');

    $('input[name=name]').change(function(){
        $('input[name=title]').val($('input[name=name]').val())
    });

    $('textarea[name=content]').change(function(){
        $('textarea[name=description]').val($('textarea[name=content]').val())
    });

    $('select[name=type]').change(function(){
        var typeWork = $('select[name=type]').val();
        console.log(typeWork);
        if(typeWork == 1) {
            buy.css('display', 'none');
            pg.css('display', 'none');
            work.css('display', 'none');
            talk.css('display', 'none');
            online.css('display', 'none');
            ship.css('display', 'block');
        } else if (typeWork == 2) {
            pg.css('display', 'none');
            work.css('display', 'none');
            talk.css('display', 'none');
            ship.css('display', 'none');
            online.css('display', 'none');
            buy.css('display', 'block');
        } else if (typeWork == 3) {
            buy.css('display', 'none');
            work.css('display', 'none');
            talk.css('display', 'none');
            ship.css('display', 'none');
            online.css('display', 'none');
            pg.css('display', 'block');
        } else if (typeWork == 4) {
            buy.css('display', 'none');
            pg.css('display', 'none');
            work.css('display', 'none');
            ship.css('display', 'none');
            online.css('display', 'none');
            talk.css('display', 'block');
        } else if (typeWork == 5) {
            buy.css('display', 'none');
            pg.css('display', 'none');
            talk.css('display', 'none');
            ship.css('display', 'none');
            online.css('display', 'none');
            work.css('display', 'block');
        } else if (typeWork == 6) {
            buy.css('display', 'none');
            pg.css('display', 'none');
            talk.css('display', 'none');
            ship.css('display', 'none');
            work.css('display', 'none');
            online.css('display', 'block');
        }
    });
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