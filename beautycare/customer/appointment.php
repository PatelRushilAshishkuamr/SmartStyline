<!DOCTYPE html>
<html>
<head>
<?php
 include ('header1.php');
 ?>
<!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Appointment</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="index.php" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Appointment</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mob_number=$_POST['mob_number'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $message=$_POST['message'];






  global $cust_fullname,$mob_number;
    include("config.php");
    $sql1= "select * from customer where mob_number = '$user' and status = 0";
        $result1=mysqli_query($con,$sql1);
        $count = mysqli_num_rows($result1);
        while($row = mysqli_fetch_array($result1))
          {
          $cust_fullname = $row['cust_fullname'];
          $mob_number = $row['mob_number'];
           $email = $row['email'];
          
          }
















$sql="insert into appointment(name,email,mob_number,date,time,message,status)value('$name','$email','$mob_number','$date','$time','$message','pendding')" ;
$result=mysqli_query($con,$sql);
if($result)
{
  echo "<script>alert('Record Successfully Inserted');</script>";
  echo '<script>window.location.href="index.php";</script>';
}
else
{
  echo "<script>alert('Record not updated');</script>";
}
}
?>



    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <form name="reg-form" class="register-form" method="post">
             
              
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label>Name</label>
                  <input name="name" class="form-control" type="text" >
                </div>
                <div class="mb-3 col-md-12">
                  <label>Email Address</label>
                  <input name="email" class="form-control" type="email">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_choose_username">Mobile Number</label>
                  <input id="form_choose_username" name="mob_number" class="form-control" type="text" >
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="form_choose_password">Date</label>
                  <input id="form_choose_password" name="date" class="form-control required" type="date">
                </div>
                <div class="mb-3 col-md-6">
                  <label>Time</label>
                  <input name="time"  class="form-control " type="time">
                </div>
              </div>
              <div class="mb-3 col-md-12">
                  <label for="form_choose_username">Message</label>
                   <div class="mb-3 mb-10">
                  <textarea name="message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                </div>
                
              <div class="mb-3 tm-sc-button">
                 <button type="submit" class="btn btn-dark" name="submit">Submit
                 </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>


<div class="table-responsive">
<table class="table table-bordered table-dark">
<thead>
<tr>
<th scope="col" hidden> id</th>

<th scope="col">Name</th>
<th scope="col">Email Id</th>
<th scope="col">Mobile Number</th>
<th scope="col">Date</th>
<th scope="col">Time</th>
<th scope="col">Message</th>
<th scope="col" colspan="2">Status</th>
</tr>
</thead>
<tbody>
    <?php

    $sql = "select * from appointment where status='pendding'and email='$user'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
      {

?>
<tr>

<th><?php echo $row['name'];?></th>
<th><?php echo $row['email'];?></th>
<th><?php echo $row['mob_number'];?></th>
<th><?php echo $row['date'];?></th>
<th><?php echo $row['time'];?></th>
<th><?php echo $row['message'];?></th>
<th>
<a href="appointment.php?app_id=<?php echo $row['app_id'];?>"></a>
<?php echo $row['status']; ?>



</th>
<th><a href="cancellation.php"><img src="images/close.png"></a></th>
</tr> <?php } ?>

<?php


if(isset($_GET['app_id']))
{
$app_id=$_GET['app_id'];
$sql1 = "UPDATE appointment set status='approve' where app_id='$app_id'";
$result1=mysqli_query($con,$sql1);
}
?>
</tbody>
</table>
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