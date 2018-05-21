(function(){
  $("#sign-in").click(function(e){
    $('.red_line').html("");
    var email = $("#email").val();
    var password = $("#password").val();
    var error_message = true;
    if (email.length == 0) {
      $('#p1').text("* You email field must be reguired *");
      error_message = false;
    }
    if (password.length == 0) {
      $('#p2').text("* You password field must be reguired *");
      error_message = false;
    }
    else if(){
      $('#p2').text("* You password or email introduced incorrect *")
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
