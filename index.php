<html>
<head>
  <title>sign up</title>
 <link rel="stylesheet" href="css/bootstrap-grid.css">
 <link rel="stylesheet" href="css/bootstrap-reboot.css">
 <link rel="stylesheet" href="css/my.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body class="text-center">

  <form class="form-sign" method="post" action="">
    <img class="logo" src="/pictures/logo.png" >
    <h2 >Please sign up</h1>
    <div class="form-group has-success has-feedback">
      <input name="firstName" class="form-control" placeholder="Enter First name">
    </div>
    <div class="form-group has-success has-feedback">
      <input  name="lastName" class="form-control" placeholder="Enter Last name">
    </div>
    <div class="form-group has-success has-feedback">
      <input name="email"  type="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group has-success has-feedback">
      <input  name="password" type="password" class="form-control" placeholder="Enter password">
    </div>
    <div class="form-group has-success has-feedback">
      <input  name="password2" type="password" class="form-control" placeholder="Return password">
    </div>
    <div class="form-control">
      <button class="bm" type="submit">Sign up</button>
    </div>
  </form>
  <form class="" action="sign-in.php">
    <div class="form-control has-success has-feedback">
      <button type="submit" class="">Sign in</button>
    </div>
  </form>
</body>
</html>
<script>
    function showError(container, errorMessage) {
      container.className = 'error';
      var msgElem = document.createElement('span');
      msgElem.className = "error-message";
      msgElem.innerHTML = errorMessage;
      container.appendChild(msgElem);
    }

    function resetError(container) {
      container.className = '';
      if (container.lastChild.className == "error-message") {
        container.removeChild(container.lastChild);
      }
    }

    function validate(form) {
      var elems = form.elements;

      resetError(elems.from.parentNode);
      if (!elems.from.value) {
        showError(elems.firstName.parentNode, ' No First Name');
      }

      resetError(elems.from.parentNode);
      if (!elems.from.value) {
        showError(elems.lastName.parentNode, ' No Last Name');
      }

      resetError(elems.password.parentNode);
      if (!elems.password.value) {
        showError(elems.password.parentNode, ' No password');
      } else if (elems.password.value != elems.password2.value) {
        showError(elems.password.parentNode, ' Passwords do not match.');
      }

      resetError(elems.message.parentNode);
      if (!elems.email.value) {
        showError(elems.message.parentNode, ' No email');
      }
    }
  </script>
<?php

// Create connection with db
$passwd = "Trezvonnozvon=2015";
$login = "root";
//$db = new mysqli("localhost", login, password,"reg");
///////////////$db = new PDO(‘mysql:host=localhost;dbname=reg’, $login, $passwd);
//$db = new PDO("dbtype:host="localhost";dbname="reg";charset="utf8","root","Trezvonnozvon");
//mysql_select_db("reg",$db);
//Requests that modify the information are performed through the method: exec ()
//Requests that get information are perform through the method: query ()
//////////////$res = $db->query('SELECT * FROM users');
//var_dump($res);
?>
