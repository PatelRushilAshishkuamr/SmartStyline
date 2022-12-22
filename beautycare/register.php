<!DOCTYPE html>
<html>
<head>

<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<body>
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
  
  $sql1=("INSERT INTO `customer`(`cust_fullname`,`mob_number`, `email_id`, `gender`, `address`, `city`,`pin_code`,`dob`,`password`,`otp`,`create_date`,`type`,`status`) VALUES ('".$_POST['cust_fullname']."','".$_POST['mob_number']."','".$_POST['email_id']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['city']."','".$_POST['pin_code']."','".$_POST['dob']."','".$_POST['password']."','$otp',now(),'customer',1)");
  
  
  $result1=mysqli_query($con,$sql1);
  
  if(mysqli_affected_rows($con)>0)
  {
    
    $msg=urlencode('Your Verification Code Is '.$otp);file_get_contents('https://www.fast2sms.com/dev/bulk?authorization=hnsCQTlHfRb9NZzpVyYqSuoO0mI7aWwjDc3UkLMiex1Bt2K5GgH70DYC4uKevE5smRIFcwj23Jp1lhkP&sender_id=FSTSMS&message='.$msg.'&language=english&route=p&numbers='.$_POST['mob_number']);

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

<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||
        (charCode == 32))
                    return true;
                else
                    return false;

            }
            catch (err) {
                alert(err.Description);
        
            }
        }

    </script>



                  <label>Name</label>
                  <input name="cust_fullname" class="form-control" type="text" placeholder="Enter Full Name"  onKeyPress="return onlyAlphabets(event,this);" required>
                </div>
                <div class="mb-3 col-md-6">

                             <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
                  <label>Mobile Number</label>
  <span id="error" class="ss-icon" style="color: Red; display: none" ></span>

                  <input name="mob_number" class="form-control" placeholder="Enter Mobile Number" type="text" maxlength="10" minlength="10" name="mob_number" class="form-control required" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label>Email Address</label>
                  <input name="email_id" class="form-control" type="email" placeholder="Enter Your Email Id" required>
                </div>
                <div class="mb-3 col-md-6">

                  
    <label>Gender</label><br>
    <input type="radio" name="gender" value="male" style="margin:5px; margin-top: 10px;" required>Male
    <input type="radio" name="gender" value="female" style="margin:5px; margin-top: 10px;" required>Female    
  
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_choose_username">Address</label>
                  <input id="form_choose_username" placeholder="Enter Address" type="text" name="address" maxlength="200" class="form-control" required>
                </div>
                 <div class="mb-3 col-md-12">

                     <script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||
        (charCode == 32))
                    return true;
                else
                    return false;

            }
            catch (err) {
                alert(err.Description);
        
            }
        }

    </script>
                  <label for="form_choose_username">City</label>
                  <input id="form_choose_username" name="city" class="form-control required" type="text" placeholder="Enter City" onKeyPress="return onlyAlphabets(event,this);" required>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-6">
                   <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
    <span id="error" class="ss-icon" style="color: Red; display: none" ></span>
                  <label for="form_choose_password">Pin Code</label>
                  <input id="form_choose_password"placeholder="Pincode" type="text" maxlength="6" minlength="6" name="pin_code" class="form-control" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required>
                </div>
                <div class="mb-3 col-md-6">
                  <label>Date Of Bith</label>
                  <input id="form_re_enter_password" name="dob"  class="form-control" type="date" required>
                </div>
              </div>
              <div class="mb-3 col-md-12">
                  <label for="form_choose_username">Password</label>
                  <input id="form_choose_username" name="password" class="form-control" type="password" placeholder="Enter Password" required>
                </div>
              <div class="mb-3 tm-sc-button">
                                         <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
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