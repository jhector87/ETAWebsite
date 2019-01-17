$(document).ready(function() {
   $("#hideLogin").click(function() {
       $("#loginForm").hide();
       $("#signupForm").show();
   });

   $("#hideRegister").click(function() {
       $("#loginForm").show();
       $("#signupForm").hide();
   });
});

$(function () {
    var username = false;
    var firstName = false;
    var lastName = false;
    var address = false;
    var email = false;
    var comment = false;


    $('#username input').focusout(function () {
        let regex = /^[A-Za-z\d_-]+$/;
        var error = regex.test(this.value) ? '' : 'Username can contain only underscore, characters and numbers!';
        $('mark.errorMsg #usernameError').html(error);
        username = !error;
        updateSubmit();
    });

    $('#firstName input').focusout(function () {
        let regex = /^[A-Z|a-z]/;
        var error = regex.test(this.value) ? '' : 'Your first name must be between 2 and 25 characters!';
        $('mark.errorMsg #firstNameError').html(error);
        firstName = !error;
        updateSubmit();
    });

    $('#lastName input').focusout(function () {
        let regex = /^[A-Z|a-z]/;
        var error = regex.test(this.value) ? '' : 'Your Last name must be between 2 and 25 characters!';
        $('mark.errorMsg #lastNameError').html(error);
        lastName = !error;
        updateSubmit();
    });

    $('#address input').focusout(function () {
        let regex = /\s+(.+).*?(\d+)/;
        var error = regex.test(this.value) ? '' : 'Please enter a valid Address!';
        $('mark.errorMsg #addressError').html(error);
        address = !error;
        updateSubmit();
    });

    $('#email input').focusout(function () {
        let regex = /\S+@\S+\.\S+/;
        var error = regex.test(this.value) ? '' : 'Your email is invalid!';
        $('mark.errorMsg #emailError').html(error);
        email = !error;
        updateSubmit();
    });

    $('#comment input').focusout(function () {
        let regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var error = regex.test(this.value) ? '' : 'Your comment seems to contain faul language!';
        $('mark .errorMsg #commentError').html(error);
        comment = !error;
        updateSubmit();
    });

    function updateSubmit() {
        $('input[type=submit]').prop('disabled', !(firstName && lastName && username && address && email && comment))
    }

});