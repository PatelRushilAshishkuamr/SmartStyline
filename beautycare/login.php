
<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<head>
<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<body>
</head>
<?php 
include("header1.php");
?>

  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Login</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
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
                  <label for="form_username_email">Email</label>
                  <input id="form_username_email" value="" placeholder="Enter Email Id" name="email_id" class="form-control" type="text" required>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_password">Password</label>
                  <input id="form_password" value="" placeholder="Enter Password" name="password" class="form-control" type="password" required>
                </div>
              </div>
              <div class="checkbox mt-15">
                <label for="form_checkbox">
                  <input id="form_checkbox" name="form_checkbox" type="checkbox">
                  Remember me </label>
              </div>
              <div class="mb-3 tm-sc-button mt-10">
                <button type="submit" class="btn btn-dark" name="submit">Login</a></button>
              </div>



<!--------------Log in page------------------->
<?php
include('config.php');
  if(isset($_POST['submit']))
  {
    
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $sql = "select * from customer where email_id = '$email_id' and password = '$password' and status=0";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    echo "<script language='javascript'>alert(' session ".$email_id."')</script>";
    if($count > 0)
    {
      while($row = mysqli_fetch_array($result))
      {
          $type= $row['type'];
      }
      if(($type=="admin")||($type=='Admin'))
      {
      $_SESSION['user'] = $email_id;                
  echo "<script language='javascript'>window.location.href='index.php';</script>";
      }
      elseif(($type=="customer")||($type=='Customer'))
      {
      $_SESSION['user'] = $email_id;

      echo "<script language='javascript'>alert(' session ".$_SESSION['user']."')</script>";

       echo "<script language='javascript'>window.location.href='./customer/index.php';</script>";
      }
      }
    else
    {
  echo "<script language='javascript'>alert('Your Email Id  or Password is wrong');</script>";
        
        
    }
    }
  ?>




              <div class="clearfix pt-15">
                <a class="text-theme-colored1 font-weight-600 font-size-14" href="forgot.php">Forgot Your Password?</a>
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