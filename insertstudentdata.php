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

    $selectsize = $_POST['selectsize'];
    $quantity = $_POST['quantity'];



}

$sql2 = "INSERT INTO studentinfo (schoolid ,firstname, lastname, gender, selectstandard, selecthouse, phonenumber)
 VALUES ('{$_SESSION['projectid']}','$firstname', '$lastname', '$gender', '$selectstandard', '$selecthouse', '$phonenumber')";

mysqli_query($conn, $sql2);


$sqlInsert = '';
for($i = 0; $i < $row; $i++){

    while($row = mysqli_fetch_assoc($result)){
        $loopeditemname = $row['item_name'];
        foreach ($selectsize AS $key => $value ) {
    $sqlInsert .= "('{$id}','{$loopeditemname}','{$value}','{$quantity[$key]}'),";
    }
    }

}
$sqlInsert = rtrim($sqlInsert, ',');

if($sqlInsert){
$sql3 = "INSERT INTO sizeinfo (stud_id, item_name, size, quantity) VALUES {$sqlInsert} ;";
    mysqli_query($conn, $sql3);
}


// foreach ($selectsize as $key => $value) {
//     $sql3 = "INSERT INTO sizeinfo (stud_id, item_name, size, quantity) VALUES ('" 
//     . $conn->real_escape_string($id)."','"
//     . $conn->real_escape_string($loopedname)."','"
//     . $conn->real_escape_string($value)."','"
//     . $conn->real_escape_string($quantity[$key])."')";
// }

// mysqli_query($conn, $sql3);


header('Location:u_distribution.php');

?>

