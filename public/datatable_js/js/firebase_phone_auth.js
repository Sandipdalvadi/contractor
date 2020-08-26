window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
    // alert("Hello")
}

function phoneAuth() {
    var valueLength = $("#number").val().length;
    // var numberLength = jQuery('#number').value.length;
    // alert(numberLength);
    //get the number
    if (valueLength == 10) {
        var number = document.getElementById('number').value;
        number = '+91' + number;
        // firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
            //s is in lowercase
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            jQuery("#verificationCodeDiv").css("display", "block");
            jQuery(".google-captcha").css("display", "none");
            jQuery("#signin").attr("onclick", "codeverify()");
            jQuery("#signin").text("Verify code");

        }).catch(function(error) {
            notify(error.message, "danger", "bottom", "right")
                //   notify("Message Show", "success", "bottom", "right")
        });
    } else if (valueLength > 10) {
        notify("You can fill only 10 digits", "danger", "bottom", "right");
        jQuery("#verificationCodeDiv").css("display", "none");
    }
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function(result) {
        // $('#verificationCodeModal').modal('hide');
        registerFormSubmit()
        var user = result.user;
        // console.log(user);
    }).catch(function(error) {
        alert(error.message);
    });
}

function registerFormSubmit() {
    var actionUrl = $('#register-form').attr('action');
    // var home_page_link = $('#home_page_link').val();
    $.ajax({
        url: actionUrl,
        type: 'post',
        data: $("#register-form").serialize(),
        success: function(data) {
            if (data.status == 1) {
                window.location = data.redirect;
            } else if (data.status == 0) {
                notify(message, "danger", "bottom", "right")
                window.location = data.redirect;
            }
            // window.location = home_page_link;
        },
        error: function(error) {
            var returnArray = JSON.parse(error.responseText);
            var returnError = returnArray.errors;
            $.each(returnError, function(i, index) {
                notify(index[0], "danger", "bottom", "right")
            });
        }
    });
}