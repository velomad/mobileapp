<?php

session_start();
include('db.php');  

$sql = "SELECT * FROM items WHERE project_id=" .$_SESSION['projectid'];

$result = mysqli_query($conn, $sql);

$row = mysqli_num_rows($result);

$schoolprofile = $_SESSION['schoolid'];
if($schoolprofile == true){

}else{
    header('Location:mobileindex.php');
}

if(isset($_POST['submit'])){
    $id = $_POST['id']; 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $selectstandard = $_POST['selectstandard'];
    $selecthouse = $_POST['selecthouse'];
    $phonenumber = $_POST['phonenumber'];
    $row_no=$_POST['itemno'];
}


$sql2 = "INSERT INTO studentinfo (schoolid ,firstname, lastname, gender, selectstandard, selecthouse, phonenumber)
 VALUES ('{$_SESSION['projectid']}','$firstname', '$lastname', '$gender', '$selectstandard', '$selecthouse', '$phonenumber')";

mysqli_query($conn, $sql2);
    $last_id = mysqli_insert_id($conn);

for($i=1; $i<=$row_no;$i++){

    $itemname=$_POST['itemname'.$i];
    $selectsize=$_POST['selectsize'.$i];
    $quantity=$_POST['quantity'.$i];

  echo  $sql3 = "INSERT INTO sizeinfo (stud_id, item_name, size, quantity) VALUES ($last_id, '$itemname', $selectsize, $quantity) ;";
        mysqli_query($conn, $sql3);
}

header('Location:u_distribution.php');

?>

