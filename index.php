<html>
<head>
  <title>sign up</title>
 <link rel="stylesheet" href="css/bootstrap-grid.css">
 <link rel="stylesheet" href="css/bootstrap-reboot.css">
 <link rel="stylesheet" href="css/my.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script type="text/javascript" src="js/registration.js"></script>
</head>
<body class="text-center">
  <form class="form-sign" method="post" action="">
    <img class="logo" src="/pictures/logo.png" >
    <h2 >Please sign up</h1>
    <div class="form-group has-success has-feedback">
      <input id="firstName" class="form-control" placeholder="Enter First name">
    </div>
    <div class="form-group has-success has-feedback">
      <input  id="lastName" class="form-control" placeholder="Enter Last name">
    </div>
    <div class="form-group has-success has-feedback">
      <input id="email"  type="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group has-success has-feedback">
      <input  id="password" type="password" class="form-control" placeholder="Enter password">
    </div>
    <div class="form-group has-success has-feedback">
      <input  id="password2" type="password" class="form-control" placeholder="Return password">
    </div>
    <div class="form-control">
      <button id="register" class="bm" type="submit">Sign up</button>
    </div>
  </form>
  <form class="t" action="sign-in.php">
    <div class="form-control has-success has-feedback">
      <button type="submit" class="">Sign in</button>
    </div>
  </form>
</body>
</html>

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
