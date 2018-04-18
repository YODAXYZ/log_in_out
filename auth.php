<?php
// Переменные с формы
$lname = $_POST['#lastName'];
$fname = $_POST['#firstName'];
$email = $_POST['#email'];
$passwd = $_POST['#password'];
// Параметры для подключения
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = "Trezvonnozvon=2015"; // Пароль БД
$db_table = "reg"; // Имя Таблицы БД

// Подключение к базе данных
$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");

// Выборка базы
mysql_select_db("mydb",$db);

// Установка кодировки соединения
mysql_query("SET NAMES 'utf8'",$db);
?>
