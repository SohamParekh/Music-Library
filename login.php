<?php
session_start();
include('connection.php');

$uname = mysqli_real_escape_string($con, $_POST['username']);
$pwd = $_POST['password'];

$sql = "SELECT * FROM admin WHERE userName = '$uname' AND pwd = '$pwd'";



$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['uname'] = $row['userName'];
    setcookie('uname', $row[userName], time()+3600);
    header('Location: admin.php');
}
else{
    header('Location: index1.php?error=1');
}

?>