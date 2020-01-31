<?php
session_start();
include('../connection.php');


$name1 = mysqli_real_escape_string($con, $_POST['user']);
$pass = $_POST['password'];
$s =  "SELECT * FROM usertable WHERE name = '$name1' && password = '$pass'";
$result = mysqli_query($con, $s);

if(mysqli_num_rows($result) > 0){
  $num = mysqli_num_rows($result);
  $_SESSION['name1'] = $name1;
  setcookie('name1', $num[name], time()+3600);
  header('location: ../index2.php');
}
else {
	
  header('location:login.php');
}

?>
