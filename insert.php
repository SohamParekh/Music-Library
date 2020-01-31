<?php

include('connection.php');
$name = $_POST['fname'];
$mess = $_POST['message'];
$sql = "INSERT INTO feedback(name, message) VALUES('$name','$mess')";

mysqli_query($con, $sql);

header('Location: index.php');
?>