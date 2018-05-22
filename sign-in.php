<?php
recuired_once(db_connection.php);
// require_once("registration.php");
if ((isset($_POST['sign-in']))) {
$error_status = true;
$yourEmail = trim($_POST['your_email']);
$yourPassword = $_POST['your_password'];
$error_data = "sss";
// $find_field = $pdoConnection->query("SELECT id FROM user where email='$yourEmail' AND password='$yourPassword' limit = 1");
// if (mysql_num_rows($find_field) != 1) {
//   $error_data = "* Your password or email introduced incorrect *";
//   $error_status = false;
// }
// if($error_status){
//   // $in_site = true;
//   return header('Location: http://log_in_out.com/log');
// }
//}
$sql = "SELECT id FROM user WHERE email = '$yourEmail' and password = '$yourPassword' limit = 1";
$result = mysqli_query($pdoConnection, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

if($count != 1){
  $error_data = "* Your password or email introduced incorrect *";
  false;
}
// else {
//   echo "Ok";
// }
?>
