<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/resister.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 03:47:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<!----------favicon--------->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Smart Stylin</title>


<link rel="stylesheet" href="css/bootstrap.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />


<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">


<?php
include ('sidebar.php');
?>
<section class="main_content dashboard_part large_header_bg">



<?php
include ('header.php');
?>
<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="dashboard_header mb_50">
<div class="row">
<div class="col-lg-6">
<div class="dashboard_header_title">
<h3>Appointment</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-right">
<p><a href="index.php">Dashboard</a> <i class="fas fa-caret-right"></i>Appointment</p>
</div>
</div>
</div>
</div>
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
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
    <?php

    $sql = "select * from appointment where status='pendding'";
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
<a href="appointment.php?app_id=<?php echo $row['app_id'];?>">
<img src="pic/approve.jpg" style="height: 50px; width: 50px;">


</a>
</th>
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
 <div class="col-12">
<div class="dashboard_header mb_50">
<div class="row">
<div class="col-lg-6">
<div class="dashboard_header_title">
<h3>Appointment Report</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-right">
<p><a href="index.php">Dashboard</a> <i class="fas fa-caret-right"></i>Report</p>
</div>
</div>
</div>
</div>
</div>
<div class="table-responsive">
<table class="table table-bordered table-light">
<thead>
<tr>
<th scope="col" hidden> id</th>

<th scope="col">Total Appointment</th>
<th scope="col">Approved Appointment</th>
<th scope="col">Cancelled Appointment</th>
<th scope="col">Pending Appointment</th>

</tr>
</thead>
<tbody>
   
<tr>

<th>
 <?php

    $sql = "select * from appointment";
    $result = mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    
?>
  <?php echo $count?></th>
<th>
 <?php

    $sql1 = "select * from appointment where status='approve'";
    $result1 = mysqli_query($con,$sql1);
    $count1=mysqli_num_rows($result1);
    
?>
  <?php echo $count1;?></th>
<th><?php

    $sql2 = "select * from appointment where status='cancelled'";
    $result2 = mysqli_query($con,$sql2);
    $count2=mysqli_num_rows($result2);
    
?>
  <?php echo $count2;?></th>
<th><?php

    $sql3 = "select * from appointment where status='pendding'";
    $result3 = mysqli_query($con,$sql3);
    $count3=mysqli_num_rows($result3);
    
?>
  <?php echo $count3;?></</th>
</tr> 
</tbody>
</table>
 </div>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include ('footer.php');
?>
</section>

<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/resister.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 03:47:10 GMT -->
</html>