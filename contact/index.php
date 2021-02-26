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
    <title>Contact | UwU.go</title>
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
            <?php if(isset($_SESSION["user"])){ ?>
                <a href="../php/logout.php" class="btn btn-outline-light">Logout</a>
            <?php }else{ ?>
                <a href="../login/" class="btn btn-outline-light">Login</a>
                <a href="../register/" class="btn btn-outline-light">Register</a>
            <?php } ?>
        </div>
    </nav>

    <h2 class="text-center text-dark mt-5">Contact Us</h2>

    <!-- Form -->
    <div id="contact">
        <form action="" method="post">
            <div class="bg-white mx-auto p-2 container-fluid rounded shadow" id="form-container">
                <div class="row pt-2 pt-lg-4">
                    <div class="col px-lg-5 px-3">
                        <h6>Name</h6>
                        <input class="form-control" type="text" placeholder="Kimi no namae wa" aria-label="name">
                    </div>
                </div>
                <div class="row pt-2 pt-lg-4">
                    <div class="col px-lg-5 px-3">
                        <h6>Email</h6>
                        <input class="form-control" type="email" placeholder="Your email" aria-label="email">
                    </div>
                </div>
                <div class="row pt-2 pt-lg-4">
                    <div class="col px-lg-5 px-3">
                        <h6>Product</h6>
                        <select class="form-control" id="product">
                            <option>Hotels</option>
                            <option>Flights</option>
                            <option>Trains</option>
                            <option>Bus & Shuttle</option>
                        </select>
                    </div>
                </div>
                <div class="row pt-2 pt-lg-4">
                    <div class="col px-lg-5 px-3">
                        <h6>Tell us your concern</h6>
                        <textarea class="form-control" id="text-area" rows="3" placeholder="Write your essay here"></textarea>
                    </div>
                </div>
                <div class="row pt-2 pt-lg-4">
                    <div class="col px-lg-5 px-3">
                        <h6>Attach a File</h6>
                        <input class="form-control" type="file" aria-label="file">
                    </div>
                </div>
                <div class="row pt-2 pt-lg-4 mb-3">
                    <div class="col px-lg-5 px-3 pt-4 pt-lg-0 d-flex">
                        <!-- <button class="btn btn-outline-primary p-1 h-50 w-50 mt-0 mt-lg-4" type="submit">Search</button> -->
                        <button class="btn bg-primary text-white w-100" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>    
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