<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbase = "wdt092021";
//establish connection to mysql server
$conn = mysqli_connect($servername,$user,$password,$dbase);
session_start();


if(isset($_POST['submit'])){
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
    $mobile_num = $_POST['mobile_num'];
	$ic_num = $_POST['ic_num'];
	$race = $_POST['race'];
    $religion = $_POST['religion'];
	$gender = $_POST['gender'];
	$state = $_POST['state'];
    $area = $_POST['area'];
	$postal_code = $_POST['postal_code'];
	$country = $_POST['country'];
    $modeofdelivery = $_POST['modeofdelivery'];
	$preferedworking = $_POST['preferedworking'];
	$experience = $_POST['experience'];
    $emergency = $_POST['emergency'];
	$medical = $_POST['medical'];
	$info = $_POST['info'];
    

    $check_ic = mysqli_query($conn, "SELECT identity_num FROM rdriver where identity_num = '$ic_num' ");
    $check_email = mysqli_query($conn, "SELECT email FROM rdriver where email = '$email' ");
    if(mysqli_num_rows($check_ic) > 0){
        echo '<script>alert("IC Number Already Exists\n Please Wait For Your Approvals and Check Your Email.")</script>';
    }
        elseif(mysqli_num_rows($check_email) > 0){
            echo '<script>alert("Email Already Exists, Please Try Again")</script>';
        }
        else{
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $result = mysqli_query($conn, "INSERT INTO `rdriver`(`first_name`, `last_name`, `email`, `mobile_num`, `identity_num`, `race`, `religion`, `gender`, `state`, `area`, `postal_code`, 
            `country`, `mode_of_delivery`, `working_hours`, `experience`, `emergency_c`, `medical`, `info`) VALUES ('$f_name','$l_name','$email','$mobile_num','$ic_num','$race',
            '$religion','$gender','$state','$area','$postal_code','$country','$modeofdelivery','$preferedworking','$experience','$emergency','$medical','$info')");
            mysqli_close($conn);
            header("location: registerdriversuccess.php");

        }
            echo('Record Entered Successfully');
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Register - Radiant</title>
    <link rel="stylesheet" href="registerdriver.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>
</head>

<body class="bg-dark">
    <div class="content">

        <!--Header-->
        <nav class="navbar navbar-expand-sm navbar-light" style="font-size: 1.3rem;">
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
                            <a class="nav-link text-white" href="index.php">Home&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php">About&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="bookingnow.php">Booking Now&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="beourpartner.php">Be Our Partner&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php">Contact&nbsp;&nbsp;</a>
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
        <br><br>
    </div>

    <!--Register Driver form-->
<section class="h-100 " style="border-radius: 5%;">
<form class="" name="registerdriver" action="" method="post">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col">
        <div class="card card-registration my-4 border border-dark border border-4" style="background:#f2f2f2;">
          <div class="row g-0"style="background:#ffa366">
            <div class="col-xl-6 d-none d-xl-block" >
              <img
                src="images\ecommerce-delivery-500x500.png"
                alt="Sample photo"
                class="img-fluid; display: flex; justify-content: center;" width="600px" height="700px"  top="50px"
                style="position:relative; left:20px; top:100px; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; ;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Driver Registration Form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="f_name" class="form-control form-control-lg" required/>
                      <label class="form-label">First Name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="l_name" class="form-control form-control-lg" required/>
                      <label class="form-label" >Last Name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" required/>
                  <label class="form-label">Email</label>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="int" name="mobile_num" class="form-control form-control-lg" value="+60 " required />
                      <label class="form-label" >Mobile Number</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="int" name="ic_num" class="form-control form-control-lg" required/>
                      <label class="form-label">No. IC</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="race" class="form-control form-control-lg" value="" required/>
                      <label class="form-label">Race</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="religion" class="form-control form-control-lg" required/>
                      <label class="form-label">Religion</label>
                    </div>
                  </div>
                </div>



                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      value="female"
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      value="male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      value="other"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>
                </div>
                <hr>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <select class="form-select" name="state" aria-label="Default select example" required >
                        <option value="1">-</option>
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
                    </select>
                    <label class="form-label">State</label>
                  </div>

                  <div class="col-md-6 mb-4">
                  <div class="form-outline">
                      <input type="text" name="area" class="form-control form-control-" value="" required/>
                      <label class="form-label" >Area</label>
                    </div>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="int" name="postal_code" class="form-control form-control-lg" value="" required/>
                      <label class="form-label" >Postal Code</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="country" class="form-control form-control-lg" value="Malaysia" disabled  />
                      <label class="form-label" >Country</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                <select class="form-select" name="modeofdelivery" aria-label="Default select example" required>
                        <option value="0">-</option>
                        <option value="Motorbike">Motorbike</option>
                        <option value="Car">Car</option>
                        <option value="Van">Van</option>
                    </select>
                    <label class="form-label" >Mode of Delivery</label>
                  </div>
                  <div class="col-md-6 mb-4">
                  <div class="form-outline">
                      <input type="text" name="preferedworking" class="form-control form-control-" value="" required/>
                      <label class="form-label" >Preferred Working Hours Per Day</label>
                    </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="experience" class="form-control form-control-lg" placeholder="" required/>
                      <label class="form-label">Driving Experience / Similar Work Experience</label>

                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="emergency" class="form-control form-control-lg" placeholder="Name + Contact Number" required/>
                  <label class="form-label">Emergency Contact</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="medical" class="form-control form-control-lg" />
                  <label class="form-label">Medical History (if any)</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="info" class="form-control form-control-lg" />
                  <label class="form-label">Addition Info (if any)</label>
                </div>


                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" name="submit" class="btn btn-outline-success btn-lg ms-2 border-success" style="border-width:3px;border-radius: 20%;">Submit form</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
<br><br>


    <!-- Footer -->
    <div class="p-3 mb-2 bg-dark">
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