<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84ad651da7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
    <title>About | UwU.go</title>
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary easeinout">
        <a href="../" class="navbar-brand">
            <img src="../img/UwUgo.png" alt="CompanyLogo" width="110em" id="CompanyLogo" class="bg-white shadow-sm">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
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
            <a href="../login/" class="btn btn-outline-light">Login</a>
            <a href="../register/" class="btn btn-outline-light">Register</a>
        </div>
    </nav>

    <h2 class="text-center text-dark mt-5 mb-3">About <span class="font-italic blueUwU">UwU</span><span class="font-italic darkorange">.go</span></h2>

    <main role="main" class="container">
        <div class="jumbotron">
          <h1>Leading Company</h1>
          <p class="lead"><span class="font-italic blueUwU">UwU</span><span class="font-italic darkorange">.go</span> is a leading in both world and akheerat online travel company that provides a infinite range of travel needs in one platform, enabling customers to create moments together with their loved ones. <span class="font-italic blueUwU">UwU</span><span class="font-italic darkorange">.go</span> offers flights, hotels, trains, and even busses.</p>
        </div>
    </main>
    
    <!-- Benefit -->
    <hr class="m-5">
    <div class="d-flex flex-column">
        <h3 class="text-center">Why book with <span class="font-italic blueUwU">UwU</span><span class="font-italic darkorange">.go</span> ?</h3>
        <div class="d-flex m-5 px-4 flex-row">
            <i class="fas fa-money-bill-wave fa-5x forestgreen align-self-center mr-4 mr-lg-3"></i>
            <div class="mx-2 pr-5">
                <h5 class="font-weight-bold text-dark">Various Payment Options</h5>
                <p>Hey, it's The Fourth Industrial Revolution already right? You can pay through anything.</p>
            </div>
        </div>
        <div class="d-flex m-5 px-4 flex-row justify-content-end">
            <div class="mx-2 pl-5">
                <h5 class="text-right font-weight-bold text-dark">Discount Everytime, Everwhere</h5>
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