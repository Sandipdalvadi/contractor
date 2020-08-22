window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {

    //get the number
    // jQuery[=""]
    if (jQuery("[name='name']").val() == "" || jQuery("[name='email']").val() == "" || jQuery("[name='phone']").val() == "" || jQuery("[name='password']").val() == "" || jQuery("[name='password_confirmation']").val() == "" || jQuery("[name='password_confirmation']").val() != jQuery("[name='password']").val()) {
        if (jQuery("[name='name']").val() == "") {
            notify("Name is required", "danger", "bottom", "right")
        }
        if (jQuery("[name='email']").val() == "") {
            notify("Email is required", "danger", "bottom", "right")
        }
        if (jQuery("[name='phone']").val() == "") {
            notify("Phone is required", "danger", "bottom", "right")
        }
        if (jQuery("[name='password']").val() == "") {
            notify("Password is required", "danger", "bottom", "right");
        }
        if (jQuery("[name='password_confirmation']").val() == "") {
            notify("Confirmation password is required", "danger", "bottom", "right");
        }
        if (jQuery("[name='password_confirmation']").val() != jQuery("[name='password']").val()) {
            notify("Password and confirmation password does not match", "danger", "bottom", "right")
        }
        return false;
    }
    var number = document.getElementById('number').value;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        $('#verificationCodeModal').modal('show')

    }).catch(function(error) {
        notify(error.message, "danger", "bottom", "right")
            //   notify("Message Show", "success", "bottom", "right")
    });
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function(result) {
        $('#verificationCodeModal').modal('hide');
        registerFormSubmit()
        var user = result.user;
        console.log(user);
    }).catch(function(error) {
        alert(error.message);
    });
}

function registerFormSubmit() {
    var actionUrl = $('#register-form').attr('action');
    var home_page_link = $('#home_page_link').val();
    $.ajax({
        url: actionUrl,
        type: 'post',
        data: $("#register-form").serialize(),
        success: function(data) {
            console.log("data");
            console.log(data);
            window.location = home_page_link;
        }
    });
}