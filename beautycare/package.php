<!DOCTYPE html>
<html>
<head>
  <title>Smart Styiln</title>
  <!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
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
              <h2 class="title">Package</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">package</a></span>
                  
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="" >
<div class="col-md-12 text-center">
<h2 class="title" style="margin-bottom: -100px;">Package</h2>
      <div class="container pb-90" >

        <div class="section-content" >
          
          <div class="row">

            <div class="col-md-9" style="margin-left: 160px;">
              <!-- Isotope Filter -->
              <!-- End Isotope Filter -->

              <!-- Isotope Gallery Grid -->
              <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox" >
                <div class="isotope-layout-inner">
                  <?php    
  
    $sql = "select * from package where status=0";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
      {
    $Path="admin/packageimage/".$row['image'];
      ?>
                  <!-- Isotope Item Start -->
                  <div class="isotope-item cat1 cat3">
                    <div class="isotope-item-inner">
                      <div class="product">
                        <div class="product-header">
                          <div class="thumb image-swap">
                            <a href="package_details.php?package_id=<?php echo $row['package_id'];?>">
                              <?php echo "<img alt='' class='img-fluid w-100'  src='../admin/packageimage/$row[1]'style='border:2px solid black;width:250px;height:250px';>" ?>
              
                            </a>
                            <a href="package_details.php">  </a>
                          </div>
                          
                        </div>
                        <div class="product-details">
                          <h5 class="product-title"><a href="package_details.php?package_id=<?php echo $row['package_id'];?>"><?php echo $row['package_title'];?></a></h5>
                          <span class="package_price">
                            <ins><span class="amount"><a href="package_details.php">₹<?php echo $row['package_price'];?></a></span></ins>
                          </span>
                        </div>
 
                      </div>

                      </div>

                  </div>
                 <?php
  }
?>
            
        </div>


      </div>

</div>
</div></div></div>
    </section>

  </div>
  <!-- end main-content -->

  <!-- Footer -->

  <?php 
  include("footer.php");
   ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/shop-products-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:51:18 GMT -->
</html>