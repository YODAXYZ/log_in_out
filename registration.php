<?php
  $error_status = true;
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

  $yourFName = trim($_POST['your_firstName']);//trim() - delete space with begin str and end str
  $yourLName = trim($_POST['your_lastName']);
  $yourEmail = trim($_POST['your_email']);
  $yourPassword = $_POST['your_password'];
  $yourPasswordConf = $_POST['confirm_your_password'];

  if(strlen($yourFName) < 1 ){
    $FNameError = "* You first name field in reguired *";
    $error_status = false;
  }
  if(strlen($yourLName) < 1){
    $LNameError = "* You last name field in reguired *";
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
  // $conn = mysqli_connect("localhost", "root", "Trezvonnozvon=2015", "reg");
  // $select = "SELECT * FROM 'user' WHERE `email` = '$yourEmail'";
  // $result = $conn -> query($select);
  // if($result -> num_rows > 0) {
  //     $emailError = '* This email is already being used *';
  //     $error_status = false;
  // }
  if($yourPasswordConf=!$yourPassword){
    $passwordConfError = " Your password must be same.";
    $error_status = false;
  }
  if($error_status){
    $pdoQuery = "INSERT INTO `user`(`lname`, `fname`, `email`, `password`) VALUES (:lname,:fname,:email,:password)";

    $pdoResult = $pdoConnection->prepare($pdoQuery);

    $pdoExec = $pdoResult->execute(array(":fname"=>$yourFName, ":lname"=>$yourLName, ":email"=>$yourEmail, ":password"=>$yourPassword));

    // include "html/you_welcome.html";
  }
  // else {
  //    return false;
  // }
}
?>
