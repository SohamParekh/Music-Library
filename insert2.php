<?php
    include("connection.php");
    
    if(isset($_POST['listupdate'])){
       $sql = "update music set artist = '$_POST[listupdate]' WHERE srNo = '$_POST[taskId]'";    
    }
    
    mysqli_query($con, $sql);
    header('Location: admin.php');
?>