<?php
// require_once("db_connection.php");
if((isset($_POST['sign-up'])))
{
  try {
    $pdoConnection = new PDO("mysql:host=localhost; dbname=reg", "root", "Trezvonnozvon=2015");
  } catch (PDOException $exc) {
      echo $exc->getMessage();
      exit();
  }
  $FNameError = $LNameError = $emailError = $passwordError = $passwordConfError = "";
  $error_status = true;
  $yourFName = trim($_POST['your_firstName']);//trim() - delete space with begin str and end str
  $yourLName = trim($_POST['your_lastName']);
  $yourEmail = trim($_POST['your_email']);
  $yourPassword = $_POST['your_password'];
  $yourPasswordConf = $_POST['confirm_your_password'];

  if(strlen($yourFName) < 2 ){
    $FNameError = "Your field first name must be more 2.";
    $error_status = false;
    return false;
  }
  if(strlen($yourLName) < 2){
    $LNameError = " Your field first name must be more 2.";
    $error_status = false;
  }
  if(!filter_var($yourEmail, FILTER_VALIDATE_EMAIL)){
    $emailError = " Your field email incorrect.";
    $error_status = false;
  }
  if(strlen($yourPassword) < 8){
    $passwordError  = " Your field password must be more 7.";
    $error_status = false;
  }
  if($yourPasswordConf=!$yourPassword){
    $passwordConfError = " Your password must be same.";
    $error_status = false;
  }
  if($error_status){
    $pdoQuery = "INSERT INTO `user`(`lname`, `fname`, `email`, `password`) VALUES (:lname,:fname,:email,:password)";

    $pdoResult = $pdoConnection->prepare($pdoQuery);

    $pdoExec = $pdoResult->execute(array(":fname"=>$yourFName, ":lname"=>$yourLName, ":email"=>$yourEmail, ":password"=>$yourPassword));

    include "html/you_welcome.html";
  }
  else {
     return false;
  }
}
?>
