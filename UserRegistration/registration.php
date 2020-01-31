<?php

session_start();

$con = mysqli_connect('localhost','root', '');
mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$email1 = $_POST['email'];
$num = $_POST['number'];
$s =  "select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
  echo "Username already taken";
}
else {
  $reg = " insert into usertable(name , password , email , number) value ('$name','$pass','$email1','$num') ";
  mysqli_query($con,$reg);
  header("Location: login.php");
  echo 'alert(Registration Successful)';
}

?>
