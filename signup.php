<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbase = "wdt092021";
//establish connection to mysql server
$conn = mysqli_connect($servername,$user,$password,$dbase);


if(isset($_POST['submit'])){
	$uname = $_POST['txtUsername'];
	$email = $_POST['txtEmail'];
	$password = $_POST['txtPassword'];

    $check_uname = mysqli_query($conn, "SELECT username FROM rcustomers where username = '$uname' ");
    $check_email = mysqli_query($conn, "SELECT email FROM rcustomers where email = '$email' ");
    if(mysqli_num_rows($check_uname) > 0){
        echo '<script>alert("Username Already Exists, Please Try Again")</script>';
    }
        elseif(mysqli_num_rows($check_email) > 0){
            echo '<script>alert("Email Already Exists, Please Try Again")</script>';
        }
        else{
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $result = mysqli_query($conn, "INSERT INTO rcustomers (username, email, Password, role) VALUES ('$uname', '$email', '$password', '2')");
            mysqli_close($conn);
            header("location: signupsuccess.php");

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
    <title>Sign Up - Radiant</title>
    <link rel="stylesheet" href="signup.css">
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

    <!--Sign Up-->
    <section class="login-block fontsignin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" name="rcustomers" onSubmit="return validate();" action="" method="post">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                        <img class="mb-4 img" src="images\Screenshot_4-17.png" alt="" width="130" height="180">
                                        <h3 class="text-center heading" style="text-align:center; font-size: 1.2rem; ">Create your Radiant Delivery Service account.<br>It’s free and only takes a minute.</h3>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <h1 class="h3 mb-3 font-weight-normal">Sign Up:</h1>
                                <hr style="width:100%;  margin-left: auto;margin-right: auto;height:2px">
                                <br>

                                <div class="form-group form-primary"> 
                                    <input type="text" class="form-control" required="" autofocus="" name="txtUsername" value="" placeholder="Username"> 
                                </div>

                                <div class="form-group form-primary"> 
                                    <input type="email" class="form-control" required="" autofocus="" name="txtEmail" value="" placeholder="Email"> 
                                </div>
            
                                <div class="form-group form-primary"> 
                                    <input type="password" class="form-control" required="" autofocus="" name="txtPassword" id="password" placeholder="Password" value="" onkeyup='check();'>
                                </div>
                                <div class="form-group form-primary"> 
                                    <input type="password" class="form-control" required="" autofocus="" name="confirm_password" id="confirm_password" placeholder="Confirm password" value="" onkeyup='check();'> 
                                    <span id='message'></span>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <br>
                                        <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 btn-lg" onclick="alertsignup()" name="submit" value="Sign Up"> 
                                    </div>
                                </div>
                                <br>
                                <p class="text-inverse text-center">Already have an account? 
                                    <a href="login.php">Login</a></p>

                                <script>
                                    /* Check Password matching and display*/
                                   var check = function() {
                                        if (document.getElementById('password').value ==
                                            document.getElementById('confirm_password').value) {
                                            document.getElementById('message').style.color = 'green';
                                            document.getElementById('message').innerHTML = 'Password Matching!';
                                        } else {
                                            document.getElementById('message').style.color = 'red';
                                            document.getElementById('message').innerHTML = 'Password Not Matching!';
                                        }
                                        }
                                    /* Check Password*/
                                    function validate(){
                                        var a = document.getElementById("password").value;
                                        var b = document.getElementById("confirm_password").value;
                                        if (a!=b) {
                                        alert("Passwords Do No Match, Please Try Again");
                                        return false;
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
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