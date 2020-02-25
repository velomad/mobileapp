<?php

session_start();
include('db.php');  
$schoolprofile = $_SESSION['schoolid'];
if($schoolprofile == true){

}else{
    header('Location:mobileindex.php');
}

echo "issued";
exit;

header('Location:u_distributed.php');

?>