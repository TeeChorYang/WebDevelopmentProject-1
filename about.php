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
    <title>About Us - Radiant</title>
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
                            <a class="nav-link active" aria-current="page" href="about.php">About&nbsp;</a>
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

    <!--Who Are We-->
    <div>
        <div class="content">
            <section style="display: flex;">
                <div class="font-monospace" style="display: flex;flex-direction: column;">
                    <br><br>
                    <h1 class="text-uppercase" style="font-size: 3.75rem; text-align: left;margin: .5rem .5rem;"><b>Who Are We?</b></h1>
                    <br>
                    <p style="margin: 1rem;font-size: 1.3rem;">We are RADIANT Delivery Service which provides delivery services via international or local. Radiant Delivery Services was born to make on-demand delivery possible for everyone at the touch of a button. With just a simple to use website,
                        users are able to gain access to wide fleet of suitable delivery vehicles helmed by professional drivers.Simply input the drop out location and choose the type of delivery method u need and we will take it up from there to ensure
                        your package is delivered to its desired destination safely.
                    </p>
                    <br><br>
                    <br>
                </div>
            </section>
        </div>
    </div>

    <!--What is Our Goal-->
    <div class="content">
        <section style="display: flex;justify-content: center;">
            <div>
                <img src="images/delivery-warehouse-man.jpg" " class= "yellowperson " style="width: 650px;height: 600px;border-radius: 15%; ">
                  <br><br><br>
              </div>
      
              <div class="font-monospace " style="display: flex;flex-direction: column;align-items: center;text-align: center; ">
                  <br><br>
                  <h1 class="text-uppercase " style="font-size: 3.75rem; text-align: left;margin: .5rem .5rem; "><b>What is Our Goal?</b></h1>
                  <br>
                  <p style="margin: 1rem;font-size: 1.3rem; ">Our goal is to ensure delivering package made convenient to everyone everywhere be it at a park, office, of the comfort of your home, anywhere with just a few clicks away. We aim to strive as one of the top Asia Most Reliable Delivery Services to ensure our services are reliable and trusted.
                  </p>
                  <br>
              </div>
          </section>
        </div>

          
        <!-- Footer -->
            <div class="p-3 mb-2 bg-light text-dark ">
              <div class="container ">
                <footer class="py-3 my-4 ">
                  <ul class="nav justify-content-center border-bottom pb-3 mb-3 ">
                    <li class="nav-item "><a href="index.php" class="nav-link px-2 text-muted ">Home</a></li>
                    <li class="nav-item "><a href="about.php" class="nav-link px-2 text-muted ">About</a></li>
                    <li class="nav-item "><a href="bookingnow.php" class="nav-link px-2 text-muted ">Book Now</a></li>
                    <li class="nav-item "><a href="beourpartner.php" class="nav-link px-2 text-muted ">Be Our Partner</a></li>
                    <li class="nav-item "><a href="contact.php " class="nav-link px-2 text-muted ">Contact</a></li>
                  </ul>
                  <p class="text-center text-muted ">© 2022 Radiant Delivery Service, Inc</p>
              </div>
            </div>
    </body>
</html>