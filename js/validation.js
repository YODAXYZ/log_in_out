// // //I chanced id inside of name (Remember this)
// // // (function() {
// // //   // $.validator.addMethod("PASSWORD",function(value,element){
// // //   //     return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/i.test(value);
// // //   // },"Passwords are 8-16 characters with uppercase letters, lowercase letters and at least one number.");
// // //   $('#form').validate({
// // //     rules: {
// // //         firstName: {
// // //             required: true,
// // //             minlength: 2
// // //
// // //         },
// // //         lastName: {
// // //             required: true,
// // //             minlength: 2
// // //         },
// // //         password: {
// // //           required: true,
// // //           minlength: 8
// // //         },
// // //         confirm_password: {
// // //           required: true,
// // //           minlength: 8,
// // //           equalTo: "password"
// // //         },
// // //         email: {
// // //           required: true,
// // //           email: true
// // //         },
// // //
// // //
// // //
// // //     },
// // //   });
// // // })();
// //
// // // (function(){
// // //
// // //   $('#register').on('click', function() {
// // //     var valid = true,
// // //         message = '';
// // //
// // //   $('form input').each(function() {
// // //     var $this = $(this);
// // //
// // //     if(!$this.val()) {
// // //         var inputName = $this.attr('name');
// // //         valid = false;
// // //         message += 'Please enter your ' + inputName + '\n';
// // //     }
// // //   });
// // //
// // //       if(!valid) {
// // //           alert(message);
// // //       }
// // // });
// // // })();
// //
// // // (function(){
// // //
// // //   var firstName = $("#firstName").val();
// // //   var lastName = $("#lastName").val();
// // //
// // //   var email = $("#email").val();
// // //   var password = $("#password").val();
// // //   var password2 = $("#confirm_password").val();
// // //
// // //   var data = [firstName, lastName, email, password, password2];
// // //
// // //   $("#register").click(function(){
// // //
// // //     var validate = true;
// // //     var message = '';
// // //
// // //     $.each(data, function(elem){
// // //       if(data[elem].length < 1){
// // //         validate = false;
// // //         message = 'Please enter text';
// // //       }
// // //     });
// // //
// // //     if(!validate){
// // //       alert(message);
// // //     }
// // //
// // //   });
// // //
// // // })();
// //
// // //Initializing Variables With Regular Expressions
// // // (function(){
// // //   var firstName = $("#firstName").val();
// // //   var lastName = $("#lastName").val();
// // //
// // //   var email = $("#email").val();
// // //   var password = $("#password").val();
// // //   var password2 = $("#confirm_password").val();
// // //
// // //   var name_regex = /^[a-zA-Z]+$/;''
// // //
// // //   $("#register").on("click",function(){
// // //     var valid = true;
// // //     var message = "";
// // //     $('form input').each(function() {
// // //       if(firstName.length < 2){
// // //         message = "dddd";
// // //         $('#p1').text(message);
// // //         valid = false;
// // //       }
// // //
// // //       if(lastName.length < 2){
// // //         message = "d2";
// // //         $('#p2').text(message);
// // //       }
// // //     }
// // //     if(firstName.length < 2){
// // //       message = "dddd";
// // //       $('#p1').text(message);
// // //       valid = false;
// // //     }
// // //     // if(firstName.length > 2){
// // //     //   remove('#p1');
// // //     // }
// // //
// // //     if(lastName.length < 2){
// // //       message = "d2";
// // //       $('#p2').text(message);
// // //     }
// // //     // if(valid){
// // //     //   message = "";
// // //     // }
// // //   });
// // // })();
// //
(function(){
    $(".form-sign").click(function(e){
      $('.red_line').html("");
      // Initializing Variables With Form Element Values
      var firstName = $('#firstName').val();
      var lastName = $("#lastName").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var password2 = $("#confirm_password").val();
      // Initializing Variables With Regular Expressions
      var name_regex = /^[a-zA-Z]+$/;
      var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
      var error_message = true;
      if(!firstName.length){
        $('#p1').text("*  You first name field in reguired *");
        error_message = false;
      }
      if (!firstName.match(name_regex)) {
        $('#p1').text("* For your first name please use alphabets only *");
        error_message = false;
      }

      if (lastName.length == 0) {
        $('#p2').text("* You last name field in reguired *");
        error_message = false;
      }
      if (!lastName.match(name_regex)){
        $('#p2').text("* For your last name please use alphabets only *");
        error_message = false;
      }

      if(!email.match(email_regex)){
        $('#p3').text("* For your email please use @ + . *");
        error_message = false;
      }

      if(password.length < 8){
        $('#p4').text("* You password must be 8 or more  *");
        error_message = false;
      }

      if(password2 != password){
        $('#p5').text("* You password must be same *");
        error_message = false;
      }
      if(error_message){
        var sendInfo = {
          lname: lastName,
          fname: firstName,
          email: email,
          password: password
      };

      $.ajax({
          type: "POST",
          url: "/registration.php",
          dataType: "json",
          success: function () {
            alert('OK');
          },
          data: sendInfo
      });
    }
    else{
      return false;
    }
  });
})();
