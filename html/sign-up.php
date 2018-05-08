<head>
  <title>sign up</title>

 <link rel="stylesheet" href="css/bootstrap-grid.css">
 <link rel="stylesheet" href="css/bootstrap-reboot.css">
 <link rel="stylesheet" href="css/my.css">
 <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>
 <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script> -->
</head>
<body class="text-center">
  <form class="form-sign" id="form" method="post" action="">
    <img class="logo" src="/pictures/logo.png" >

    <h2 >Please sign up</h1>
    <p id="head"></p>
    <!-- <p id="p1"></p> -->
    <div class="form-group has-success has-feedback" name="username">
      <input id="firstName" name="your_firstName" class="form-control" placeholder="Enter First name"><p class="red_line" id="p1"><?php echo isset($FNameError) ? $FNameError : ""; ?></p>
    </div>
    <div class="form-group has-success has-feedback">
      <input id="lastName" name="your_lastName" class="form-control" placeholder="Enter Last name"><p class="red_line" id="p2"><?php echo isset($LNameError) ? $LNameError : ""; ?></p>
    </div>

    <div class="form-group has-success has-feedback">
      <input id="email" type="text" name="your_email" class="form-control" placeholder="Enter email"><p class="red_line" id="p3"><?php echo isset($emailError) ? $emailError : ""; ?></p>
    </div>

    <div class="form-group has-success has-feedback">
      <input id="password" type="password" name="your_password" class="form-control" placeholder="Enter password"><p class="red_line" id="p4"><?php echo isset($passwordError) ? $passwordError : ""; ?></p>
    </div>
    <div class="form-group has-success has-feedback">
      <input  id="confirm_password"  name="confirm_your_password" type="password" class="form-control" placeholder="Return password"><p class="red_line" id="p5"> <?php echo isset($passwordConfError) ? $passwordConfError : ""; ?></p>
    </div>

    <div class="form-control" action="">
      <button id="register" name="sign-up" class="bm" type="submit">Sign up</button>
    </div>
    <p id="result"></p>
  </form>

  <form class="t" action="sign-in" methods="post">
    <div class="form-control has-success has-feedback">
      <button type="submit" class="">Sign in</button>
    </div>
  </form>

  <script type="text/javascript" src="js/validation.js"></script>
</body>
</html>
