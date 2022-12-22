<!DOCTYPE html>
<html>
<head>
<?php
 include ('header1.php');
 ?>


<?php        
if(isset($_POST['submit']))
{
  $sql=("SELECT `mob_number` FROM `customer` WHERE `mob_number`='".$_POST['mob_number']."'");
$result=mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0)
{

  $_SESSION['error']="Mobile Number Already Exist";
  $error=$_SESSION['error'];
  echo "<script language='javascript'>alert('Mobile Number Already Exist');</script>";
  
}
else
{
  $otp=rand(0000,9999);
  $_SESSION['otp']=$otp;
  
  $cust_fullname=$_POST['cust_fullname'];
  $mob_number=$_POST['mob_number'];
  $email_id=$_POST['email_id'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $pin_code=$_POST['pin_code'];
  $dob=$_POST['dob'];
  $password=$_POST['password'];
  
  
  $sql1=("INSERT INTO `customer`(`cust_fullname`,`mob_number`, `email_id`, `gender`, `address`, `city`,`pin_code`,`dob`,`password`,`otp`,`create_date`,`status`) VALUES ('".$_POST['cust_fullname']."','".$_POST['mob_number']."','".$_POST['email_id']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['city']."','".$_POST['pin_code']."','".$_POST['dob']."','".$_POST['password']."','$otp',now(),1)");
  
  
  $result1=mysqli_query($con,$sql1);
  
  if(mysqli_affected_rows($con)>0)
  {
    
    $msg=urlencode('Your Verification Code Is '.$otp);file_get_contents('https://www.fast2sms.com/dev/bulk?authorization=HNU8I6L5W7mcb3eoAhQpERTDXBCi4yfFzwvVls2ugK9ZxSrPJYuiatNwyZbk6MxU2rcSJ17hPAmEFvI9&sender_id=FSTSMS&message='.$msg.'&language=english&route=p&numbers='.$_POST['mob_number']);

    echo "<script>alert('we have send OTP to your mobile number,pl enter that to verify your account');</script>";
  
    echo "<script>window.location.href='verify.php?mob_number=".$mob_number."';</script>";
    
  }
  else
  {
    echo "<script>alert('Error creating account');</script>";
    echo "<script>window.location.href='index.php';</script>";
    
    
}
}}
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
                  <span class="active">Sign up</span>
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
          <div class="col-md-6 offset-md-3">
            <form name="reg-form" class="register-form" method="post">
              <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm float-start mt-10 mb-0 mr-10">
                  <i class="pe-7s-users"></i>
                </a>
                <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
              </div>
              <hr>
              
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label>Name</label>
                  <input name="cust_fullname" class="form-control" type="text">
                </div>
                <div class="mb-3 col-md-6">
                  <label>Mobile Number</label>
                  <input name="mob_number" class="form-control" type="text">
                </div>
                <div class="mb-3 col-md-6">
                  <label>Email Address</label>
                  <input name="email_id" class="form-control" type="email">
                </div>
                <div class="mb-3 col-md-6">

                  
    <label>Gender</label><br>
    <input type="radio" name="gender" value="male" style="margin:5px; margin-top: 10px;">Male
    <input type="radio" name="gender" value="female" style="margin:5px; margin-top: 10px;">Female    
  
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_choose_username">Address</label>
                  <input id="form_choose_username" name="address" class="form-control" type="text">
                </div>
                 <div class="mb-3 col-md-12">
                  <label for="form_choose_username">City</label>
                  <input id="form_choose_username" name="city" class="form-control" type="text">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="form_choose_password">Pin Code</label>
                  <input id="form_choose_password" name="pin_code" class="form-control" type="text">
                </div>
                <div class="mb-3 col-md-6">
                  <label>Date Of Bith</label>
                  <input id="form_re_enter_password" name="dob"  class="form-control" type="date">
                </div>
              </div>
              <div class="mb-3 col-md-12">
                  <label for="form_choose_username">Password</label>
                  <input id="form_choose_username" name="password" class="form-control" type="password">
                </div>
              <div class="mb-3 tm-sc-button">
                 <button type="submit" class="btn btn-dark" name="submit">Register Now</button>

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
include ('footer.php');
?>
</body>

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/page-form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:51:18 GMT -->
</html>