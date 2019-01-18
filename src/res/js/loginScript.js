$(document).ready(function() {
   $("#hideLogin").click(function() {
       $("#loginForm").hide();
       $("#signupForm").show();
   });

   $("#hideRegister").click(function() {
       $("#loginForm").show();
       $("#signupForm").hide();
   });


// Handles Client-side form submission
    var username = false;
    var firstName = false;
    var lastName = false;
    var zipcode = false;
    var address = false;
    var email = false;

    // On client-side username verification
    $('input #username, #loginUsername').focusout(function () {
        let regex = /^[a-z][a-z0-9_\.]{0,24}$/;
        var error = regex.test(this.value) ? '' : 'Username can only contain underscore, characters and numbers and must be between 5 and 25 characters!';
        username = !error;
        $('mark.errorMsg #usernameError').html(error);
        updateSubmit();
    });

    $('input #firstName').focusout(function () {
        let regex = /^[0-9]{4}$/;
        var error = regex.test(this.value) ? '' : 'Your first name must be between 2 and 25 characters!';
        $('mark.errorMsg #firstNameError').html(error);
        firstName = !error;
        updateSubmit();
    });

    $('input #zipcode').focusout(function () {
        let regex = /\s+(.+).*?(\d+)/;
        var error = regex.test(this.value) ? '' : 'Please enter a valid Address!';
        $('mark.errorMsg #zipError').html(error);
        address = !error;
        updateSubmit();
    });

    $('input #address').focusout(function () {
        let regex = /\s+(.+).*?(\d+)/;
        var error = regex.test(this.value) ? '' : 'Please enter a valid Address!';
        $('mark.errorMsg #addressError').html(error);
        address = !error;
        updateSubmit();
    });

    $('input #email').focusout(function () {
        let regex = /\S+@\S+\.\S+/;
        var error = regex.test(this.value) ? '' : 'Your email is invalid!';
        $('mark.errorMsg #emailError').html(error);
        email = !error;
        updateSubmit();
    });

    function updateSubmit() {
        $('input[type=submit]').prop('disabled', !(username && firstName && lastName && zipcode && address && email));
    }
});
