<?php
session_start();
$error='';
$con=mysqli_connect("localhost","root","","beautycare");
 
if (isset($_POST['submit']))
{
    
         $sql = "SELECT * FROM admin WHERE email_id='" . $_POST["email_id"] . "' and password = '". $_POST["password"]."'";
         
         $result=mysqli_query($con,$sql);
         
         $row  = mysqli_fetch_array($result);
        if(is_array($row))
         {
        $_SESSION["admin_id"] = $row['admin_id'];
        $_SESSION["email_id"] = $row['email_id'];
        echo " <script>window.open('index.php','_self')</script>";
        } 
        else 
        {
                $error = "Invalid Email id or Password!";
        }    
}
?>



<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 03:47:10 GMT -->
<!-- Added by HTTrack --><!-- /Added by HTTrack -->
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


<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="dashboard_header mb_50">
<div class="row">
<div class="col-lg-6">
<div class="dashboard_header_title"><br><br>
<h3> Login Dashboard</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-right">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="row justify-content-center">
<div class="col-lg-6">

<div class="modal-content cs_modal">
<div class="modal-header justify-content-center theme_bg_1">
<h5 class="modal-title text_white">Login</h5>
</div>
<div class="modal-body">
<form method="post">
<div class="form-group">
<input type="email" name="email_id" class="form-control" placeholder="Enter your email" required>
</div>
<div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Password" required>
</div>
<input type="submit" name="submit" class="btn_1 full_width text-center" value="Login" style="background: #a37bfd!important; color: white; margin-top: 0px;">

</form>


</div>
</div></div>
</div>
</div></div></div></div></div>




<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 03:47:10 GMT -->
</html>