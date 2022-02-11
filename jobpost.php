<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbase = "wdt092021";
//establish connection to mysql server
$conn = mysqli_connect($servername,$user,$password,$dbase);

session_start();

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $contactnumber = $_POST['contactnumber'];
    $pickuppoint = $_POST['pickuppoint'];
    $dropoffpoint = $_POST['dropoffpoint'];
    $deliverytype = $_POST['deliverytype'];
    $weight = $_POST['weight'];
    $material = $_POST['material'];
    $shippingtype = $_POST['shippingtype'];
    $paymentmethod = $_POST['paymentmethod'];
    $remark = $_POST['remark'];


    //create your insert sql
    $send = mysqli_query($conn, "INSERT INTO jobpost (fullname, contactnumber, pickup, dropoff, deliverytype, weight, material, shippingtype, paymentmethod, remark)
    VALUES ('$fullname', '$contactnumber', '$pickuppoint', '$dropoffpoint', '$deliverytype', '$weight', '$material', '$shippingtype', '$paymentmethod', '$remark')");
    mysqli_close($conn);
    header("location: checkout.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Post - Radiant</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="booking.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .heading {text-align:center;}
    </style>
</head>

<body>
<!--Header-->
<div class="content">
    <nav class="navbar navbar-expand-sm navbar-light " style="font-size: 1.3rem;">
        <div class="container-fluid ">
            <!--Icon-->
            <a href="index.php"> <img src="images/TX_CompetitiveTier_Large_24.png" class="u-logo-image u-logo-image-1" alt="Logo" width="180" height="180"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <!--Menu-->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="bookingnow.php">Booking Now&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="beourpartner.php">Be Our Partner&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact&nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <?php 
                            if (isset($_SESSION['username'])) { ?>

                            <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:#0d6efd">
                            <?php 
                            if(isset($_SESSION['username'])) {
                                echo $_SESSION['fullname'];
                            }else {
                                echo "";
                            } 
                            ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Edit Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php" style="color:#dc3545"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;LOG OUT</a></li>
                            </ul>
                            </li>
                        </ul>
                        <?php 
                            } 
                            else { ?>

                            <button onclick="location.href='login.php'" type="button" class="btn btn-primary btn-lg">Login</button>
        
                        <?php 
                        } 
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="heading">
    <h3>Job Posting</h3>
    <h4>Post A Delivery Request Here</h4>
    <br>
</div>
    <div class="">
        <form action="" method="POST" id="jobpost-form">
            <fieldset>
            <h3>Shipping Address<h3>
            <p class="boxes">
                <label for=shipper-name>Full Name</label>
                <input type="text" name="fullname" id="shipper-name" required>
            </p>
            <p class="boxes">
                <label for="contact-number">Contact Number</label>
                <input type="text" name="contactnumber" id="contact-number" required>
            </p>
            <p class="boxes">
                <label for="pickup-point">Pickup Point</label>
                <input type="text" name="pickuppoint" id="pickup-point" required>
            </p>
            <p class="boxes">
                <label for="dropoff-point">DropOff Point</label>
                <input type="text" name="dropoffpoint" id="dropoff-point" required>
            </p>
            <p class="boxes">
                <label for="delivery-type">Delivery Type</label>
                <input type="text" name="deliverytype" list="delivery-type-list" id="delivery-type" required/>
                <datalist id="delivery-type-list">
                    <option value="Light Weighted">
                    <option value="Standard">
                    <option value="Heavy Load">
                </datalist>
            </p>
            <h3>Package Details</h3>
            <p class="boxes">
                <label for="weight">Weight</label>
                <input type="text" name="weight" list="weight-list" id="weight" required="">
                <datalist id="weight-list">
                    <option value="<5kg">
                    <option value="<10kg">
                    <option value="<15kg">
                    <option value=">15kg">
                </datalist>
            </p>
            <p class="boxes">
                <label for="material">Material</label>
                <input type="text" name="material" id="material" required>
            </p>
            <p class="boxes">
                <label for="shipping-type">Shipping Type</label>
                <input type="text" name="shippingtype" list="shipping-type-list" id="shipping-type" required>
                <datalist id="shipping-type-list">
                    <option value="Standard">
                    <option value="Express">
                    <option value="Deluxe">
                </datalist>
            </p>
            <p class="boxes">
                <label for="payment-method">Payment Method</label>
                <input type="text" name="paymentmethod" list="payment-method-list" id="payment-method" required>
                <datalist id="payment-method-list">
                    <option value="Card">
                </datalist>
            </p>
            <p class="boxes">
            <label for="remark">Remark</label>
            <input type="text" id="remark" list="remark" name="remark">
            </p><br>
            <button type="submit" name="submit" class="btn" style="color:blue">Next: Payment Information &rarr;</button>
            </fieldset>
        </form>
    </div>
    <br><br>


<!-- Footer -->
<div class="p-3 mb-2 bg-light text-dark">
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
                <li class="nav-item"><a href="bookingnow.php" class="nav-link px-2 text-muted">Book Now</a></li>
                <li class="nav-item"><a href="beourpartner.php" class="nav-link px-2 text-muted">Be Our Partner</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Radiant Delivery Service, Inc</p>
    </div>
</div>
</body>
</html>