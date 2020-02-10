<?php 

session_start();
include("db.php");  

if(isset($_POST['submit'])){
    $schoolId = $_POST['schoolid'];
    $schoolPass = $_POST['schoolpass'];
    

    $query = "SELECT * FROM PROJECTS WHERE school_id = '$schoolId' && school_password = '$schoolPass' ";

    $result = mysqli_query($conn, $query);
    
    $num = mysqli_fetch_assoc($result);

    if($num > 0){
        $_SESSION['schoolid'] = $schoolId;
        $_SESSION['projectid'] = $num['id'];
    
        header('Location:mobiledashboard.php');
    }else{
        header('location:mobileindex.php');
    }
}

?>