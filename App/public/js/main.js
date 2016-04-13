$('.hoverBleu').mouseenter(function(){
    $('.hoverBleu').css({
        "opacity" : "1"
    });
    $('.premierLi').css({
        "color":"white"
    });
});

$('.hoverBleu').mouseleave(function(){
    $('.hoverBleu').css({
        "opacity" : "0"
    });
    $('.premierLi').css({
        "color":"#1b87de"
    });
});


$('.fondPafBleu').mouseenter(function(){
    $('.fondPafBleu').css({
        "opacity" : "1"
    });
    $('.secondLi').css({
        "color":"white"
    });
});
$('.fondPafBleu').mouseleave(function(){
    $('.fondPafBleu').css({
        "opacity" : "0"
    });
    $('.secondLi').css({
        "color":"#1b87de"
    });
});

$('a[href^="#"]').click(function(){
    var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop:$(the_id).offset().top
    }, 'slow');
    return false;
});