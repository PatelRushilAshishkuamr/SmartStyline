<!DOCTYPE html>
<html>
<head>
  <!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
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
              <h2 class="title">Course</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  
                  <span><a href="#">Course</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Course Detalis</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

             
        
    <section>
    <?php    
  
    $sql = "select * from course where status=0";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
      {
    $Path="admin/courseimage/".$row['image'];
      ?>
      <div class="container pb-90">
        <div class="section-content">
          <div class="product-single">
            <div class="row">
              <div class="col-md-6">
                <div class="product-image-slider lightgallery-lightbox">
                  <div class="tm-owl-thumb-carousel" data-nav="true" data-slider-id="1">
                    <div data-thumb="">
                      <?php echo "<img alt='' class='img-fullwidth'  src='../../admin/courseimage/$row[2]''>" ?>
                    </div>
                     
                  
                  </div>
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="product-summary">
                  <h2 class="product-title mt-0"><?php echo $row['course_name'];?></h2>
                  
                  <p class="price"><span class="amount"><span class="currency-symbol"><small>₹</span><?php echo $row['price'];?></small></span></p>

                  <div class="product_meta">
                  <span class="sku_wrapper">Description</span>  
                  <div class="short-description">
                    <?php echo $row['description']?>
                  </div>
                </div>
                  
                  <a href="index.php"><input type="submit" name="submit" value="Back To Home" style="color: yellow; background-color: black ; height: 40px; width: 200px;" onclick="alert('You wil be redirect to home page')"></a>
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