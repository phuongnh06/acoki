$('.slider-tick').click(function(){
    var customer = $(this).attr('slide');

    $('.slider-tick').removeClass('slider-black');
    $('.customer-detail').addClass('hide');

    $(this).addClass('slider-black');
    $('.'+customer).removeClass('hide');
});