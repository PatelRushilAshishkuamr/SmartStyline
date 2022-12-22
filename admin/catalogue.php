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

<?php 
if(isset($_POST['submit']))
{
    $catalogue_name=$_POST['catalogue_name'];
    $catalogue_price=$_POST['catalogue_price'];
    $sql="insert into catalogue (catalogue_name,catalogue_price) values
    ('$catalogue_name','$catalogue_price')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        
        echo "<script>alert('record inserted');</script>";
    }
    
}

?>

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="dashboard_header mb_50">
<div class="row">
<div class="col-lg-6">
<div class="dashboard_header_title">
<h3>Beauty Catalogue</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-right">
<p><a href="index.php">Dashboard</a> <i class="fas fa-caret-right"></i> catalogue</p>
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
<div class="modal-header theme_bg_1 justify-content-center">
<h5 class="modal-title text_white">Catalogue</h5>
</div>
<div class="modal-body">

<form method="post" enctype="multipart/form-data">
<div class="form-group">
<input type="text" class="form-control" name="catalogue_name" placeholder="Catalogue name">
</div>
<div class="form-group">
<input type="text" class="form-control" name="catalogue_price" placeholder="Catalogue price">
</div>
<input type="submit" class="btn_1 full_width text-center" name="submit" style="    background-color: #373063;
    border: 1px solid #373063;
    color: #fff;
    display: inline-block;
    padding: 11px 25px;
    text-transform: capitalize;
    font-size: 14px;
    font-weight: 400;
    border-radius: 30px;
    white-space: nowrap;
    -webkit-transition: .5s;
    transition: .5s;
    text-align: center;
    padding: 0;"> 
</form>

</div></div></div></div>
<div class="main-title">
<h3 class="m-0"></h3>
</div>
</div>
<div class="white_card_body">

<div class="table-responsive m-b-30">
<table class="table table-bordered table-dark">
<thead>
<tr>
<th scope="col">Catalogue Name</th>
<th scope="col">Catalogue Price</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>
    <?php
        $sql="select * from catalogue where status=0";
        $result=mysqli_query($con,$sql);
        while($row= mysqli_fetch_array($result))
        {
            ?>
        
        
          <tr data-expanded="true">
            <td><?php echo $row['catalogue_name'];?></td>
            <td><?php echo $row['catalogue_price'];?></td>
            <td>
            
                 <img src="img/icon/edit.png">  
                
             </td>
             <td>
            <a href="catalogue.php?catalogue_id=<?php echo $row['catalogue_id'];?>">
                 <img src="img/icon/delete.png">  
            </a>
             </td>
            
          </tr>
          <?php
        }
        ?>

</tbody>
</table> </div>
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
if(isset($_GET['catalogue_id']))
{
$catalogue_id=$_GET['catalogue_id'];
$sql="update catalogue set status=1 where catalogue_id='$catalogue_id'";
$result=mysqli_query($con,$sql);
    if($result)
    {
        
        echo "<script>alert('record deleted');</script>";
    }
    
}

?>

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