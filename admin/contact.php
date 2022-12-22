<!DOCTYPE html>
<html lang="zxx">
<head>
<!----------favicon--------->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Smart Stylin</title>


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
<h3>Contact</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-right">
<p><a href="index.php">Dashboard</a> <i class="fas fa-caret-right"></i>Contact</p>
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

<th scope="col">Contact Name</th>
<th scope="col">Email id</th>
<th scope="col">Mobile Number</th>
<th scope="col">Message</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php

    $sql = "select * from contact where status='0'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
      {

?>
<tr>

<th><?php echo $row['contact_name'];?></th>
<th><?php echo $row['email_id'];?></th>
<th><?php echo $row['mobile_number'];?></th>
<th><?php echo $row['message'];?></th>
<th>
<a href="contact.php?contact_id=<?php echo $row['contact_id'];?>">
<img src="img/icon/delete.png" style="height: 50px; width: 50px;">


</a>

</th>
</tr>

<?php } ?>


<?php


if(isset($_GET['contact_id']))
{
$contact_id=$_GET['contact_id'];
$sql1 = "UPDATE contact set status='1' where contact_id='$contact_id'";
$result1=mysqli_query($con,$sql1);
}
?>
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