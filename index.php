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
    <title>RADIANT Delivery Service</title>
    <link rel="stylesheet" href="index.css">
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home&nbsp;</a>
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

    <!--Introduce Radiant-->
    <div class="content">
        <section style="display: flex;flex-direction: row-reverse;justify-content: center;">
            <div>
                <img src="images/billionphotos1641702min.png" class="yellowperson" style="width: 500px;height: 650px;border-radius: 35%;">
                <br><br><br>
            </div>

            <div style="display: flex;flex-direction: column;align-items: center;text-align: center;">
                <br><br><br><br>
                <h1 style="font-size: 3.75rem; text-align: left;margin: .5rem .5rem;"><b>Radiant Delivery Service</b></h1>
                <br>
                <p class="row justify-content-center align-self-center" style="margin: 1.5rem; text-align: center; font-size: 1.2rem;">We provide high-quality delivery services which ensure our customer package reach safely and efficient. Rest assured that your package is safe and taken care in our care. With just a few button clicks, u are able to request for our services.
                    Its that easy!!<br>Head to the service section below and TRY US NOW!!!! </p>
                <p class="border border-dark border-3"style=" text-align: center; font-size: 1.2rem;background-color:#ffff1a; width:400px; height:auto; border-radius: 20%;"><b>We care, We listen, We're Radiant<br>
                 Your Lightning-Fast Delivery Partner</b></p>
                <p style="text-align: center; font-size: 1.2rem;"><br> Click below to learn more ABOUT US.</p>
                <button onclick="location.href='about.php'" type="button" class="btn btn-warning btn-lg">Learn More</button>
                <br>
            </div>
        </section>
    </div>
    <hr>


    <!--Introduce Service-->
    <div class="content">
        <section>
            <br><br>
            <h2 style="text-align:center; font-size: 4rem;">Try Our Delivery Service Now</h2>
            <p style="text-align:center;font-size: 1.3rem;">We perform high-quality delivery service, let our customers can rest assured to leave the packet to us for delivery.</p>
            <br>
            <div class="row">
                <div class="column">
                    <figure style="text-align:center;">
                        <img src="images/Freight-Forwarding-Air-Freight-vs.-Sea-Freight--Part-I.jpg" alt="" style="width:500px;height:400px;">
                        <figcaption style="font-size: 1.5rem;"><b>Air And Sea Freight</b></figcaption>
                        <br>
                        <button onclick="location.href='airseaschedule.php'" type="button" class="btn btn-warning btn-lg">Book Now</button>
                    </figure>
                </div>
                <div class="column">
                    <figure style="text-align:center;">
                        <img src="images/Delivery_Information-01.jpg" alt="" style="width:500px;height:400px;">
                        <figcaption style="font-size: 1.5rem;"><b>Domestic Shipping In Malaysia</b></figcaption>
                        <br>
                        <button onclick="location.href='domesticshipping.php'" type="button" class="btn btn-warning btn-lg">Book Now</button>
                    </figure>
                </div>
            </div>
        </section>
    </div>

    <!--Why Choose Our Service-->
    <section class="p-3 mb-2 bg-secondary text-white" style="width: 100%;">
        <div class="content">
            <div>
                <h2 style="text-align:center; font-size: 3.5rem;">Why Choose Our Service?</h2>
                <p style="text-align:center; font-size: 1.3rem;">We ensure your package is taken care well and safety reach its destination.</p>
                <br>
            </div>
            <div class="container px-4">
                <div class="row gx-5">
                    <div class="col">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffff00" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <br><br>
                            <h3><u>In Cooperation With</u></h3>
                            <p style="text-align:left; font-size: 1.2rem;">Some of the most famous and trusted courier company around the world to ensure your package is delivered smoothly and safely.</p>
                            <br>
                            <br><br><br>
                        </div>
                    </div>
                    <div class="col ">
                        <div class=" ">
                            <img src="images/malaysia-courier-service.png " alt=" " style="width:700px; height:350px; ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Be Our Partner Now-->
    <section>
        <div class="content ">
            <br><br>
            <h2 style="text-align:center; font-size: 4rem; ">Be Our Parner Now!</h2>
            <p style="text-align:center;font-size: 1.3rem; ">We Are Hiring Driver <br> Be a part of us on our journey to be the top delivery service company international or locally.<br>Earn various BENEFITS when u are with US too!!<br> JOIN US NOW!!</p>
            <br>
            <div class="row ">
                <div class="column ">
                    <figure style="text-align:center; ">
                        <img src="images/Employee-Benefits.jpeg" alt=" " style="width:500px;height:400px; border-radius: 25%;">
                        <br><br>
                        <figcaption style="font-size: 1.3rem; font-family:Georgia, Times, serif"><b>Gain Various Benefits</b><br>SUCH AS: Pay Raise/ Perks & Bonuses/ Paid Vacation etc.</figcaption>
                    </figure>
                </div>
                <div class="column ">
                    <figure style="text-align:center; ">
                        <img src="images/Ways-To-Be-Your-Own-Boss-6.jpg" alt=" " style="width:500px;height:400px; border-radius: 25%;">
                        <br><br>
                        <figcaption style="font-size: 1.3rem; font-family:Georgia, Times, serif "><b>Be your own boss</b><br>Take control on where,when and how often u want to deliver.</figcaption>
                    </figure>
                </div>
                <div class="container ">
                    <div class="row ">
                        <div class="col text-center ">
                            <br><br>
                            <button onclick="location.href='beourpartner.php' " type="button " class="btn btn-outline-warning btn-lg "><b>Learn More</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonials-->
    <section>
        <div class="content ">
            <br><br><br><br>
            <h4 style="text-align:center; ">Testimonials</h4>
            <h2 style="text-align:center; font-size: 3rem; ">What Clients Say</h2>
            <p style="text-align:center;font-size: 1.3rem; ">We place huge value towards having a strong relationships with customer. Customer feedback is vital in helping us to improve everyday.</p>
            <br>
            <div class="row col d-flex justify-content-center ">
                <div class="card bg-light mb-3 " style="max-width: 20rem; ">
                    <br>
                    <div class="col d-flex justify-content-center imgcircle "><img src="images/mattmurdock.jpg " alt=" " style="width:150px;height:100px; "></div>
                    <div class="card-body ">
                        <h5 class="card-title ">Matt Murdock</h5>
                        <p style="font-size: 0.8rem; ">Founder of Nelson And Murdock Law</p>
                        <p class="card-text " style="text-align:center;font-size: 1rem; "><svg xmlns="http://www.w3.org/2000/svg " width="20 " height="20 " fill="currentColor " class="bi bi-quote " viewBox="0 0 16 16 ">
                      <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92
                            0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322
                            3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z "/>
                    </svg> Use them for our office, always easy to order, never a problem, pick up on time. No billing issues. Been with them for years, and never thought of changing. Got my package to me very fast. Seems to be a fast and secure service.
                            A big help in this difficult time. Thanks!</p>
                    </div>
                </div>
                <div class="card bg-light mb-3 " style="max-width: 20rem; ">
                    <br>
                    <div class="col d-flex justify-content-center imgcircle "><img src="images/tonystark.jpg " alt=" " style="width:150px;height:100px; "></div>
                    <div class="card-body ">
                        <h5 class="card-title ">Tony S​tark</h5>
                        <p style="font-size: 0.8rem; ">Former Leader of Stark Industries</p>
                        <p class="card-text " style="text-align:center;font-size: 1rem; "><svg xmlns="http://www.w3.org/2000/svg " width="20 " height="20 " fill="currentColor " class="bi bi-quote " viewBox="0 0 16 16 ">
                      <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92
                            0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322
                            3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z "/>
                    </svg> Above and beyond! We needed a package delivered working against a time critical deadline and Radiant Delivery Service navigated unforseen obstacles, delays from other parties, and the weather to get us what we needed when we
                            needed it. Add to that timely and clear communication all along the way!</p>
                    </div>
                </div>
                <div class="card bg-light mb-3 " style="max-width: 20rem; ">
                    <br>
                    <div class="col d-flex justify-content-center imgcircle "><img src="images/nickfury.jpeg " alt=" " style="width:150px;height:100px; "></div>
                    <div class="card-body ">
                        <h5 class="card-title ">Nick Fury</h5>
                        <p style="font-size: 0.8rem; ">Former Leader of S.H.I.E.L.D.</p>
                        <p class="card-text " style="text-align:center;font-size: 1rem; "><svg xmlns="http://www.w3.org/2000/svg " width="20 " height="20 " fill="currentColor " class="bi bi-quote " viewBox="0 0 16 16 ">
                      <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92
                            0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322
                            3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z "/>
                    </svg> The team at Radiant Delivery Service is amazing. Someone referred me to them and I would do the same. I was in a tight crunch and needed a delivery ASAP. Despite me being in a rush they came up with quick solutions all with
                            outstanding customer service. The true hero’s for staying open and delivering during this virus outbreak. Thank you!</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>

    <!-- Footer -->
    <div class="p-3 mb-2 bg-light text-dark ">
        <div class="container bg-transparent ">
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