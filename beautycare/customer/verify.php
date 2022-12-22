<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/page-form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:51:18 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="HairCare- Beauty Salon & Barber HTML5 Template for Women & Men"/>
<meta name="keywords" content="agency, business, charity, corporate, fundraising"/>
<meta name="author" content="ThemeMascot"/>

<!-- Page Title -->
<title>Smart Stylin</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="css/javascript-plugins-bundle.css" rel="stylesheet"/>

<!-- CSS | menuzord megamenu skins -->
<link href="js/menuzord/css/menuzord.css" rel="stylesheet"/>

<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>

<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/javascript-plugins-bundle.js"></script>
<script src="js/menuzord/js/menuzord.js"></script>

<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="tm-container-1170px has-side-panel side-panel-right switchable-logo">
<div class="side-panel-body-overlay"></div>
<div id="side-panel-container" class="dark" data-tm-bg-img="images/side-push-bg.jpg">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="fa fa-times side-panel-trigger-icon"></i></a></div>
    <img class="logo mb-50" src="images/logo-wide%402x.png" width="200" alt="Logo">
    <p>Skin care is the range of practices that support skin integrity, enhance its appearance and relieve skin conditions. They can include nutrition, avoidance of excessive sun exposure and appropriate use of emollients.</p>
    <div class="widget">
      <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
      <div class="latest-posts">
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="images/blog/s1.jpg" alt=""></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="images/blog/s2.jpg" alt=""></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="images/blog/s1.jpg" alt=""></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
            <p>Lorem ipsum dolor...</p>
          </div>
        </article>
      </div>
    </div>

    <div class="widget">
      <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Contact Info</h5>
      <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
        <ul>
          <li class="contact-name">
            <div class="icon"><i class="flaticon-contact-037-address"></i></div>
            <div class="text">Hemangi Panchal</div>
          </li>
          <li class="contact-phone">
            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
            <div class="text"><a href="tel:+91-8200608347">+91-8200608347</a></div>
          </li>
          <li class="contact-email">
            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
            <div class="text"><a href="mailto:smartstylin0123@gmail.com">smartstylin0123@gmail.com</a></div>
          </li>
          <li class="contact-address">
            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
            <div class="text">201/Tirupati Metro Mall</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="wrapper" class="clearfix">
  <!-- Header -->
<?php 
include("header1.php");
?>
<?php
  if(isset($_POST['submit']))
{
  $mob_number=$_GET['mob_number'];
  
$user_otp=$_POST['otp'];
$sql="SELECT `otp` FROM `customer` WHERE `mob_number`=$mob_number";


list($otp)=mysqli_fetch_array(mysqli_query($con,$sql));
if($otp==$user_otp)
{
  $sql2="UPDATE `customer` SET `status`=0 WHERE `mob_number`=$mob_number";
  
  $result2=mysqli_query($con,$sql2);
  
  
  
  if(mysqli_affected_rows($con)>0)
  {
    
    echo "<script>alert('your account created successfully..you can now login to your acocount..');</script>";
              echo '<script>window.location.href="index.php";</script>';
    
  }
  else
  {
    
    echo "<script>alert('something went wroing');</script>";
    echo "<script>window.location.href='verify.php';</script>";
    
  } 
    
}
else
{
  echo "<script>alert('something went wroing');</script>";
    echo "<script>window.location.href='verify.php';</script>";
}
}
 ?>
              

  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">My Account</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="index.php" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                
                  <span class="active">Login</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 mb-40">
            <h4 class="text-gray mt-0 pt-10"> Login</h4>
            <hr>
           
            <form name="login-form" class="clearfix" method="post">
              
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_password">OTP</label>
                  <input id="form_password" name="otp" class="form-control" type="text">
                </div>
              </div>
              
              <div class="mb-3 tm-sc-button mt-10">
                <button type="submit" class="btn btn-dark" name="submit">Verify</button>
              </div>


            </form>

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<?php
include('footer.php');
?>
</body>

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/page-form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:51:18 GMT -->
</html>