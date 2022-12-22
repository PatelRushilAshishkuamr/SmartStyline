<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>


<?php 
include ("config.php");
?>
  <header id="header" class="header header-layout-type-header-1rows-floating-header header-bg-dark-shadow">
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
                    <li><a href="about.php">About</a>
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
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php"><i class="far fa-user"></i> Login</a></li>
                    <li><a href="register.php">Sign up</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-sm-auto align-self-center nav-side-icon-parent">
                <ul class="list-inline nav-side-icon-list">
                  <li class="hidden-mobile-mode"><a href="search.php" id="top-nav-search-btn"><i class="search-icon fa fa-search"></i></a></li>
                  
                  <li class="hidden-mobile-mode">
                    <div id="side-panel-trigger" class="side-panel-trigger"> <a href="search.php">
                      <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                      </div>
                      </a> </div>
                  </li>
                </ul>
                <div id="top-nav-search-form" class="clearfix">
                  <form method="GET" action="search.php">
                    <input type="text" name="search" value="" placeholder="Search Product Name" autocomplete="off" />
                  </form>
                  <a href="#" id="close-search-btn"><i class="fa fa-times"></i></a>
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
  </header>
</body>
</html>
