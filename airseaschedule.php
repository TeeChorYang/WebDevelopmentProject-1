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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air/Sea Schedule - Radiant</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    .proceed {
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
            text-align: center;
        }
    </style>
</head>
 
<body class="p-3 mb-2 bg-secondary text-white">
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
                            <a class="nav-link text-white" href="index.php">Home&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php">About&nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="bookingnow.php">Booking Now&nbsp;</a>
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
    </div>

<br><br><br>

    <!-- Schedule -->
<div class="p-3 mb-2 bg-secondary text-white">
    <h3 class=text-center> Air Delivery Schedule</h3>
        <table align="center" class="table table-dark table-striped" style="width:70%">
    <tr>
        <th style="width:20%">Air Lines</th>
        <th style="width:20%">Delivery Dates</th>
        <th style="width:20%">Time</th>
        <th style="width:20%">Destination</th>
        <th style="width:20%">Status</th>
    </tr>
    <tr>
        <td>Air Asia</td>
        <td>Every Monday To Wednesday</td>
        <td>00:30 02:30 04:30<br>06:30 11:30 13:30<br>15:30 17:30 20:30<br>21:30 </td>
        <td>Asia<br>Africa<br>Australia</td>
        <td>Available</td>
    </tr>
    <tr>
        <td>Malindo Airline</td>
        <td>Wednesday To Friday</td>
        <td>00:00 02:00 06:00<br>08:00 10:00 12:00<br>14:00 16:00 20:00</td>
        <td>North America<br>South America</td>
        <td>Available</td>
    </tr>
    <tr>
        <td>Emirates</td>
        <td>Weekend Only</td>
        <td>02:35 05:15 07:00<br>10:30 12:40 14:20<br>15:50 18:45 20:35<br>23:25</td>
        <td>Antartica<br>Europe</td>
        <td>Available</td>
    </tr>
    <tr>
        <td>American Airlines</td>
        <td>Weekdays only</td>
        <td>01:25 02:15 05:40<br>07:20 07:45 13:55<br>14:20 16:45 17:35<br>23:55</td>
        <td>Europe<br>Africa<br>Asia<br>Australia</td>
        <td>Available</td>
    </tr><tr>
        <td>Breeze Airways</td>
        <td>Tuesday and Thursday</td>
        <td>00:35 02:15 06:45<br>12:55 14:00 14:20<br>16:50 21:25</td>
        <td>North America<br>South America<br>Australia</td>
        <td>Available</td>
    </tr><tr>
        <td>Delta Air Lines</td>
        <td>Temporary Unavailable</td>
        <td>None</td>
        <td>None</td>
        <td>Unavailable</td>
    </tr><tr>
        <td>Thai Airways International</td>
        <td>Monday, Wednesday, Friday</td>
        <td>02:35 5:15 08:00<br>14:40 17:15 20:55<br>23:45</td>
        <td>Antartica<br>Europe</td>
        <td>Available</td>
    </tr>
    <tr>
        <th colspan="5"><button onclick="location.href='bookair.php'" type="button" class="proceed">Book Air Delivery</button></th>
    </tr>
        </table>

    <br><br><br>

    <h3 class=text-center>Sea Delivery Schedule</h3>
        <table align="center" class="table table-dark table-striped" style="width:70%">
    <tr>
        <th style="width:20%">Shipping Lines</th>
        <th style="width:20%">Delivery Dates</th>
        <th style="width:20%">Time</th>
        <th style="width:20%">Destination</th>
        <th style="width:20%">Status</th>
    </tr>
    <tr>
        <td>COSCO</td>
        <td>Every Monday To Wednesday</td>
        <td>00:00 03:30 07:00<br>13:00 17:30 23:15</td>
        <td>North America<br>South America</td>
        <td>Available</td>
    </tr>
    <tr>
        <td>MSC</td>
        <td>Monday, Wednesday, Friday</td>
        <td>00:00 04:00 08:00<br>12:00 14:00 18:00<br>22:00</td>
        <td>Antartica<br>Europe</td>
        <td>Available</td>
    </tr>
    <tr>
        <td>ONE</td>
        <td>Tuesday and Thursday</td>
        <td>02:35 07:00 10:30<br>12:40 14:20 15:50<br>18:45 23:25</td>
        <td>Asia<br>Africa</td>
        <td>Available</td>
    </tr>
    <tr>
        <td>Yang Ming Marine Transport</td>
        <td>Weekdays only</td>
        <td>00:25 02:45 04:25<br>07:15 12:35 15:15<br>19:35 23:55</td>
        <td>Australia<br>North America</td>
        <td>Available</td>
    </tr>
    <tr>
        <td>APM-Maersk</td>
        <td>Weekend Only</td>
        <td>02:35 05:15 10:30<br>12:40 14:20 15:50<br>20:35 23:25</td>
        <td>Asia<br>Africa<br>Australia</td>
        <td>Available</td>
    </tr>
    <tr>
        <th colspan="5"><button onclick="location.href='booksea.php'" type="button" class="proceed">Book Shipping</button></th>
    </tr>
        </table>
        <br><br>

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
