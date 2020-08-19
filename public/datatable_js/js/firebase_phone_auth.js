window.onload=function () {
    render();
  };
  function render() {
      window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
      recaptchaVerifier.render();
  }
  function phoneAuth() {
      //get the number
      var number=document.getElementById('number').value;
      //phone number authentication function of firebase
      //it takes two parameter first one is number,,,second one is recaptcha
      firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
          //s is in lowercase
          window.confirmationResult=confirmationResult;
          coderesult=confirmationResult;
        //   console.log(coderesult);
        //   alert("Message sent");
        $('#verificationCodeModal').modal('show')

      }).catch(function (error) {
          alert(error.message);
      });
  }
  function codeverify() {
      var code=document.getElementById('verificationCode').value;
      coderesult.confirm(code).then(function (result) {
          $('#verificationCodeModal').modal('hide');
          // $( "#register-form" ).submit();
          registerFormSubmit()
          // $("form").submit(function(){
              //     alert("Submitted");
              // });
              var user=result.user;
              console.log(user);
            }).catch(function (error) {
                alert(error.message);
            });
        }
        
function registerFormSubmit(){
    // $("form").first().submit();
            //   alert("Successfully registered");
    // $( "#register-form" ).submit();
    var actionUrl = $('#register-form').attr('action');
    var home_page_link = $('#home_page_link').val();
    $.ajax({
        url: actionUrl,
        type: 'post',
        // dataType: 'application/json',
        data: $("#register-form").serialize(),
        success: function(data) {
            // alert(home_page_link);
            console.log("data");
            console.log(data);
            window.location=home_page_link;
            // location.reload();

            // ... do something with the data...
            }
    });
  }