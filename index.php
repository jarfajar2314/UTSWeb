<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84ad651da7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
    <title>Home | UwU.go</title>
    <style>
        body{
            font-family: 'Rubik', sans-serif;
            padding-top: 4.5rem;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary easeinout">
        <a href="" class="navbar-brand">
            <img src="img/UwUgo.png" alt="CompanyLogo" width="110em" id="CompanyLogo" class="bg-white shadow">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="hotels/">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="flights/">Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="trains/">Trains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" id="nav-link" href="bus/">Bus & Shuttle</a>
                </li>
            </ul>
        </div>
        <div class="ml-auto" id="lognReg">
            <?php if(isset($_SESSION["user"])){ ?>
                <a href="php/logout.php" class="btn btn-outline-light">Logout</a>
            <?php }else{ ?>
                <a href="login/" class="btn btn-outline-light">Login</a>
                <a href="register/" class="btn btn-outline-light">Register</a>
            <?php } ?>
        </div>
    </nav>
    
    <!-- Categories -->
    <main role="main" class="container">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="hotels/" class="nav-link">
                            <div class="card mb-4 shadow darkorange-hover hotels-img img-bg">
                                <i class="fas fa-hotel fa-7x mx-auto my-4 darkorange"></i>
                                <h5 class="text-center m-4 darkorange font-weight-bold">Hotels</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="flights/" class="nav-link">
                            <div class="card mb-4 shadow darkorchid-hover flights-img img-bg">
                                <i class="fas fa-plane fa-7x mx-auto my-4 darkorchid"></i>
                                <h5 class="text-center m-4 darkorchid font-weight-bold">Flights</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="trains/" class="nav-link">
                            <div class="card mb-4 shadow deeppink-hover trains-img img-bg">
                                <i class="fas fa-train fa-7x mx-auto my-4 deeppink"></i>
                                <h5 class="text-center m-4 deeppink font-weight-bold">Trains</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="bus/" class="nav-link">
                            <div class="card mb-4 shadow forestgreen-hover bus-img img-bg">
                                <i class="fas fa-bus fa-7x mx-auto my-4 forestgreen"></i>
                                <p class="text-center m-4 forestgreen font-weight-bold">Bus & Shuttle</p>
                            </div>
                       </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <h1>Understandable Wherever U Go</h1>
            <p>Staying in a comfortable hotel or inn is one of the best ways to enjoy a trip, whether for a vacation or a business trip. At <span class="font-italic blueUwU">UwU</span><span class="font-italic darkorange">.go</span>, you can easily find the right hotel or lodging according to your budget, ranging from cheap hotels, boutique hotels, to 5-star hotels. Now, the moment to find the best hotel is also an important thing, especially for those of you who are planning a vacation together. You need to complete information about the facilities and uniqueness offered by each hotel to suit your needs. For example, for those who like to take pictures, you can choose an industrialist-style hotel or a sharia hotel for those of you who are looking for an Islamic nuance.</p>
        </div>
    </main>
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
    <footer class="container py-5">
        <hr>
        <div class="row">
            <div class="col-12 col-md">
                <img src="img/UwUgo.png" alt="CompanyLogo" width="100px">
                <small class="d-block mb-3 text-muted">&copy; 2020</small>
            </div>
            <div class="col-6 col-md">
                <h5>Product</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="hotels/">Hotels</a></li>
                    <li><a class="text-muted" href="flights/">Flights</a></li>
                    <li><a class="text-muted" href="trains/">Trains</a></li>
                    <li><a class="text-muted" href="bus/">Bus & Shuttle</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="about/">About Us</a></li>
                    <li><a class="text-muted" href="contact/">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>