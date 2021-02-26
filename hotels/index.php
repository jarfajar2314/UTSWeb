<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="hotels.css" rel="stylesheet">
    <script src="hotels.js"></script>
    <script src="https://kit.fontawesome.com/84ad651da7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
    <title>Hotels | UwU.go</title>
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
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary easeinout">
        <a href="../" class="navbar-brand">
            <img src="../img/UwUgo.png" alt="CompanyLogo" width="110em" id="CompanyLogo" class="bg-white shadow-sm">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active desktop-only-border rounded">
                    <a class="nav-link text-light" id="nav-link" href="../hotels/">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="../flights/">Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="../trains/">Trains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="../bus/">Bus & Shuttle</a>
                </li>
            </ul>
        </div>
        <div class="ml-auto" id="lognReg">
            <?php if(isset($_SESSION["user"])){ ?>
                <a href="../php/logout.php" class="btn btn-outline-light">Logout</a>
            <?php }else{ ?>
                <a href="../login/" class="btn btn-outline-light">Login</a>
                <a href="../register/" class="btn btn-outline-light">Register</a>
            <?php } ?>
        </div>
    </nav>

    <h2 class="text-center text-dark mt-5">Hotels</h2>

    <!-- Search Box -->
    <div id="search">
        <form action="" method="post">
            <div class="bg-white w-75 mx-auto mt-5 mb-3 p-3 shadow" id="SearchBox">
                <input class="form-control border-0 text-truncate" type="text" placeholder="Search City, Destination, or Hotel name" aria-label="Search">
            </div>
            <div class="bg-white w-75 mx-auto p-3 container rounded shadow" id="">
                <!-- <input class="form-control border-0 " type="text" placeholder="Search name, buildings, or place" aria-label="Search"> -->
                <div class="row justify-content-around">
                    <div class="col-sm-3">
                        <h6>Check In</h6>
                        <input class="form-control" type="date" placeholder="" aria-label="checkIn" id="dateIn" onchange="duration()">
                    </div>
                    <div class="col-sm-3 pt-4 pt-lg-0">
                        <h6>Check Out</h6>
                        <input class="form-control" type="date" placeholder="" aria-label="checkOut" id="dateOut" onchange="duration()">
                    </div>
                    <div class="col-sm-3 pt-4 pt-lg-0">
                        <h6>Duration</h6>
                        <p class="text-dark pt-0 pt-lg-1" id="out"></p>
                    </div>
                </div>
                <div class="row pt-2 justify-content-around mb-3">
                    <div class="col-sm-3">
                        <h6>Guests</h6>
                        <input class="form-control" type="number" placeholder="" aria-label="checkIn" min="1" max="4">
                    </div>
                    <div class="col-sm-3 pt-4 pt-lg-0">
                        <h6>Rooms</h6>
                        <input class="form-control" type="number" placeholder="" aria-label="checkIn" min="1" max="3">
                    </div>
                    <div class="col-sm-3 pt-4 pt-lg-0 d-flex">
                        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search fa-md primary"></i> Search</button>
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
                    <img src="../img/krusty-krab.png" alt="krusty-krab" class="rounded">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="display-4 text-shadow">Krusty Krab.</h1>
                            <p>Are ya ready kids? I can't hear you~ Oh~ Who lives in a pinneapple under the sea? Absorbent and yellow and porous is he? If nautical nonsense be something you wish?</p>
                            <p><a class="btn btn-lg btn-primary" href="content/krusty-krab/" role="button">Book Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/auschwitz.jpg" alt="auschwitz" class="rounded">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="display-4 text-shadow">Auschwitz.</h1>
                            <p>This is a "camp" you might be search for.</p>
                            <p><a class="btn btn-lg btn-primary" href="content/auschwitz/" role="button">Book Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/konoha-office.jpg" alt="konoha-office" class="rounded">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="display-4 text-shadow">Konoha Office.</h1>
                            <p>Are you a Hokage? Then this is the perfect place to stay in while thinking about strategy to defeat Madara.</p>
                            <p><a class="btn btn-lg btn-primary" href="content/konoha-office/" role="button">Book Now</a></p>
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
                        <img src="../img/los-santos.jpg" alt="Los-Santos" class="img-fluid rounded">
                        <div class="bg-dark">
                            <p class="carousel-caption h3 text-shadow">Los Santos</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-sm-7 bg-dark mb-4 mb-lg-0 p-0 rounded">
                    <a href="#">
                        <img src="../img/san-fierro.jpg" alt="San-Fierro" class="img-fluid rounded">
                        <div class="bg-dark">
                            <p class="carousel-caption h3 text-shadow">San Fierro</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 bg-dark mb-4 mb-lg-0 p-0 rounded">
                    <a href="#">
                        <img src="../img/bikini-bottom.jpg" alt="Bikini-bottom" class="h-100 img-fluid rounded">
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
                <img src="../img/UwUgo.png" alt="CompanyLogo" width="100px">
                <small class="d-block mb-3 text-muted">&copy; 2020</small>
            </div>
            <div class="col-6 col-md">
                <h5>Product</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="../hotels/">Hotels</a></li>
                    <li><a class="text-muted" href="../flights/">Flights</a></li>
                    <li><a class="text-muted" href="../trains/">Trains</a></li>
                    <li><a class="text-muted" href="../bus/">Bus & Shuttle</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="../about/">About Us</a></li>
                    <li><a class="text-muted" href="../contact/">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>