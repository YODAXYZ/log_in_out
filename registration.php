<?php
$error_status = true;
require_once("db_connection.php");
if ((isset($_POST['sign-up']))) {
    $FNameError = $LNameError = $emailError = $passwordError = $passwordConfError = "";

    $yourFName = trim($_POST['your_firstName']);//trim() - delete space with begin str and end str
    $yourLName = trim($_POST['your_lastName']);
    $yourEmail = trim($_POST['your_email']);
    $yourPassword = $_POST['your_password'];
    $yourPasswordConf = $_POST['confirm_your_password'];

    if (strlen($yourFName) < 1) {
        $FNameError = "* You first name field in reguired *";
        $error_status = false;
    }
    if (strlen($yourLName) < 1) {
        $LNameError = "* You last name field in reguired *";
        $error_status = false;
    }
    if (!filter_var($yourEmail, FILTER_VALIDATE_EMAIL)) {
        $emailError = "* For your email please use @ + . *";
        $error_status = false;
    }
    if (strlen($yourPassword) < 8) {
        $passwordError = "* You password must be 8 or more  *";
        $error_status = false;
    }

    // $sth = $pdoConnection->query("SELECT id FROM user where email='$yourEmail' ");
    // $lol = $sth->rowCount();
    // var_dump($lol);
    // if ($lol > 0) {
    //     $emailError = '* This email is already being used *';
    //     $error_status = false;
    // }

    // try {
    //   $sth = $pdoConnection->query("INSERT email FROM user where email='$yourEmail' ");
    //   $stmt = $pdoConnection->prepare("INSERT INTO user (email) VALUES (:email)");
    //   $stmt->bindParam(':email', $yourEmail);
    // }
    // catch (\PDOException $e) {
    //     if ($e->errorInfo[1] == 1062) {
    //       $error_status = false;
    //       $emailError = '* This email is already being used *';
    //     }
    // }

    // $stmt = $pdoConnection->prepare("INSERT INTO user (email) VALUES (:email)");
    // $stmt->bindParam(':email', $yourEmail);
    // if (mysql_errno() == 1062) {
    //   $error_status = false;
    //   $emailError = '* This email is already being used *';
    // }




    // if(mysqli_error($sth)){
    //   $error_status = false;
    //   $emailError = '* This email is already being used *';
    // }

    if ($yourPasswordConf = !$yourPassword) {
        $passwordConfError = "* Your password must be same *";
        $error_status = false;
    }
    if ($error_status) {
        $pdoQuery = "INSERT INTO `user`(`lname`, `fname`, `email`, `password`) VALUES (:lname,:fname,:email,:password)";

        $pdoResult = $pdoConnection->prepare($pdoQuery);

        $pdoExec = $pdoResult->execute(array(":fname" => $yourFName, ":lname" => $yourLName, ":email" => $yourEmail, ":password" => $yourPassword));

        return header('Location: http://log_in_out.com/you_welcome');//redirect
    }
    // else {
    //    return false;
    // }
}
?>
