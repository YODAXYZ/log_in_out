<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/my.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <title>sign in</title>
  </head>
  <body class="text-center in">
    <form class="form-sign" method="post" action="">
      <img class="logo" src="/pictures/logo.png">
      <h2 >Sign in to first</h1>
      <div class="form-group has-success has-feedback">
        <input type="email" class="form-control" id="your_email" placeholder="Enter email"><span class="red_line" id="email_error"></span>
      </div>
      <div class="form-group has-success has-feedback">
        <input type="password" class="form-control" id="your_password" placeholder="Enter password"><span class="red_line" id="password_error"></span>
      </div>
      <?php echo isset($error_data) ? $error_data : "";  ?>
      <div class="form-control" action="sign-in.php">
        <button id="sign-in"class="bm" type="submit">Sign in</button>
      </div>
    </form>
    <form class="form-href" action="signsss">
    <div class="form-control has-success has-feedback">
      <button type="submit" class="">Sign up</button>
    </div>
  </form>
  <script type="text/javascript" src="js/validation2.js"></script>
  </body>
</html>
