<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../style.css" rel="stylesheet">
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="hotels.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84ad651da7.js" crossorigin="anonymous"></script>
    <script src="../../hotels.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
    <title>Book Krusty Krab</title>
    <style>
        body{
            padding-top: 4.5rem;
            font-family: 'Rubik', sans-serif;
        }
        @media (max-width: 768px) {
            body{
                padding-top: 6rem;
            }
        }
        #confirmed{
            display: none;
        }
    </style>
</head>
<body class="bg-light" id="krusty-krab">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary easeinout">
        <a href="../../../index.html" class="navbar-brand">
            <img src="../../../img/UwUgo.png" alt="CompanyLogo" width="110em" id="CompanyLogo" class="bg-white shadow-sm">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="../../../hotels/index.html">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="../../../flights/index.html">Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="../../../trains/index.html">Trains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="../../../bus/index.html">Bus & Shuttle</a>
                </li>
            </ul>
        </div>
        <div class="ml-auto" id="lognReg">
            <?php if(isset($_SESSION["user"])){ ?>
                <a href="../../../php/logout.php" class="btn btn-outline-light">Logout</a>
            <?php }else{ ?>
                <a href="../../../login/" class="btn btn-outline-light">Login</a>
                <a href="../../../register/" class="btn btn-outline-light">Register</a>
            <?php } ?>
        </div>
    </nav>

    <!-- Search Box -->
    <div id="content">
        <form action="" method="post">
            <div class="mb-lg-5 mb-3" id="img">
                <img src="../../../img/krusty-krab.png" alt="" class="w-100">
                
            </div>
            <div class="bg-white w-75 mx-auto p-3 container rounded shadow" id="">
                <div class="row justify-content-around">
                    <h2>$49/room/night</h2>
                </div>
                <div class="row justify-content-around">
                    <div class="col-sm-3">
                        <h6>Check In</h6>
                        <input class="form-control" type="date" placeholder="" aria-label="checkIn" id="dateIn" onchange="duration(); total();">
                        <input class="mt-2 form-control" type="time" placeholder="" aria-label="checkIn" id="timeIn" onchange="duration(); total();">
                    </div>
                    <div class="col-sm-3 pt-4 pt-lg-0">
                        <h6>Check Out</h6>
                        <input class="form-control" type="date" placeholder="" aria-label="checkOut" id="dateOut" onchange="duration(); total();">
                        <input class="mt-2 form-control" type="time" placeholder="" aria-label="checkOut" id="timeOut" onchange="duration(); total();">
                    </div>
                    <div class="col-sm-3 pt-4 pt-lg-0">
                        <h6>Duration</h6>
                        <p class="text-dark pt-0 pt-lg-1" id="out"></p>
                    </div>
                </div>
                <div class="row pt-2 justify-content-around mb-2">
                    <div class="col-sm-3">
                        <h6>Guests</h6>
                        <input class="form-control" id="guests" type="number" placeholder="" aria-label="guest" min="1" max="4" onchange="total()">
                    </div>
                    <div class="col-sm-3 pt-4 pt-lg-0">
                        <h6>Rooms</h6>
                        <input class="form-control" id="rooms" type="number" placeholder="" aria-label="rooms" min="1" max="3" onchange="total()">
                    </div>
                    <div class="col-sm-3 pt-4 pt-lg-0">
                        <h6>Total Payment</h6>
                        <p class="text-dark pt-0 pt-lg-1" id="total"></p>
                    </div>
                </div>
                <div class="row justify-content-around mb-3">
                    <div class="col mx-4">
                        <button class="btn btn-primary w-100" type="button" onclick="confirm()">Confirm</button>
                    </div>
                </div>
                <hr>
                <div id="confirmed">
                    <div class="row pt-2 justify-content-around mb-2">
                        <div class="col mx-lg-4">
                            <h6>Phone Number</h6>
                            <input class="form-control" id="phoneNumber" type="number" placeholder="" aria-label="phoneNumber" required>
                        </div>
                    </div>
                    <div class="row pt-2 justify-content-around mb-2">
                        <div class="col mx-lg-4">
                            <h6>Guest Name</h6>
                            <input class="form-control" id="guestName" type="text" placeholder="" aria-label="guestName" required>
                        </div>
                    </div>
                    <div class="row pt-2 justify-content-around mb-2">
                        <div class="col mx-lg-4">
                            <h6>Email</h6>
                            <input class="form-control" id="email" type="email" placeholder="" aria-label="email" required>
                        </div>
                    </div>
                    <div class="row pt-2 justify-content-around mb-2">
                        <div class="col mx-lg-4">
                            <h6>Payment Method</h6>
                            <select class="form-control" id="paymentMethod">
                                <option>On-Site Cash</option>
                                <option>MBanking</option>
                                <option>Indoapril</option>
                                <option>Betamart</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around mt-3 mb-3">
                    <div class="col mx-4">
                        <button class="btn btn-primary w-100" type="button" onclick="storeData()">Book</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Recommendations -->
    <section class="">
        <h2 class="text-dark text-center mb-lg-3 mt-5">Recommended</h2> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active rounded">
                    <img src="../../../img/krusty-krab.png" alt="krusty-krab" class="rounded">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="display-4 text-shadow">Krusty Krab.</h1>
                            <p>Are ya ready kids? I can't hear you~ Oh~ Who lives in a pinneapple under the sea? Absorbent and yellow and porous is he? If nautical nonsense be something you wish?</p>
                            <p><a class="btn btn-lg btn-primary" href="../krusty-krab/" role="button">Book Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../../img/auschwitz.jpg" alt="auschwitz" class="rounded">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="display-4 text-shadow">Auschwitz.</h1>
                            <p>This is a "camp" you might be search for.</p>
                            <p><a class="btn btn-lg btn-primary" href="../auschwitz/" role="button">Book Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../../img/konoha-office.jpg" alt="konoha-office" class="rounded">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="display-4 text-shadow">Konoha Office.</h1>
                            <p>Are you a Hokage? Then this is the perfect place to stay in while thinking about strategy to defeat Madara.</p>
                            <p><a class="btn btn-lg btn-primary" href="../konoha-office/" role="button">Book Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Top Destination -->
    <section class="m-5 px-lg-5">
        <h2 class="text-dark text-center text-lg-left">Top Destination</h2>
        <div class="container align-content-between">
            <div class="row mb-4">
                <div class="col-sm bg-dark p-0 rounded">
                    <a href="#">
                        <img src="../../../img/los-santos.jpg" alt="Los-Santos" class="img-fluid rounded">
                        <div class="bg-dark">
                            <p class="carousel-caption h3 text-shadow">Los Santos</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-sm-7 bg-dark mb-4 mb-lg-0 p-0 rounded">
                    <a href="#">
                        <img src="../../../img/san-fierro.jpg" alt="San-Fierro" class="img-fluid rounded">
                        <div class="bg-dark">
                            <p class="carousel-caption h3 text-shadow">San Fierro</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 bg-dark mb-4 mb-lg-0 p-0 rounded">
                    <a href="#">
                        <img src="../../../img/bikini-bottom.jpg" alt="Bikini-bottom" class="h-100 img-fluid rounded">
                        <div class="bg-dark">
                            <p class="carousel-caption h3 text-shadow">Bikini Bottom</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Benefit -->
    <hr class="m-5">
    <div class="d-flex flex-column">
        <h3 class="text-center">Why book with <span class="font-italic blueUwU">UwU</span><span class="font-italic darkorange">.go</span> ?</h3>
        <div class="d-flex m-5 px-4 flex-row">
            <i class="fas fa-money-bill-wave fa-5x forestgreen align-self-center mr-4 mr-lg-3"></i>
            <div class="mx-2 pr-5">
                <h5 class="font-weight-bold">Various Payment Options</h5>
                <p>Hey, it's The Fourth Industrial Revolution already right? You can pay through anything.</p>
            </div>
        </div>
        <div class="d-flex m-5 px-4 flex-row justify-content-end">
            <div class="mx-2 pl-5">
                <h5 class="text-right font-weight-bold">Discount Everytime, Everwhere</h5>
                <p class="text-right">This is all traveler's favorites. DISCOUNT. Yes, Discount. What the thing are in the world who do not like the discounts?</p>
            </div>
            <i class="fas fa-tags fa-5x deeppink align-self-center ml-4 ml-lg-3"></i>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container py-5">
        <hr>
        <div class="row">
            <div class="col-12 col-md">
                <img src="../../../img/UwUgo.png" alt="CompanyLogo" width="100px">
                <small class="d-block mb-3 text-muted">&copy; 2020</small>
            </div>
            <div class="col-6 col-md">
                <h5>Product</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="../../../hotels/index.html">Hotels</a></li>
                    <li><a class="text-muted" href="../../../flights/index.html">Flights</a></li>
                    <li><a class="text-muted" href="../../../trains/index.html">Trains</a></li>
                    <li><a class="text-muted" href="../../../bus/index.html">Bus & Shuttle</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="../../../about/index.html">About Us</a></li>
                    <li><a class="text-muted" href="../../../contact/index.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>