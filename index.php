<?php
require_once("registration.php");
define('ROOT', dirname(__FILE__));

$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$in_site = false;
switch ($url) {
    case 'log_in_out.com/':
      include(ROOT . '/html/sign-up.php');
      break;

    case 'log_in_out.com/sign':
      // include(ROOT . '/registration.php');
      break;
    case 'log_in_out.com/you_welcome':
      include(ROOT . '/html/you_welcome.html');
      break;

    case 'log_in_out.com/sign-in':
      if($in_site){
        include(ROOT . '/html/snake.php');
        break;
      }
      else {
        include(ROOT . '/html/sign-in.php');
        break;
      }

    case 'log_in_out.com/sign-up':
      include(ROOT . '/html/sign-up.php');
      break;
    case 'log_in_out.com/reg_ok':
      include(ROOT . '/html/user.php');
      break;

    default:
      include(ROOT . '/html/404.html');
      break;
  }
?>
