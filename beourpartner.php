<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbase = "wdt092021";
    //establish connection to mysql server
    $conn = mysqli_connect($servername,$user,$password,$dbase);
    

    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Partner - Radiant</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>
</head>


<body>
    <div class="content">


        <!--Header-->
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
                            <a class="nav-link" href="bookingnow.php">Booking Now&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="beourpartner.php">Be Our Partner&nbsp;</a>
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
    <!--Be Radiant Partner-->
    <div class="content">
        <section style="display: flex;flex-direction: column-reverse;">
            <div>
                <p style="text-align:center;"><img src="images/delivery-man-driving-way_56104-669.jpg" class="" style="width: 800px;height: 450px;border-radius: 20%;"></p>
                <br><br><br>
            </div>

            <div style="display: flex;flex-direction: column;text-align: center;">
                <br>
                <h1 style="font-size: 6.5rem; text-align: left;margin: .5rem .5rem;"><b>Be a Radiant<br>&nbsp;&nbsp;&nbsp;&nbsp;
                delivery-partner</b></h1>
                <br>
                <p style="margin: 1.5rem; text-align: center; font-size: 2rem;font-family: Arial, Helvetica, sans-serif;">Be your own boss, enjoy flexible hours, 
                and more earning opportunities <br>as you help deliver items to businesses and consumers. </p>
            </div>
        </section>
    </div>
    
    <!--Sign In as Driver-->
    <div class="col text-center">
        <button type="button" class="btn btn-outline-dark btn-lg text-warning"  onclick="location.href='signindriver.php'">Sign In as Register Driver</button>
    </div>


    <!--Why Should Join Us-->
    <br>
    <hr><br><br>
    <div class="card container border-0 bg-info text-dark bg-opacity-75" style="text-align: center; width:930px;">
    <div class="card-header" style="margin: 1.5rem; text-align: center; font-size: 1.3rem;font-family: Arial, Helvetica, sans-serif;">
        <b>Why You Should Join Us</b>
    </div>
    <div class="card-body p-3 mb-2 bg-danger bg-opacity-75 text-white">
        <h5 class="card-title">Instant cash-out</h5>
        <p class="card-text">Easily transfer your earnings to your bank account.</p>
    </div>
    <div class="card-body p-3 mb-2 bg-danger bg-opacity-75 text-white">
        <h5 class="card-title">All-in-one app</h5>
        <p class="card-text">Receive delivery requests and track your earnings.</p>
    </div>
    <div class="card-body p-3 mb-2 bg-danger bg-opacity-75 text-white">
        <h5 class="card-title">Easy to track</h5>
        <p class="card-text">In-app navigation from pick-up to drop-off.</p>
    </div>
    <br>
    </div>
    <br><br>

    <!--Requirement-->
    <div class="card mx-auto bg-info p-2 text-dark bg-opacity-50" style="width: 60%; align-items: center;text-align: center">
        <img class="card-img-top" src="images/requirement-identification.png" alt="Card image cap">
        <div class="card-body">
            <br>
            <h4 class="card-title" style="font-size: 1.5rem;font-family: Arial, Helvetica, sans-serif;"><b>-- Requirements --</b></h4>
            <p class="card-text" style="font-size: 1.3rem;font-family: Arial, Helvetica, sans-serif;"><b>Fulfill All The Requirement? Click The Register Button Now.</b></p>
        </div>
        <ul class="list-group list-group-flush mx-auto border border">
            <li class="list-group-item bg-info p-2 text-dark bg-opacity-25"><b>Age between 18 to 65 years old</b></li>
            <li class="list-group-item bg-info p-2 text-dark bg-opacity-25"><b>A medical check up is required if you are above 50 years old</b></li>
            <li class="list-group-item bg-info p-2 text-dark bg-opacity-25"><b>Malaysian citizen (Blue IC)</b></li>
            <li class="list-group-item bg-info p-2 text-dark bg-opacity-25"><b>Access to a motorcycle or car (License L is not allowed)</b></li>
            <li class="list-group-item bg-info p-2 text-dark bg-opacity-25"><b>Possess smart phone with Appstore / Playstore app</b></li>
            <li class="list-group-item bg-info p-2 text-dark bg-opacity-25"><b>&nbsp;Does not have criminal records / require to pass background check&nbsp;</b></li>
            <li class="list-group-item bg-info p-2 text-dark bg-opacity-25"><b>Not Suspended or Banned on Others Delivery Platform</b></li>
        </ul>
        <div class="card-body">
            <button onclick="location.href='registerdriver.php' " type="button " class="btn btn-outline-dark btn-lg text-danger btn-lg border-dark border-5"><b>Register Now</b></button>
        </div>
        <br>
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