<?php
session_start();
if(!$_SESSION['email_id'])
{
header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 03:44:52 GMT -->
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

<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="vendors/morris/morris.css">

<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

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

<?php
$sql="select * from beauty_category where status=0";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
?>

<?php
$sql1="select * from beauty_product where status=0";
$result=mysqli_query($con,$sql1);
$count1=mysqli_num_rows($result);
?>

<?php
$sql2="select * from course where status=0";
$result=mysqli_query($con,$sql2);
$count2=mysqli_num_rows($result);
?>

<?php
$sql3="select * from package where status=0";
$result=mysqli_query($con,$sql3);
$count3=mysqli_num_rows($result);
?>
 <?php
        $q = "SELECT *FROM  customer";
        $result_of_customer = mysqli_query($con, $q);
        $count4=mysqli_num_rows($result_of_customer);

        ?>
<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="row">
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
<div class="page_title_left">
<h3 class="mb-0">Dashboard</h3>
<p>Dashboard/Beauty Care</p>
</div>

</div>
</div>
</div>
<div class="row ">
<div class="col-xl-12">
<div class="white_card  mb_30">
<div class="white_card_header ">
<div class="box_header m-0">

</div>
</div>
<div class="white_card_body anlite_table p-0">
<div class="row">
    <a href="category.php">
<div class="col-lg-3">
<div class="single_analite_content">
<h4>Beauty Category</h4>
 <h3> <span class="counter"><?php echo $count?></span> </h3>
<div class="d-flex">
</div>
</div></a>
</div>

<div class="col-lg-2">
    <a href="product.php">
<div class="single_analite_content">
<h4>Product</h4>
<h3><span class="counter"><?php echo $count1?></span> </h3>
<div class="d-flex">
</div>
</div></a>
</div>

<div class="col-lg-2">
    <a href="course1.php">
<div class="single_analite_content">
<h4>Course</h4>
<h3><span class="counter"><?php echo $count2?></span> </h3>
<div class="d-flex">
</div>
</div>
    </a>
</div>
<div class="col-lg-2">
    <a href="package1.php">
<div class="single_analite_content">
<h4>Package</h4>
<h3><span class="counter"><?php echo $count3?></span> </h3>
<div class="d-flex">
</div>
</div></a>
</div>

<!-- print a total  customer-->
<div class="col-lg-3">
    <a href="package1.php">
<div class="single_analite_content">
<h4>Customer</h4>
<h3><span class="counter"><?php echo $count4?></span> </h3>
<div class="d-flex">
</div>
</div></a>
</div>

</div>
</div>
</div>
</div>
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
</div></div></div></div>

<div>
<img src="pic/bridal.jpg" style="height:800px; width: 100%;">
</div>
</div></div>
<?php
include ('footer.php');
?>
</section>




<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/count_up/jquery.waypoints.min.js"></script>

<script src="vendors/chartlist/Chart.min.js"></script>

<script src="vendors/count_up/jquery.counterup.min.js"></script>

<script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatable/js/buttons.flash.min.js"></script>
<script src="vendors/datatable/js/jszip.min.js"></script>
<script src="vendors/datatable/js/pdfmake.min.js"></script>
<script src="vendors/datatable/js/vfs_fonts.js"></script>
<script src="vendors/datatable/js/buttons.html5.min.js"></script>
<script src="vendors/datatable/js/buttons.print.min.js"></script>

<script src="vendors/datepicker/datepicker.js"></script>
<script src="vendors/datepicker/datepicker.en.js"></script>
<script src="vendors/datepicker/datepicker.custom.js"></script>
<script src="js/chart.min.js"></script>
<script src="vendors/chartjs/roundedBar.min.js"></script>

<script src="vendors/progressbar/jquery.barfiller.js"></script>

<script src="vendors/tagsinput/tagsinput.js"></script>

<script src="vendors/text_editor/summernote-bs4.js"></script>
<script src="vendors/am_chart/amcharts.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
<script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>

<script src="vendors/apex_chart/apex-chart2.js"></script>
<script src="vendors/apex_chart/apex_dashboard.js"></script>

<script src="vendors/chart_am/core.js"></script>
<script src="vendors/chart_am/charts.js"></script>
<script src="vendors/chart_am/animated.js"></script>
<script src="vendors/chart_am/kelly.js"></script>
<script src="vendors/chart_am/chart-custom.js"></script>

<script src="js/dashboard_init.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 03:46:11 GMT -->
</html>
