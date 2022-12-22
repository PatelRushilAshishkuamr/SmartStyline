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
<h3>Rating</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-right">
<p><a href="index.php">Dashboard</a> <i class="fas fa-caret-right"></i>Rating</p>
</div>
</div>
</div>
</div>
</div>


<div class="table-responsive">

<!-------------inner join query  --->
<?php            
  $query="select pl.cust_fullname,lgn.* from rating lgn INNER JOIN customer pl ON pl.customer_id=lgn.customer_id where lgn.status=0";
                
  $query_run = mysqli_query($con, $query);
?>



<table class="table table-bordered table-dark">
<thead>
<tr>
<th scope="col" hidden> id</th>

<th scope="col">Customer Name</th>
<th scope="col">Product Name</th>
<th scope="col">Rating Score</th>
<th scope="col">Message</th>
<th scope="col">Date</th>
</tr>
</thead>

<?php
if($query_run)
{
    foreach($query_run as $row)
    {
?>



<tbody>



         
<tr>
<td  hidden><?php echo $row['rating_id'];?></td>
<td><?php echo $row['cust_fullname'];?></td>

<td><?php $id = $row['product_id']; 
$sql1 = "select product_name from beauty_product where product_id = $id and status = 0";
                    $result1 = mysqli_query($con,$sql1);
                  while($row1 = mysqli_fetch_array($result1))
                              {
                  echo $row1['product_name']; }?>
</td>

<td><?php echo $row['rating_score'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['date'];?></td>

</tr> 
<?php           
}
}
else 
{
    echo "No Record Found";
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