$(document).ready(function() {
    
    $("input").keydown(function() {
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();
        if (password.length >= 6 && confirmPassword.length >= 6) {
            checkPasswordMatch();
        }
            console.log(password.length);
            console.log(confirmPassword.length);
    })

    function checkEmailMatch() {
        var email = $("#email").val();
        var confirmEmail = $("#email_confirm").val();


        if (email != confirmEmail) {
            $("#email").css("background", "red");
            $("#email_confirm").css("background", "red");
        } else {
            $("#email").css("background", "green");
            $("#email_confirm").css("background", "green");
        }

    }

    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#password_confirm").val();


        if (password != confirmPassword) {
            $("#password").css("background", "red");
            $("#password_confirm").css("background", "red");
        } else {
            $("#password").css("background", "green");
            $("#password_confirm").css("background", "green");
        }

    }

    function enableSubmitButton () {
        var email = $("#email").val();
        var confirmEmail = $("#email_confirm").val();

        var password = $("#password").val();
        var confirmPassword = $("#password_confirm").val();

        if ((email == confirmEmail) && (password == confirmPassword)) {
            $('#submit_button').removeAttr("disabled");
        }
    };

});