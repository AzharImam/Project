<?php
require_once("../config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">


    <link rel="icon" href="../template/images/favicon.png" type="image/icon type">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../template/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="../template/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../template/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../template/css/responsive.css" rel="stylesheet" />

</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container mt-1">
                <a class="navbar-brand" href="../template/index.php"><img width="250" src="../template/images/logo.png"
                        alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../template/index.php">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../template/about.php">About</a>
                        </li>

                        <!-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.php">About</a></li>
                              <li><a href="testimonial.php">Testimonial</a></li>
                           </ul>
                        </li> -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Collection</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
                                $fetchproduct = "SELECT * FROM `tbl_catogary`";
                                $executeproduct = mysqli_query($conn, $fetchproduct);
                                $check_prodt = mysqli_num_rows($executeproduct);

                                if ($check_prodt > 0) {
                                    while ($d = mysqli_fetch_array($executeproduct)) {
                                        echo "<a class='dropdown-item' href='../template/collection.php?n=$d[0]'>$d[1]</a>";
                                    }
                                } else {
                                    echo "<a class='dropdown-item' href='#'>Nothing</a>";
                                }

                                ?>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../template/product.php">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../template/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="position-absolute top-0 translate-middle badge rounded-pill bg-warning">
                                    <?php if (isset($_SESSION["mycart"])) {
                                        echo count($_SESSION["mycart"]);
                                    } else {
                                        echo 0;
                                    }
                                    ?>

                                </span>
                            </a>
                        </li>

                        <div class="dropdown mr-4">
                            <?php
                            if (isset($_SESSION['uname']) && !empty($_SESSION['uname'])) { ?>
                                <button class="btn btn-outline-warning btn-sm mb-0 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="font-weight-bold" style="color:black;">
                                        <?php echo $_SESSION['uname']; ?>
                                    </span>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Profile Management</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="../userForm/logout.php">Logout</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                    <?php
                                // session_destroy();
                            } else { ?>
                                    <li class="nav-item">
                                        <a href="../userForm/index.php" class="nav-link">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <?php
                            }
                            ?>
                            </button>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Your Contact" />
                            </div>
                            <div class="form-group">
                                <label for="eaddressmail"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="address" id="address" placeholder="Your address" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="Email" name="your_name" id="your_name" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <?php

    // SignUp
    if (isset($_POST["signup"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $pass = $_POST["pass"];
        $cpass = $_POST["re_pass"];
        if ($pass == $cpass) {
            $user_insert = "INSERT INTO `tbl_user`(`Name`, `Email`, `Phone`, `Address`, `Password`) 
                VALUES ('$name','$email','$phone','$address','$pass')";

            $execute = mysqli_query($conn, $user_insert);

            if ($execute) {
                echo "<script>
                    alert('data save successfully');
                    </script>";
            } else {
                echo mysqli_error($conn);
            }
        } else {
            echo "<script>
                    alert('PAssword Does not Match');
                    </script>";
        }

    }


    // Login Button
    
    if (isset($_POST["signin"])) {

        $log_email = $_POST["your_name"];
        $log_pass = $_POST["your_pass"];

        $login_query = "select * from tbl_user where Email = '$log_email' and Password= '$log_pass'";
        $run_login = mysqli_query($conn, $login_query);
        $check_record = mysqli_num_rows($run_login);
        if ($check_record == 1) {
            $data_uthao = mysqli_fetch_array($run_login);
            $_SESSION["uname"] = $data_uthao[1];
            echo "<script>
                    window.location.href='../template/index.php'
                </script>";

        } else {
            echo "<script>
                alert('Invalid Credentials');
                </script>";
        }
    }
    ?>
    <?php
    if (isset($_SESSION['uname'])) { ?>
        <script>
            window.location.href = "../template/index.php";
        </script>
        <?php
    }
    ?>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>
<!-- jQery -->
<script src="../template/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="../template/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="../template/js/bootstrap.js"></script>
<!-- custom js -->
<script src="../template/js/custom.js"></script>

</html>