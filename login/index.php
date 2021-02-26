<?php

require_once("../php/config.php");
session_start();
if(isset($_SESSION["user"])) header("Location: ../");

if(isset($_POST['login'])){

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE name=:name OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":name" => $email,
        ":email" => $email
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman utama
            header("Location: ../");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84ad651da7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
    <script src="login.js"></script>
    <title>Login | UwU.go</title>
    <style>
        body{
            padding-top: 1rem;
            font-family: 'Rubik', sans-serif;
            background-color: rgb(154, 222, 235)
        }
        @media (max-width: 768px) {
            body{
                padding-top: 8rem;
            }
            #login-container{
                width: 75% !important;
            }
        }
        #login-container{
            width: 50%;
        }
    </style>
</head>
<body>

    <div class="text-center">
        <a href="../">
            <img src="../img/UwUgo.png" alt="CompanyLogo" width="200em" id="CompanyLogo" class="bg-white shadow-sm">
        </a>
    </div>

    <!-- Form -->
    <div id="contact">
        <form action="" method="post">
            <div class="bg-white mx-auto mt-3 mt-lg-2 p-2 container-fluid rounded shadow" id="login-container">
                <div class="row pt-2 pt-lg-1">
                    <div class="col px-lg-5 px-3">
                        <h2 class="text-center text-dark mb-4">Login</h2>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address or Name" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="password" class="form-control mt-3" placeholder="Password" required>
                        <div class="checkbox mt-3">
                            <label class="text-dark ml-1">
                              <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row pt-lg-2 mb-3">
                    <div class="col px-lg-5 px-3 d-flex">
                        <button class="btn bg-primary text-white w-100" type="submit" name="login">Login</button>
                    </div>
                </div>
                <div class="row mb-3">
                    <!-- btn btn-outline-light -->
                    <div class="col px-lg-5 px-3 d-flex">
                        <div class="w-100">
                            <a class="btn btn-white btn-outline-primary w-100" href="../register/index.html">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-3 mb-0 text-center text-muted" style="font-size: small;">&copy; 2020</p>
        </form>    
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>