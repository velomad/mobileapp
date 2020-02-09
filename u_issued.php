<?php

session_start();
include('db.php');

$query = 'SELECT * FROM projects';
$sql = 'SELECT * FROM studentinfo';

$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $sql);


if($_SESSION['schoolid']){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uniform Issued</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mobilestyle.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="mobiledashboard.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="u_distribution.php">Start Distribution</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="u_issued.php">Issued Uniform</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="u_distributed.php">Distributed Uniform</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mobilelogout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">


        <div class="text-left mt-3">
            <input class="form-control mr-sm-2" type="search" placeholder="Name" aria-label="Search">
            <button class="btn btn-outline-success  my-2 my-sm-2 " type="submit">Search Student</button>
        </div>
        <?php
        if(mysqli_num_rows($result2) > 0){
            while($row = mysqli_fetch_assoc($result2)){
            ?>
        <a class="student-card" href="student_info.php">
            <div class="card mt-3">
                <div class="card-header">
                    <p>Name : <?php echo $row['firstname']; echo $row['lastname']; ?></p>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>Phone No : <?php echo $row['phonenumber'] ?></p>
                    </blockquote>
                </div>
            </div>
        </a>
        <?php } 
                }
               else{
                   echo "0 result";
               }     
            ?>
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="jquery-3.4.1.min.js"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>


</body>

</html>
<?php
}else{
header('location:mobilelogout.php');
}

?>