$(document).ready(function () {
  $('.title').fadeIn(3000).removeClass('hidden');
});

$(document).ready(function () {
  $('.gallery').slideUp(300).delay(800).fadeIn(3000).removeClass('hidden');
});

$(document).ready(function () {
  var scroll_pos = 0;
  $(document).scroll(function () {
    scroll_pos = $(this).scrollTop();
    if (scroll_pos > 210) {
      $("nav").css('background-color', 'blue');
    } else {
      $("nav").css('background-color', 'red');
    }
  });
});

$(document).ready(function() {
  if ($(this).scrollTop() > 0) {
  $('.nav').fadeOut();
  }
})
