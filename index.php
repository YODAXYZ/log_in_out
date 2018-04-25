<?php
define('ROOT', dirname(__FILE__));

$a = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$bool = true;
switch ($a) {

    case 'log_in_out.com/':
      include(ROOT . '/html/sign-up.html');
      break;

    case 'log_in_out.com/sign-in':
      if($bool){
        include(ROOT . '/html/snake.html');
        break;
      }
      else {
        include(ROOT . '/html/sign-in.html');
        break;
      }

    case 'log_in_out.com/sign-up':
      include(ROOT . '/html/sign-up.html');
      break;

    default:
      include(ROOT . '/html/error.html');
      break;
  }
?>
