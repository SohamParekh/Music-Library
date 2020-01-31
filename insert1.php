<?php

$fileName = $_FILES['fileupload']['name'];
$tmpName =  $_FILES['fileupload']['tmp_name'];
$fileName1 = $_FILES['songupload']['name'];
$tmpName1 =  $_FILES['songupload']['tmp_name'];
include('connection.php');

$name = $_POST['sname'];

$art = $_POST['sartist'];
$sql = "INSERT INTO music(name, image, song, artist) VALUES('$name', '$fileName', '$fileName1',  '$art')";

mysqli_query($con, $sql);

move_uploaded_file($tmpName, "simage/".$fileName);
move_uploaded_file($tmpName1, "songs/".$fileName1);

header('Location: admin.php');
?>