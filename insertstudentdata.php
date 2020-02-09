<?php

session_start();
include('db.php');
$schoolprofile = $_SESSION['schoolid'];
if($schoolprofile == true){

}else{
    header('Location:mobileindex.php');
}

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $selectstandard = $_POST['selectstandard'];
    $selecthouse = $_POST['selecthouse'];
    $phonenumber = $_POST['phonenumber'];
}

$sql = "INSERT INTO studentinfo (firstname, lastname, gender, selectstandard, selecthouse, phonenumber)
 VALUES ('$firstname', '$lastname', '$gender', '$selectstandard', '$selecthouse', '$phonenumber')";

mysqli_query($conn, $sql);

header('Location:u_distribution.php');

?>

