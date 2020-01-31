<?php
session_start();
session_destroy();
setcookie('name1', '', time()-3600);
header('Location: index.php');
?>