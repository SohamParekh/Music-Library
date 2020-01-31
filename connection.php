<?php

$con = mysqli_connect('localhost','root', '');
mysqli_select_db($con, 'userregistration');

if(!$con){
    echo "Cant' connect to DB: ".mysqli_error();
}

?>