<?php
 if (isset($_POST['email'])){//заносим введенный пользователем логин в переменную $login
   $email = $_POST['email'];
 }
 if (isset($_POST['password'])){
   $password = $_POST['password'];
 }
 if (isset($_POST['l.n'])){
   $ln = $_POST['l.n'];
 }
 if (isset($_POST['f.n'])){
   $fn = $_POST['f.n'];
 }
 if (empty($email) || empty($password) || empty($ln) || empty($fn)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
   {
    echo "string";("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
   }
    include ("index.php");//Надо ???
    if(empty(mysql_query('SELECT * FROM users email='$email'')));
    {
      echo "The login you entered already exists";
    }
    if(strlen($password) < 6)

    {
      echo "passwort < 6 values";
    }
    $result2 = mysql_query ("INSERT INTO users (lname,fname,email,password) VALUES('$ln','$fn','$email','$password')");
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
    // if(error)
    // $d= 'значение'ж
    // html:5 value in class="<?php $d ?>"
?>
