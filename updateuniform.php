<?php

session_start();
include('db.php');  
$schoolprofile = $_SESSION['schoolid'];
if($schoolprofile == true){

}else{
    header('Location:mobileindex.php');
}


    $id = $_GET['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $selectstandard = $_POST['selectstandard'];
    $selecthouse = $_POST['selecthouse'];
    $phonenumber = $_POST['phonenumber'];



$sql = "UPDATE studentinfo SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', selectstandard='$selectstandard', selecthouse='$selecthouse', phonenumber='$phonenumber' WHERE id =".$id;

$ans = mysqli_query($conn, $sql);


header('Location:u_issued.php');

?>