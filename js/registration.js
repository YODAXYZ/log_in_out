$(document).ready(function() {
$("#register").click(function() {
var firstName = $("#firstName").val();
var lastName = $("#lastName").val();
var email = $("#email").val();
var password = $("#password").val();
var password2 = $("#password2").val();
if (fname == '' || lastName == '' || email == '' || password == '' || cpassword == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
} else if (!(password).match(password2)) {
alert("Your passwords don't match. Try again?");
} else {
$.post("register.php", {
firstName1: firstName,
lastName1: lastName,
email1: email,
password1: password
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();//я не знаю что это
}
alert(data);
});
}
});
});
