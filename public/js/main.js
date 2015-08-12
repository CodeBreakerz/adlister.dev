$(document).ready(function() {
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#password_confirm").val();


        if (password != confirmPassword) {
            $("#passoword").css("background", "red");
            $("#password_confirm").css("background", "red");
            $("#submit_button").attr("disabled", true);
            return false;
        } else {
            $("#passoword").css("background", "green");
            $("#password_confirm").css("background", "green");
            $("#submit_button").removeAttr("disabled");
            return true;
        }

    }

    function checkEmailMatch() {
        var email = $("#email").val();
        var confirmEmail = $("#email_confirm").val();


        if (email != confirmEmail) {
            $("#email").css("background", "red");
            $("#email_confirm").css("background", "red");
            $("#submit_button").attr("disabled", true);
            return false;
        } else {
            $("#email").css("background", "green");
            $("#email_confirm").css("background", "green");
            $("#submit_button").removeAttr("disabled");
            return true;
        }

    }

    $("input").keydown(function() {
        var password = $("#password").val();
        var confirmPassword = $("#password_confirm").val();
        if (password.length >= 6 && confirmPassword.length >= 6) {
            checkPasswordMatch();
        }
    });
});