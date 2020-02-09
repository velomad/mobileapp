<?php

session_start();
include('db.php');

$query = 'SELECT * FROM projects';

$result = mysqli_query($conn, $query);

if($_SESSION['schoolid']){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="u_distribution.php">Start Distribution</a>
                </li>
                <li class="nav-item">
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



    <div class="container mt-3">

        <div class="text-center">
            <p>General Info</p>
        </div>

        <form class="distribution-form" method="POST" action="insertstudentdata.php">
            <div class="form-group row">
                <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstname" id="inputPassword" placeholder="First Name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname" id="inputPassword" placeholder="Last Name" required>
                </div>
            </div>

            <div class="text-left">
                <p>Select Gender</p>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" required>
                <label class="form-check-label" for="exampleRadios1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female" required>
                <label class="form-check-label" for="exampleRadios2">
                    Female
                </label>
            </div>


            <div class="form-group mt-3">
                <label for="exampleFormControlSelect1">Select Standard</label>
                <select class="form-control" name="selectstandard" id="exampleFormControlSelect1" required>
                    <option value="none" selected disabled hidden>Select Standard</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" name="selecthouse" id="exampleFormControlSelect1" required>
                    <option value="none" selected disabled hidden>Select House</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group row">
                <label for="inputNumber" class="col-sm-2 col-form-label">Phone No.</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="phonenumber" id="inputPassword" placeholder="Phone Number" required>
                </div>
            </div>

            <div class="text-center">
                <p>Size Info</p>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        <button class="btn btn-primary" name="submit">Submit</button>
        </form>
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