<?php
   session_start();
   
  global $user;
  @$user=$_SESSION["user"];  
  echo "User : " . $user;   

    


  if($user == "")
  {
    echo "<script language='javascript'>window.location.href='index.php';</script>";             
  }
?>

<?php
  global $name,$mob_number;
    include("config.php");
    $sql= "select * from customer where mob_number = '$user' and status = 0";
        $result=mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
        while($row = mysqli_fetch_array($result))
          {
          $cust_fullname = $row['cust_fullname'];
          $mob_number = $row['mob_number'];
          
          }
  ?>



<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/page-form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:51:18 GMT -->
<head>
<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="HairCare- Beauty Salon & Barber HTML5 Template for Women & Men"/>
<meta name="keywords" content="agency, business, charity, corporate, fundraising"/>
<meta name="author" content="ThemeMascot"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<!-- Page Title -->
<title>Smart Stylin</title>



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
<body>
<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
            <ul class="element contact-info">
              <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Mo: 6359822773</li>
              <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i> 
 </li>
              <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> Ahmdedabad</li>
            </ul>
          </div>
          <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
            <div class="element pt-0 pb-0">
              <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                <li><a class="social-link" href="#" ><i class="fab fa-facebook"></i></a></li>
                <li><a class="social-link" href="#" ><i class="fab fa-twitter"></i></a></li>
                <li><a class="social-link" href="#" ><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
            <div class="element pt-0 pt-lg-10 pb-0">
              <a href="appointment.php" class="">Make an Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header header-layout-type-header-1rows-floating-header header-bg-dark-shadow">
    <div class="header-nav tm-enable-navbar-hide-on-scroll">
      <div class="header-nav-wrapper navbar-scrolltofixed">
        <div class="menuzord-container header-nav-container" >
          <div class="container position-relative">
            <div class="row header-nav-col-row"><img class="logo-light logo-default logo-1x" style="width:200px; height: 200px; float: left;" src="images/smartlogo.png" alt="Logo">
              
              <div class="col-sm-auto ms-auto pe-0 align-self-center">
                <nav id="top-primary-nav" class="menuzord theme-color1" data-effect="fade" data-animation="none" data-align="right" style="float:left">
                  <ul id="main-nav" class="menuzord-menu" style="float: left;">
                    <li class="active">
                      <a href="index.php">Home</a>
                    </li>
                    
                    <li><a href="#">Category</a>
                      
                      <ul class="dropdown">
                      
                       <?php 
include('config.php');
$sql="select * from beauty_category where status=0 LIMIT 0,13";
$cat=mysqli_query($con,$sql);
while($c=mysqli_fetch_array($cat))
{
  ?>

    <li>     <a  href="allcategory.php?category_id=<?php echo $c['category_id']; ?>">
    
  <?php echo $c['category_name'];?></a></li> 
    
                                                            
<?php
}
?>    
                    </ul>

                    </li>
                    <li><a href="#">Other Services</a>
                      <ul class="dropdown">
                        <li><a href="package.php">Package</a></li>
                        <li><a href="menu_list.php">Menu List</a>
                        <li><a href="course.php">Course</a></li>
                        </li>
                      </ul>
                    </li>
                    <li><a href="editprofile.php"><i class="far fa-user"></i> Edit Profile</a></li>
                    <li><a href="changepassword.php">Change Password</a></li>
                    
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </nav>
              </div><div class="col-sm-auto align-self-center nav-side-icon-parent">
                <ul class="list-inline nav-side-icon-list">
                  <li class="hidden-mobile-mode"><a href="serach.php" id="top-nav-search-btn"><i class="search-icon fa fa-search"></i></a></li>
                  
                  <li class="hidden-mobile-mode">
                    <div id="side-panel-trigger" class="side-panel-trigger"> <a href="search.php">
                      <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                      </div>
                      </a> </div>
                  </li>
                </ul>
                <div id="top-nav-search-form" class="clearfix">
                  <form action="search.php" method="GET">
                    <input type="text" value="" name="search" placeholder="Search Product Name" autocomplete="off" />
                  </form>
                  
                </div>
              </div>
            </div>
            <div class="row header-nav-clone-col-row d-block d-xl-none">
               <div class="col-12">
                <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                 <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                 </ul>
                </nav>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="side-panel-body-overlay"></div>
<div id="side-panel-container" class="dark" data-tm-bg-img="images/side-push-bg.jpg">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="fa fa-times side-panel-trigger-icon"></i></a></div>
    <img class="logo mb-50" src="images/smartlogo.png" width="200" height="200" alt="Logo">
    <p>Skin care is the range of practices that support skin integrity, enhance its appearance and relieve skin conditions. They can include nutrition, avoidance of excessive sun exposure and appropriate use of emollients.</p>
    <div class="widget">
      <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
      <div class="latest-posts">
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="images/blog/h1.png" alt="" style="height:80px;"></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Package </a></h5>
            <p>Package include verious types of bridal packages,normal package and any type of package.</p>
          </div>
        </article>
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="images/blog/h2.png" alt="" style="height:80px;"></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Course </a></h5>
            <p>In Course,many types of included course.</p>
          </div>
        </article>
        <article class="post clearfix pb-0 mb-10">
          <a class="post-thumb" href="#"><img src="images/blog/h.png" alt="" style="height:80px;"></a>
          <div class="post-right">
            <h5 class="post-title mt-0"><a href="#">Product</a></h5>
            <p>Many verity of product like make up,Skin,Hair etc.</p>
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
            <div class="text">Manthan/Rushil</div>
          </li>
          <li class="contact-phone">
            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
            <div class="text"><a href="tel:+91-6359822773">+91-6359822773</a></div>
          </li>
          <li class="contact-email">
            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
            <div class="text"><a href="mailto:smartstylin72@gmail.com">smartstylin72@gmail.com</a></div>
          </li>
          <li class="contact-address">
            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
            <div class="text">Ahmedabad</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="wrapper" class="clearfix">


          </div>
        </div>
      </div>
    </div>
  </header>
</body>
</html>