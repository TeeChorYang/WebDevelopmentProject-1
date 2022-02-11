<?php
$servername = "localhost"; 
$user = "root";
$password = "";
$dbase = "wdt092021";

session_start();
//establish a connection to mysql server
$conn = mysqli_connect($servername,$user,$password,$dbase);
if(!$conn){
   // echo "Server Failed : " . mysqli_connect_error();
    die("Server Failed : " . mysqli_connect_error());
}
// else{
//     echo "Connection successful!";
// }
 

//let's check if your submit button has been clicked
if(isset($_POST['submit'])){
    $mname = $_POST['Mname'];
    $memail = $_POST['Memail'];
    $mmessage = $_POST['Mmessage'];
    //create your insert sql
    $query="INSERT INTO `message`(`name`, `email`, `message`) VALUES ('$mname','$memail','$mmessage')";
    if(mysqli_query($conn,$query)){
        echo "Record added successfully!";
    }else{
        echo "Error : " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("location: contact.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Us - Radiant</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

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
                            <a class="nav-link" href="bookingnow.php">Booking Now&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="beourpartner.php">Be Our Partner&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact.php">Contact&nbsp;&nbsp;</a>
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


    <!--Send Us-->
    <div class="content">
        <section style="display: flex;">
            <div style="display: flex;flex-direction: column;">
                <br><br>
                <h1 class="text-uppercase" style="font-size: 3rem; text-align: left;margin: .5rem .5rem;"><b>Send Us A Message</b></h1>
                <p style="margin: 1rem;font-size: 1.5rem;">What Can We Help You With? <br> Kindly Enter Your Information and Message Below.
                </p>
            </div>
        </section>
    </div>

    <!--Form-->
    <div class="container">
        <div class="content">
            <form action="" id="f" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="Mname">Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="Mname" name="Mname" class="form-control req" required="required" placeholder="Enter Your Name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Memail">Email:</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="Memail" name="Memail" class="form-control req" required="required" placeholder="Enter Your Email Address..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Mmessage">Message:</label>
                    </div>
                    <div class="col-75">
                        <textarea id="Mmessage" name="Mmessage" class="form-control req" required="required" placeholder="Write Message.." style="height:200px"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" name="submit" value="Submit" onclick="alertmessage()">
                </div>
            </form>
        </div>
    </div>

    <script>
        var form = document.getElementById('f');

        function alertmessage() {
            if (form.checkValidity()) {
                alert("Message Submitted Successfully!\nWe will respond you through email, it might wil take 1-3 working days.");
            }
        }
    </script>

    <!--Other Way to Contact-->
    <br>
    <hr>
    <div class="content">
        <div class="row text-center">
            <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
                <br><br>
                <p style="text-align:center; font-size: 1.1rem; " class="lh-1">+6017-9546880<br><br>+603-51033212</p>
            </div>

            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
              </svg>
                <br><br>
                <adress style="text-align:center; font-size: 1rem; " class="lh-1">
                    8 Jalan Teknologi 10, <br>Taman Teknologi Malaysia, <br>57000 Kuala Lumpur, <br>Wilayah Persekutuan Kuala Lumpur
                </adress>
            </div>

            <div class="w-100"></div>
            <br>

            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
              </svg>
                <br><br>
                <p style="text-align:center; font-size: 1.1rem; " class="lh-1">@Radiant Delivery Service
                </p>
                <br><br>
            </div>

            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
                <br><br>
                <p style="text-align:center; font-size: 1.1rem; " class="lh-1">customerservice@radiantds.com.my</p>
                <br><br>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="p-3 mb-2 bg-light text-dark">
        <div class="container bg-transparent">
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