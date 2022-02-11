<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbase = "wdt092021";
//establish connection to mysql server
$conn = mysqli_connect($servername,$user,$password,$dbase);

session_start();
if(!isset($_SESSION['username'])){
    $message = '-- Sorry You Are Not Allowed to Access This Page --\nTo access this page, you must be logged in.\nPlease try again after you LOG IN.';
    echo "<SCRIPT> 
            alert('$message')
            window.location.replace('login.php');
        </SCRIPT>";
        mysql_close();
}

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $suite = $_POST['suite'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $state = $_POST['state'];
    $weight = $_POST['weight'];
    $material = $_POST['material'];
    $shippingtype = $_POST['shippingtype'];
    $paymethod = $_POST['paymethod'];
    $remark = $_POST['remark'];

    //create your insert sql
    $send = mysqli_query($conn, "INSERT INTO domesticshipping (fname, lname, address, suite, city, zip, state, weight, material, shippingtype, paymethod, remark)
    VALUES ('$fname', '$lname', '$address', '$suite', '$city', '$zip','$state', '$weight', '$material', '$shippingtype', '$paymethod', '$remark')");
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
    <title>Domestic Shipping - Radiant</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="booking.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<br><br>

<!-- Air Freight Booking-->

<div class="container border">
    <br>
    <p style="font-size: 1.2rem;">Try Our New Feature Now. It Is More CONVENIENT.</p>
    <a href="domesticshipping.php#skip" style="font-size: 1.3rem;"><b>Job Post</b></a>
    <form action="" method="POST" id="address-form">
        <fieldset>
            <h3>Shipping Address</h3>
            <p class="boxes">
                <label for="shipping-first-name">First Name</label>
                <input type="text" name="fname" id="shipping-first-name" required/>
            </p>
            <p class="boxes">
                <label for="shipping-last-name">Last Name</label>
                <input type="text" name="lname" id="shipping-last-name" required/>
            </p>
            <p class="boxes">
                <label for="shipping-street-address">Street Address</label>
                <input type="text" name="address" id="shipping-street-address" required/>
            </p>
            <p class="boxes">
                <label for="shipping-apt-address">Apt/Suite</label>
                <input type="text" name="suite" id="shipping-apt-address">
            </p>
            <p class="boxes">
                <label for="shipping-city">City</label>
                <input type="text" name="city" id="shipping-city" required/>
            </p>
            <p class="boxes">
                <label for="shipping-postal-code">Zip/Postal Code</label>
                <input type="text" name="zip" id="shipping-postal-code" required/>
            </p>
            <p class="boxes">
                <label for="shipping-state">State</label>
                <input type="text" id="shipping-state" list="shipping-state-list" name="state" required/>
                <datalist id="shipping-state-list">
                    <option value="Johor">Johor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Labuan">Labuan</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Penang">Penang</option>
                    <option value="Perak">Perak</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Putrajaya">Putrajaya</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Terengganu">Terengganu</option>
          </datalist></p>
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
                <input type="text" name="paymethod" list="payment-method-list" id="payment-method" required>
                <datalist id="payment-method-list">
                    <option value="Card">
                </datalist>
            <p class="boxes">
            <label for="remark">Remark</label>
            <input type="text" id="remark" list="remark" name="remark"></p><br>
            <button type="submit" name="submit" class="btn" style="color:blue" >Next: Payment Information &rarr;</button>
            </fieldset>
    </form>
    <br>
</div>
<br><br><br>
<section id="skip">
<div>
    <h3 class="text-center">WANT TO SKIP WAITING BUSINESS DAYS DELIVERY?<br> TRY OUT OUR NEW FEATURE, "JOB POST" WHERE DELIVERY MADE CONVENIENT!</h3>
    <h5 class="text-center">Job Post allows customer to post their delivery request without the need to leave the comfy of their home,<br>simply chose the pick up and drop off point and wait for our driver to complete your request.<br>It's that simple! Happy Delivery!!</h5>
    <h3 class="text-center">TRY IT NOW!!</h3>
    <p class="jobposting text-center"><button onclick="location.href='jobpost.php'" type="button" class="btn btn-primary btn-lg">JOB POSTING</button></p>
    <br><br><br><br><br>
 </div>
</section>
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