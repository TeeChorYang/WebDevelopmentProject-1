<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbase = "wdt092021";
    //establish connection to mysql server
    $conn = mysqli_connect($servername,$user,$password,$dbase);
    

    session_start();

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM rcustomers WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    echo $count;

    if($count == 1){
        // echo "record found";
        $_SESSION['username'] = $row['email'];
        $_SESSION['fullname'] = $row['username'];
        echo $_SESSION['fullname'];
        echo header ("Location: index.php");
    }else {
        echo '<script>alert("-- Username or Password Incorrect -- \nLog In Unsuccessful, Please Try Again.")</script>';
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Radiant</title>
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

    <!--Sign In-->
    <section class="centerblocktext fontsignin">
        <div class="signinbox col-sm-12">
            <form class="form-signin" method="POST" action="">
                <img class="mb-4 img" src="images\Screenshot_4-17.png" alt="" width="130" height="180">

                <br>
                <h1 class="h3 mb-3 font-weight-normal">Sign In:</h1>
                <hr style="height:2px">

                <br>
                <label for="inputUname" class="sr-only">Username:</label>
                <br>

                <input type="text" id="inputUname" name="username"class="form-control" placeholder="Username" required="" autofocus="">

                <br>
                <label for="inputPassword" class="sr-only">Password:</label>

                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">

                <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <div class="col text-center">
                    <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Log in</button>
                    <br><br>
                </div>

                <div class="right">
                    <p>Don't have an account?
                        <a href="signup.php" class="link-primary">SIGN UP</a>
                    </p>
                </div>
                <div class="left">
                    <br>
                    <a href="forgotpassword.php" class="link-primary">Forgot Password?</a>
                </div>
            </form>
        </div>
        <br><br>
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