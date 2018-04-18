<head>
  <title>sign up</title>

 <link rel="stylesheet" href="css/bootstrap-grid.css">
 <link rel="stylesheet" href="css/bootstrap-reboot.css">
 <link rel="stylesheet" href="css/my.css">
 <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>
 <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script> -->
</head>
<body class="text-center">
  <form class="form-sign" id="form" method="post" action="#">
    <img class="logo" src="/pictures/logo.png" >

    <h2 >Please sign up</h1>
    <p id="head"></p>
    <!-- <p id="p1"></p> -->
    <div class="form-group has-success has-feedback" name="username">
      <input id="firstName" class="form-control" placeholder="Enter First name" name="first name"><p class="red_line" id="p1"></p>
    </div>
    <div class="form-group has-success has-feedback">
      <input id="lastName" class="form-control" placeholder="Enter Last name" name="last name"><p class="red_line" id="p2"></p>
    </div>

    <div class="form-group has-success has-feedback">
      <input id="email" type="text" class="form-control" placeholder="Enter email" name="email"><p class="red_line" id="p3"></p>
    </div>

    <div class="form-group has-success has-feedback">
      <input id="password" type="password" class="form-control" placeholder="Enter password" name="password"><p class="red_line" id="p4"></p>
    </div>
    <div class="form-group has-success has-feedback">
      <input  id="confirm_password" type="password" class="form-control" placeholder="Return password" name="confirm password"><p class="red_line" id="p5"></p>
    </div>

    <div class="form-control">
      <button id="register" class="bm" type="submit">Sign up</button>
    </div>
    <p id="result"></p>
  </form>

  <form class="t" action="sign-in.php" methods="post">
    <div class="form-control has-success has-feedback">
      <button type="submit" class="">Sign in</button>
    </div>
  </form>

  <script type="text/javascript" src="js/validation.js"></script>
</body>
</html>

<?php
// // Create connection with db
// $passwd = 'Trezvonnozvon=2015';
// $login = 'root';
// //
// $db = new mysqli('localhost', login, password,'reg');
// $res = $db->query('SELECT * FROM user');
// //
// var_dump($res);
// //
// // while ($data = $db ->fetch_array()){
// //   echo $data['password'];
// // }
//
// //$db = new PDO(‘mysql:host=localhost;dbname=reg’, $login, $passwd);
// //$db = new PDO("dbtype:host="localhost";dbname="reg";charset="utf8","root","Trezvonnozvon");
// //mysql_select_db("reg",$db);
// //Requests that modify the information are performed through the method: exec ()
// //Requests that get information are perform through the method: query ()
//
// //var_dump($res);
include "auth.php"; //Подключаем БД

$query = "select * from user";
$result = mysql_query($query) or die(mysql_error());
var_dump($query);
?>
