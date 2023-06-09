<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Famms - Collection</title>
    <link rel="icon" href="images/favicon.png" type="image/icon type">

</head>
<body>
    <?php
    include('header.php');
    ?>
<div class="hero_area">
        
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row gy-3">
               <?php
                     $cat = $_GET["n"];
                     $fetchproduct = "SELECT * FROM `table_products` where product_catogary = $cat ";
                     $executeproduct = mysqli_query($conn, $fetchproduct);
                     $check_prodt = mysqli_num_rows($executeproduct);

                     if ($check_prodt > 0) {
                        while($convert_array = mysqli_fetch_array($executeproduct)){ ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="box h-100">
                               <div class="option_container">
                                  <div class="options">
                                     <a href="" class="option1">
                                        Add to cart
                                     </a>
                                     <a href="" class="option2">
                                     Buy Now
                                     </a>
                                  </div>
                               </div>
                               <div class="img-box">
                                  <img src="<?php echo $convert_array[5]; ?>" alt="">
                               </div>
                               <div class="card-title">
                                  <h5> <?php echo $convert_array[1]; ?> </h5>
                               </div>
                               <div class="detail-box">
                               <h6> Rs. 
                                  <?php echo number_format($convert_array[2], 2, '.', ','); ?>
                                  </h6>
                               </div>
                            </div>
                         </div>
                   <?php     }
                      } else {
                          echo "Nothing To Show";
                      }
                      
 
 
                ?>
 

              
    
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->
      <?php
       include('footer.php');
      ?>
    
</body>
</html>