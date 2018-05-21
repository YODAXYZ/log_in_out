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
  <body class="text-center">
    <form class="form-sign" method="post" action="">
      <img class="logo" src="/pictures/logo.png">
      <h2 >Sign in to first</h1>
      <div class="form-group has-success has-feedback">
        <input type="email" class="form-control" id="email" placeholder="Enter email"><p class="red_line" id="p1"></p>
      </div>
      <div class="form-group has-success has-feedback">
        <input type="password" class="form-control" id="password" placeholder="Enter password"><p class="red_line" id="p2"></p>
      </div>
      <div class="form-control">
        <button id="sign-in"class="bm" type="submit">Sign in</button>
      </div>
    </form>
    <form action="index.php">
    <div class="form-control has-success has-feedback">
      <button type="submit" class="">Sign up</button>
    </div>
  </form>
  <script type="text/javascript" src="js/validation2.js"></script>
  </body>
</html>
