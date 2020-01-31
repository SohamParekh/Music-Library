<?php
    include("connection.php");
    $sql = "DELETE from music WHERE srNo = '$_GET[taskId]'";
    mysqli_query($con, $sql);
    header('Location: admin.php');
?>