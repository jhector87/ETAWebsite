$(document).ready(function () {
        $("#animate").fadeIn(3000).removeClass('hidden');
});


$(document).ready(function () {
    $('.gallery').slideUp(300).delay(800).fadeIn(3000).removeClass('hidden');
    $('.quickrequest').slideUp(300).delay(800).fadeIn(3000).removeClass('hidden');
});

$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 210) {
            $("nav").css('background-color', '#0E0829');
            $("nav").css('padding', '20px 0px 30px 10px');
        } else {
            $("nav").css('margin', '0px;');
            $("nav").css('background-color', 'transparent');
        }
    });
});

$(document).ready(function() {
    if ($(this).scrollTop() > 0) {
        $('.nav').fadeOut(1000);
    }
})