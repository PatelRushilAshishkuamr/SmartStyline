 <!DOCTYPE html>
<html>
<head>
<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>

<?php
 include ('header.php');
 ?>

<?php
global $email_id,$mob_number,$gender,$address,$city,$pin_code,$dob;
include("config.php");
$sql="select * from admin where email_id='$email_id'";

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
  $cust_fullname=$row['cust_fullname'];
  $mob_number=$row['mob_number'];
  $gender=$row['gender'];
  $address=$row['address'];
  $city=$row['city'];
  $pin_code=$row['pin_code'];
  $dob=$row['dob'];
  
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
                  <span class="active">Edit Profile</span>
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
              
              <hr>
              
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label>Name</label>
                  <input name="cust_fullname" class="form-control" type="text" value="<?php echo $cust_fullname;?>">
                </div>
                <div class="mb-3 col-md-6">
                  <label>Mobile Number</label>
                  <input name="mob_number" class="form-control" type="text" value="<?php echo $mob_number;?>">
                </div>
                
                <div class="mb-3 col-md-12">

                  
    <label>Gender</label><br>
    <input type="radio" name="gender" value="male" style="margin:5px; margin-top: 10px;" value="<?php echo $gender;?>">Male
    <input type="radio" name="gender" value="female" style="margin:5px; margin-top: 10px;" value="<?php echo $gender;?>">Female    
  
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_choose_username">Address</label>
                  <input id="form_choose_username" name="address" class="form-control" type="text" value="<?php echo $address;?>">
                </div>
                 <div class="mb-3 col-md-12">
                  <label for="form_choose_username">City</label>
                  <input id="form_choose_username" name="city" class="form-control" type="text" value="<?php echo $city;?>">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="form_choose_password">Pin Code</label>
                  <input id="form_choose_password" name="pin_code" class="form-control" type="text" value="<?php echo $pin_code;?>">
                </div>
                <div class="mb-3 col-md-6">
                  <label>Date Of Bith</label>
                  <input id="form_re_enter_password" name="dob"  class="form-control" type="date" value="<?php echo $dob;?>">
                </div>
              </div>
              
              <div class="mb-3 tm-sc-button">
                 <button type="submit" class="btn btn-dark" name="submit">Edit Profile</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<?php
include("config.php");
if(isset($_POST['submit']))

{
  
  $cust_fullname=$_POST['cust_fullname'];
  $mob_number=$_POST['mob_number'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $pin_code=$_POST['pin_code'];
  $dob=$_POST['dob'];
  
  $sql = "update customer set cust_fullname='$cust_fullname',mob_number='$mob_number',gender='$gender',address='$address',city='$city',pin_code='$pin_code',dob='$dob' where email_id='$user' and status=0 ";
  $result=mysqli_query($con,$sql);
  if($result)
  {
      echo "<script language='javascript'>alert('your profile has been updated!!!!');</script>";
    echo "<script language='javascript'>window.location.href='./index.php';</script>";
    
  }}
  ?>


  <!-- Footer -->
 
  
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