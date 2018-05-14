<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table id = "l">
      <tr class = "on">
        <th> id </th>
        <th> LastName </th>
        <th> FirstName </th>
        <th> Email </th>
      </tr>
  </body>
</html>
<style media="screen">
#l{
  border-collapse: seperate;/*смещение таблицы*/
  width: 100%;
  color: #588c7e;
  font-family: monospace;/*тип шрифта*/
  font-size: 25px;
  text-align: center;
}
td{
  border-left: 1px solid black;
  border-top: 1px solid black;
  border-bottom: 1px solid black;
}
.on{
  color: blue;
}
tr:nth-child(even){ background-color: #E6E6FA}
.sign_button{
  font-size: 40px;
  width: 100%;

}
</style>
<?php
$conn = mysqli_connect("localhost", "root", "Trezvonnozvon=2015", "reg");
if($conn -> connect_error){
  die("Connection failed: ". $conn -> connect_error);
}
$sql = "SELECT id, lname, fname, email FROM user";
$result = $conn -> query($sql);
$id = 0;
if($result-> num_rows > 0){
  while($row = $result -> fetch_assoc()){
    echo "<tr><td>".$row["id"]."</td> <td>".$row["lname"]."</td> <td>".$row["fname"]."</td> <td>".$row['email']."</td></tr>";
  }
  echo "</table>";
}
?>
<a href="http://log_in_out.com/sign-in"><button type="button" class="sign_button">Sign-in</button></a>
