<!DOCTYPE html>
<html>
<head>
<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
</
</head>
<body class="tm-container-1300px has-side-panel side-panel-right">

 <?php
include ("header1.php");
?>
  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-90 pb-90">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Prouct Details</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Category</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">Product</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Product Detalis</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

             
        
    <section>
<?php    
  include("config.php");
  $product_id=$_GET['product_id'];
    $sql = "select * from beauty_product where status=0 and product_id='".$_REQUEST['product_id']."'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
      {
    $Path="../productimage/".$row['image1'];
      ?>
      <div class="container pb-90">
        <div class="section-content">
          <div class="product-single">
            <div class="row">
              <div class="col-md-6">
                <div class="product-image-slider lightgallery-lightbox">
                  <div class="tm-owl-thumb-carousel" data-nav="true" data-slider-id="1">
                    <div data-thumb="">
                      <?php echo "<img alt='' class='img-fullwidth'  src='../admin/productimage/$row[3]''>" ?>
                    </div>
                     <div data-thumb="">
                      <?php echo "<img alt='' class='img-fullwidth'  src='../admin/productimage/$row[4]''>" ?></a>
                    </div>
                  
                  </div>
                  <ul class="tm-owl-thumbs" data-slider-id="1">
                    <li class="tm-owl-thumb-item"><?php echo "<img alt='' class='img-fullwidth'  src='../admin/productimage/$row[3]''>" ?></li>
                    <li class="tm-owl-thumb-item"><?php echo "<img alt='' class='img-fullwidth'  src='../admin/productimage/$row[4]''>" ?></li>
                   
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="product-summary">
                  <h2 class="product-title mt-0"><?php echo $row['product_name'];?></h2>
                  
                  <p class="price"><span class="amount"><span class="currency-symbol"><small>₹</span><del><?php echo $row['price'];?></del></small> <?php echo $row['total_price'];?></span><sup style="color:red;">  <?php echo $row['discount'];?>% off </sup></p>


                                    
                  


                  <div class="product_meta">
                  <span class="sku_wrapper">Ingredients</span>  
                  <div class="short-description">
                    <?php echo $row['ingredients']?>
                    
                  </div>
                </div>
                  <div class="product_meta">
                    <span class="posted_in" >Category :-  
                    
                      <?php 
                      $id=$row['category_id'];
                      $sql1="select category_name from beauty_category where category_id=$id and status=0";
                      $result1 = mysqli_query($con,$sql1);
                      while($row1 = mysqli_fetch_array($result1))
                      {
                        echo $row1['category_name'];
                      }
                      ?>
                    </span>
                    <span class="sku_wrapper">Description</span><div class="short-description"><?php echo $row['description'];?></div>
                    
                  </div>
                  <div class="btn-add-to-cart">
                    <div class="quantity">
                      <input class="minus" type="button" value="-">
                      <input type="number" id="quantity_5f0c6f4cb0b78" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
                      <input class="plus" type="button" value="+">
                    </div>
                    <a href="login.php" class="btn btn-theme-colored1 ml-10" onclick="alert('Login first')">Add to cart</a>
                  </div>
                </div>
              </div>
             
            </div>
           
                <!-- End Isotope Gallery Grid -->
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php
include ("footer.php");
  ?>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/shop-product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:51:35 GMT -->
</html>