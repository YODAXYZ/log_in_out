<head>
  <title>sign up</title>

 <link rel="stylesheet" href="css/bootstrap-grid.css">
 <link rel="stylesheet" href="css/bootstrap-reboot.css">
 <link rel="stylesheet" href="css/my.css">
 <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>
 <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script> -->
</head>
<body class="text-center up">
  <form class="form-sign" id="form" method="post" action="">
    <img class="logo" src="/pictures/logo.png" >

    <h2 >Please sign up</h1>
    <div class="form-group has-success has-feedback" name="username">
      <input id="firstName" name="your_firstName" class="form-control" placeholder="Enter First name"><span class="red_line" id="fname_error"><?php echo isset($FNameError) ? $FNameError : ""; ?></span>
    </div>
    <div class="form-group has-success has-feedback">
      <input id="lastName" name="your_lastName" class="form-control" placeholder="Enter Last name"><span class="red_line" id="lname_error"><?php echo isset($LNameError) ? $LNameError : ""; ?></span>
    </div>

    <div class="form-group has-success has-feedback">
      <input id="email" type="text" name="your_email" class="form-control" placeholder="Enter email"><span class="red_line" id="email_error"><?php echo isset($emailError) ? $emailError : ""; ?></span>
    </div>

    <div class="form-group has-success has-feedback">
      <input id="password" type="password" name="your_password" class="form-control" placeholder="Enter password"><span class="red_line" id="password_error"><?php echo isset($passwordError) ? $passwordError : ""; ?></span>
    </div>
    <div class="form-group has-success has-feedback">
      <input  id="confirm_password"  name="confirm_your_password" type="password" class="form-control" placeholder="Return password"><span class="red_line" id="conf_password_error"> <?php echo isset($passwordConfError) ? $passwordConfError : ""; ?></span>
    </div>
    <div class="form-control" action="reg_ok">

      <button id="register" name="sign-up" class="bm" type="submit">Sign up</button>
    </div>
    <p id="result"></p>
  </form>

  <form class="form-href" action="sign-in" methods="post">
    <div class="form-control has-success has-feedback">
      <button type="submit" class="">Sign in</button>
    </div>
  </form>

  <script type="text/javascript" src="js/validation.js"></script>
</body>
</html>
