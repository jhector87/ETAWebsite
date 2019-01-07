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
            $("nav").css('padding', '10px 0px 50px 10px');
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

function requestSubmission() {
    var currentTime = new Date();
    alert('Your request was successfully received. One of our agents will be in contact with you within the next 24 hours.');
    document.cookie = 'email=' + $('input').val() + '; expires=' + (currentTime.getSeconds()+ 59);
    document.cookie = 'message=' + document.getElementById('email').valueOf() + '; expires=' + (currentTime.getSeconds()+ 59);

    $.post("../includes/handlers/mail/mail_handler.php");
    window.location.replace('index.php?id=home&lang=en');
}