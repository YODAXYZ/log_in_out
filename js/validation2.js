(function(){
  $("#sign-in").click(function(e){
    $('.red_line').html("");
    var email = $("#your_email").val();
    var password = $("#your_password").val();
    var error_message = true;
    if (email.length == 0) {
      $('#email_error').text("* You email field must be reguired *");
      return false;
    }
    if (password.length == 0) {
      $('#password_error').text("* You password field must be reguired *");
      return false;
    }
    // if (error_message) {
    //   var sendInfo = {
    //     email: email,
    //     password: password
    //   };
    // }
    // $.ajax({
    //     type: "POST",
    //     url: "/sign-in.php",
    //     dataType: "json",
    //     data: sendInfo,
    //     success: function (data) {
    //       // alert('OK');
    //     }
    // });

    e.preventDefault();
  });
})();
