<?php

session_start();
include('db.php');

$id = $_GET['id'];

$sql = "SELECT * FROM studentinfo WHERE id = $id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


$sql2 = "SELECT * FROM items WHERE project_id=". $_SESSION['projectid'];
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM sizeinfo WHERE stud_id =".$id;
$result3 = mysqli_query($conn, $sql3);


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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                <li class="nav-item">
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

        <form class="distribution-form" method="POST" action="issueuniform.php">
            <div class="form-group row">
                <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputFirstName" value="<?php echo $row['firstname'] ?>" placeholder="First Name" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputLastName" value="<?php echo $row['lastname'] ?>" placeholder="Last Name" >
                </div>
            </div>


            <div class="text-left">
                <p>Select Gender</p>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="gender"  <?php if($row['gender'] == 'Male'){ ?> checked <?php } ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="gender2"   <?php if($row['gender'] == 'Female'){ ?> checked <?php } ?>>
                <label class="form-check-label" for="exampleRadios2">
                    Female
                </label>
            </div>


            <div class="form-group mt-3">
                <label for="exampleFormControlSelect1">Select Standard</label>
                <select class="form-control" id="selectStandard" >
                    <option><?php echo $row['selectstandard'] ?></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select House</label>
                <select class="form-control" id="selectHouse" >
                    <option><?php echo $row['selecthouse'] ?></option>
                    <option>Red</option>
                    <option>Green</option>
                    <option>Blue</option>
                    <option>Yellow</option>
                </select>
            </div>

            <div class="form-group row">
                <label for="inputNumber" class="col-sm-2 col-form-label">Phone No.</label>
                <div class="col-sm-10">
                    <input type="number" id="phoneNumber" class="form-control" value="<?php echo $row['phonenumber'] ?>" placeholder="Phone Number" >
                </div>
            </div>

            <div class="text-center">
                <p>Size Info</p>
            </div>

            <?php while($row = mysqli_fetch_assoc($result2)) { ?>
            <div class="card  text-dark mt-5">
                <div class="card-body">
            <div class="form-group">
                <label for="exampleFormControlSelect1"><?php echo $row['item_name'] ?> </label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option value="Select Size"><?php $row2 = mysqli_fetch_assoc($result3); echo $row2['size']; ?></option>
                    <?php for($i=1;$i<=15;$i++){ 
                       if($row['s'.$i]!=0){?>
                    <option>
                        <?php 
                            echo $row['s'.$i] ?>
                    </option>
                    <?php } 
                        } ?>
                </select>
            </div>
            
            <label for="selectquantity">Select Quantity : </label>
            <!-- <input type="number"  name="quantity" min="1" max="5" value="1" style="background-color: #ccc; border:none; text-align:center;"> -->

            <div class="contain">
<input type="text" name="qty" class="qty" maxlength="12" value="<?php echo $row2['quantity'] ?>" class="input-text qty" style="text-align:center;" />
<div class="button-container mt-2">
    <button class="cart-qty-minus" type="button" value="-" style="width:87px; ">-</button>
		<button class="cart-qty-plus" type="button" value="+" style="width:87px;">+</button>
</div>
</div>

            </div>
            </div>
            <?php } ?>
            
        <div class="btns mt-3 mb-3">
        
        <a href="updateuniform.php"><input type="button"  value="UPDATE"></a>
        <a href="issueuniform.php"><input type="button"  value="ISSUE"></a>

        </div>
        </form>
    </div>


<script>
    


var incrementPlus;
var incrementMinus;

var buttonPlus  = $(".cart-qty-plus");
var buttonMinus = $(".cart-qty-minus");

var incrementPlus = buttonPlus.click(function() {
	var $n = $(this)
		.parent(".button-container")
		.parent(".contain")
		.find(".qty");
	$n.val(Number($n.val())+1 );
});

var incrementMinus = buttonMinus.click(function() {
		var $n = $(this)
		.parent(".button-container")
		.parent(".contain")
		.find(".qty");
	var amount = Number($n.val());
	if (amount > 0) {
		$n.val(amount-1);   
	}
});
</script>

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