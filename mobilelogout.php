<?php
 session_start();
unset($_SESSION['schoolid']);
session_destroy($_SESSION['schoolid']); 
header('Location:mobileindex.php')
?>
