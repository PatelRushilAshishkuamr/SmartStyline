<!DOCTYPE html>
<html>
<head>
	<!----------favicon--------->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="icon" href="img/mini_logo.png" type="image/png">

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
<body>
<?php
include ('config.php');
?>

<div class="container-fluid no-gutters">
<div class="row">
<div class="col-lg-12 p-0 ">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="line_icon open_miniSide d-none d-lg-block">
<img src="img/line_img.png" alt="">
</div>
<form class="search-form-opened" action="search.php" method="GET">
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Search Beauty Product" name="query">
			<span class="input-group-btn search-btn">
				<input type="submit" name="search" value="search" style="height: 38px; width: 70px;">
						<i class="icon-magnifier"></i>
			</span>
	</div>
</form>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">

<div class="profile_info d-flex align-items-center">
<div class="profile_thumb mr_20">
<img src="img/transfer/rushil.jpg" alt="#">
</div>
<div class="author_name">
<h4 class="f_s_15 f_w_500 mb-0">Rushil</h4>
<p class="f_s_12 f_w_400">Manager</p>
</div>
<div class="profile_info_iner">
<div class="profile_author_name">
<p>Manager</p>
<h5>Manthan/Rushil</h5>
</div>
<div class="profile_info_details">

<a href="logout.php">Log Out </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>