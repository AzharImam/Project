<?php
require_once("../config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>Famms - Fashion HTML Template</title>
   <style>
      @media (min-width: 576px) {
         .dropdown-menu {
            display: block;
            opacity: 0;
            transition: all 0.6s;
         }
      }

      .dropdown:hover .dropdown-menu {
         display: block;
         margin-top: 0;
         opacity: 1;

      }

      .dropdown-menu {
         max-width: 210px;
         max-height: 175px;
         overflow-y: scroll;
      }
   </style>

   <link rel="icon" href="images/favicon.png" type="image/icon type">

   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

   <!-- header section strats -->
   <header class="header_section">
      <div class="container">
         <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php"><img width="250" src="images/logo.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.php">About</a>
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
                              echo "<a class='dropdown-item' href='collection.php?n=$d[0]'>$d[1]</a>";
                           }
                        } else {
                           echo "<a class='dropdown-item' href='#'>Nothing</a>";
                        }

                        ?>
                     </div>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="product.php">Products</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item mr-1">
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
                        <a class="btn btn-outline-warning btn-sm mb-0 me-3 dropdown-toggle" href="#" id="navbarDropdown"
                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="font-weight-bold" style="color:black;">
                              <?php echo $_SESSION['uname']; ?>
                           </span>
                        </a>
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
                  </div>
               </ul>
            </div>
         </nav>
      </div>
   </header>
</body>

</html>