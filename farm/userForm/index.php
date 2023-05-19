<?php
  require_once("../config.php");
  session_start();
?><!DOCTYPE html>
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
               <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand" href="../template/index.php"><img width="250" src="../template/images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="../template/index.php">Home <span class="sr-only">(current)</span></a>
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
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Collection</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                               $fetchproduct = "SELECT * FROM `tbl_catogary`";
                               $executeproduct = mysqli_query($conn, $fetchproduct);
                               $check_prodt = mysqli_num_rows($executeproduct);

                               if ($check_prodt > 0 ) {
                                 while($d = mysqli_fetch_array($executeproduct)){  
                                   echo   "<a class='dropdown-item' href='collection.php?n=$d[0]'>$d[1]</a>";
                                 }
                               } else {
                                 echo   "<a class='dropdown-item' href='#'>Nothing</a>";
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
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                        <form class="form-inline">
                           <a href="../userForm/index.php">
                              <button class="btn  my-2 my-sm-0 nav_search-btn" type="button">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                              </button>
                           </a>
                        </form>
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
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Your Contact"/>
                            </div>
                            <div class="form-group">
                                <label for="eaddressmail"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="address" id="address" placeholder="Your address"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
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
                                <input type="Email" name="your_name" id="your_name" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
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
            if ($pass==$cpass) {
                $user_insert = "INSERT INTO `tbl_user`(`Name`, `Email`, `Phone`, `Address`, `Password`) 
                VALUES ('$name','$email','$phone','$address','$pass')";
    
                $execute = mysqli_query($conn,$user_insert);
                
                if($execute) {
                    echo "<script>
                    alert('data save successfully');
                    </script>";
                }
                else{
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
               
            }
            else{
                echo "<script>
                alert('Invalid Credentials');
                </script>";
            }

        }
    
    ?>























</body><!-- This templates was made by Colorlib (https://colorlib.com) -->







</html>