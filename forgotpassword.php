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
    <title>Forgot Password - Radiant</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>

<body>
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
                            <a class="nav-link" href="index.php">Home&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bookingnow.php">Booking Now&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="beourpartner.php">Be Our Partner&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!--Forgot Password-->
    <section>
        <div class="container padding-bottom-3x mb-2 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="forgot">
                        <h2>Forgot Your Password?</h2>
                        <p>Change your password in three easy steps. This will help you to secure your password!</p>
                        <ol class="list-unstyled">
                            <li><span class="text-primary text-medium">1. </span> Enter your email address below.</li>
                            <li><span class="text-primary text-medium">2. </span> Our system will send you a temporary link.</li>
                            <li><span class="text-primary text-medium">3. </span> Use the link to reset your password.</li>
                        </ol>
                    </div>
                    <form class="card mt-4" id="i">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email-for-pass">Enter your email address</label>
                                <input class="form-control" type="email" id="email-for-pass" required="">
                                <small class="form-text text-muted">Enter the email address you used during the registration on Radiant Delivery Service. Then we'll email a link to this address.</small> </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" type="submit" onclick="alertpassword()">Get New Password</button>
                            <button class="btn btn-danger" type="submit" onclick="location.href='login.php'">Back to Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            var form = document.getElementById('i');

            function alertpassword() {
                if (form.checkValidity()) {
                    alert("Request Submitted Successfully! Please Check Your Email Inbox.");
                }
            }
        </script>
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