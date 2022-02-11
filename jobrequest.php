<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbase = "wdt092021";
//establish connection to mysql server
$conn = mysqli_connect($servername,$user,$password,$dbase);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();

?>
<!--html-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Request - Radiant</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .heading {
            text-align: center;
            color: #b38f00;
            text-decoration: underline;
        }
        table, th, td {
    border: 1px solid black;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    }
    </style>
</head>

<body class="p-3 mb-2 bg-dark text-white">
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
                        <a class="nav-link text-white" href="bookingnow.php">Booking Now&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"href="beourpartner.php">Be Our Partner&nbsp;</a>
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
        <div class="heading" ><h3 style="font-size: 2.7rem;">Job Requested List</h3></div><br><br>
        <!--Table list from database for job request-->
        <?php
        $result =mysqli_query($conn,"SELECT * from jobpost");
            echo "<table border='1' class='table table-dark table-striped'>
            <tr>
                <th>PID</th>
                <th>Fullname</th>
                <th>Contact number</th>
                <th>Pickup</th>
                <th>DropOff</th>
                <th>Delivery Type</th>
                <th>Item Weight</th>
                <th>Item Material</th>
                <th>Shipping Type</th>
                <th>Payment Method</th>
                <th>Remark</th>
                <th>Accept</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['pid'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['contactnumber'] . "</td>";
            echo "<td>" . $row['pickup'] . "</td>";
            echo "<td>" . $row['dropoff'] . "</td>";
            echo "<td>" . $row['deliverytype'] . "</td>";
            echo "<td>" . $row['weight'] . "</td>";
            echo "<td>" . $row['material'] . "</td>";
            echo "<td>" . $row['shippingtype'] . "</td>";
            echo "<td>" . $row['paymentmethod'] . "</td>";
            echo "<td>" . $row['remark'] . "</td>";
            echo "<td >" . "<button type='button' class='btn-outline-dark border-info' onclick=location.href='jobaccepted.php' >Accept Job</button>" . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            mysqli_close($conn);
        ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<div class="p-3 mb-2 bg-light text-dark p-3 mb-2 bg-dark text-white">
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