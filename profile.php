<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbase = "wdt092021";
    //establish connection to mysql server
    $conn = mysqli_connect($servername,$user,$password,$dbase);


    $sql_query = "SELECT * FROM `rcustomers` where username = username LIMIT 1";
    $result = mysqli_query($conn, $sql_query);
    while ($row = mysqli_fetch_array($result)) {
    

  
//  let's check if your submit button has been clicked
 if(isset($_POST['submit'])){
     $idnum =  $_POST['idnum'];
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $gender = $_POST['gender'];
     $mobile_num = $_POST['mobile_num'];
     $birthday = $_POST['birthday'];
     $address1 = $_POST['address1'];
     $address2 = $_POST['address2'];
     $postal_code = $_POST['postal_code'];
     $area = $_POST['area'];
     $state = $_POST['state'];
     $adddetails = $_POST['adddetails'];
     //create your insert sql
     $query = "UPDATE `rcustomers` SET `Fname`='$fname',`Lname`='$lname',`gender`='$gender',
     `mobile_num`='$mobile_num',`birthday`='$birthday',`address1`='$address1',`address2`='$address2',`postal_code`='$postal_code',`area`='$area',`state`='$state',`adddetails`='$adddetails'
      WHERE  $idnum = cid";
     
     if(mysqli_query($conn,$query)){
         echo "Record updated successfully!";
     }else{
         echo "Error : " . mysqli_error($conn);
     }
 
     mysqli_close($conn);
      header("location: profile.php");
    
    
    }
     }
    session_start();
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Radiant</title>
    <link rel="stylesheet" href="profile.css">
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

    <!--Profile-->
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row d-flex justify-content-center" style="width: 1300px;">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="200px" height="190px" src="images\user-avatar.png">
            <span class="font-weight-bold" style="font-size: 1.3rem;">
                <br>
            <?php 
                if(isset($_SESSION['username'])) {
                    echo "Hi, " . $_SESSION['fullname'];
                }else {
                } 
            ?>
            </span>
            <span style="font-size: 1.1rem;"> 
                <?php
                $sql_query = "SELECT * FROM `rcustomers` where username ='".$_SESSION['fullname']."' LIMIT 1";
                $result = mysqli_query($conn, $sql_query);
                while ($row = mysqli_fetch_array($result)) {
                echo $row["email"]
                ?>
            </span>
            <button type="button" onclick="location.href='deleteacc.php'" class="btn btn-outline-danger" style="margin:40px">Delete Account</button>
            
            <?php 
             }
            ?>
            </div>
            </div>
            <?php   
                $sql_query = "SELECT * FROM `rcustomers` where username ='".$_SESSION['fullname']."' LIMIT 1";
                $result = mysqli_query($conn, $sql_query);
                while ($row = mysqli_fetch_array($result)) {
            
            ?>
            
        <div class="col-md-5 border-right"> 
            <div class="p-3 py-5">
            <form action="" method="POST">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="col-md-6">
                        <label class="labels">ID</label>
                        <input type="text" name="idnum" class="form-control" placeholder="" readonly value="<?php echo $row["cid"]?>">
                    </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="enter first name" value="<?php echo $row["Fname"]?>">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Last Name</label>
                        <input type="text" name="lname" class="form-control" value="<?php echo $row["Lname"]?>" placeholder="enter last name">
                    </div>
                </div>
                <div class="col-md-12" >
                    <label class="labels">Gender</label>
                    <div class="form-control">
                        <div class="form-check form-check-inline mb-0 me-4">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            value="Female"
                        />
                        <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            value="Male"
                        />
                        <label class="form-check-label" for="maleGender">Male</label>
                        </div>

                        <div class="form-check form-check-inline mb-0">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            value="Other"
                        />
                        <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                        <input type="text" name="" readonly class="form-control" value="<?php echo $row["gender"]?>" placeholder="">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Mobile Number</label>
                        <input type="text" name="mobile_num" class="form-control" placeholder="enter phone number" value="<?php echo $row["mobile_num"]?>">
                    </div>
                    
                    <div class="col-md-12">
                        <label class="labels">Birthday</label>
                        <input type="date" name="birthday" class="form-control" value="<?php echo $row["birthday"]?>">
                    </div>

                    <div class="col-md-12">
                        <label class="labels">Address Line 1</label>
                        <input type="text" name="address1" class="form-control" placeholder="enter address line 1" value="<?php echo $row["address1"]?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Address Line 2</label>
                        <input type="text" name="address2" class="form-control" placeholder="enter address line 2" value="<?php echo $row["address2"]?>">
                    </div>

                    <div class="col-md-12">
                        <label class="labels">Postal Code</label>
                        <input type="text" name="postal_code" class="form-control" placeholder="enter postal code" value="<?php echo $row["postal_code"]?>">
                    </div>

                    <div class="col-md-12">
                        <label class="labels">Area</label>
                        <input type="text" name="area" class="form-control" placeholder="enter area/city" value="<?php echo $row["area"]?>">
                    </div>
                        
                    <div class="col-md-12">
                        <label class="labels">State</label>
                        <select class="form-select" name="state" aria-label="Default select example">
                            <option value="<?php echo $row["state"]?>"><?php echo $row["state"]?></option>
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
                    </div>
                   
                    <div class="col-md-12">
                        <label class="labels">Additional Details</label>
                        <input type="text" name="adddetails" class="form-control" placeholder="additional details" value="<?php echo $row["adddetails"]?>">
                    </div>   
                </div>

                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" name="submit" type="submit">Save Profile</button>
                </div>
                <?php
        }
        ?>
            </form>
            </div>
        </div>



    


    <!-- Footer -->
    <div class="p-3 mb-2 bg-light text-dark ">
    <div class="container bg-transparent">
        <footer class="py-3 my-4 ">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3 ">
                <li class="nav-item "><a href="index.php " class="nav-link px-2 text-muted ">Home</a></li>
                <li class="nav-item "><a href="about.php " class="nav-link px-2 text-muted ">About</a></li>
                <li class="nav-item "><a href="bookingnow.php " class="nav-link px-2 text-muted ">Book Now</a></li>
                <li class="nav-item "><a href="beourpartner.php " class="nav-link px-2 text-muted ">Be Our Partner</a></li>
                <li class="nav-item "><a href="contact.php" class="nav-link px-2 text-muted ">Contact</a></li>
            </ul>
            <p class="text-center text-muted ">© 2022 Radiant Delivery Service, Inc</p>
    </div>
    </div>
</body>

</html>