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
    if (isset($_POST['submit'])) 
    {
        $category_id=$_POST['category_id'];
        $product_name=$_POST['product_name'];
        $image1=$_FILES['image1']['name'];
        $image2=$_FILES['image2']['name'];
        $price=$_POST['price'];
        $discount=$_POST['discount'];
        $total_price=$_POST['total_price'];
        $description=$_POST['description'];
        $ingredients=$_POST['ingredients'];
        $sql="insert into beauty_product (category_id,product_name,image1,image2,price,discount,total_price,description,ingredients) values
        ('$category_id','$product_name','$image1','$image2','$price','$discount',
        '$total_price','$description','$ingredients')";
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
<h3>Beauty Product</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-right">
<p><a href="index.php">Dashboard</a> <i class="fas fa-caret-right"></i> product</p>
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
<h5 class="modal-title text_white">Product</h5>
</div>
<div class="modal-body">

<form method="post" enctype="multipart/form-data">


<div class="form-group">
<!------forign Key------------>
<select name="category_id"  class="form-control" style="height:50px;" >
            <option value="0" >Select category    </option>
            <?php
            
            if(isset($_SERVER['PHP_SELF']))
            {
                $sql = "select * from beauty_category where status=0";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<option value = '$row[0]'>$row[1]</option>";
                }
            }
            ?>
</select>
<!----------end forign key---->
</div>
<div class="form-group">
<input type="text" class="form-control" name="product_name" placeholder="Product name">
</div>


<?php
 if(isset($_FILES['image1']))
 {
     $file_name=$_FILES['image1']['name'];
     $file_tmp=$_FILES['image1']['tmp_name'];
     $file_size=$_FILES['image1']['size'];
     if($_FILES['image1']['size'] > 10526552)
     {
         echo "<br>image size is greater";
     }
     else
     {
         if(move_uploaded_file($file_tmp,'productimage/'.$file_name))
         { 
             
         }}
 }
 ?>


<?php
 if(isset($_FILES['image2']))
 {
     $file_name=$_FILES['image2']['name'];
     $file_tmp=$_FILES['image2']['tmp_name'];
     $file_size=$_FILES['image2']['size'];
     if($_FILES['image2']['size'] > 10526552)
     {
         echo "<br>image size is greater";
     }
     else
     {
         if(move_uploaded_file($file_tmp,'productimage/'.$file_name))
         { 
             
         }}
 }
 ?>

<div class="form-group">
   

<input type="file" class="form-control" name="image1" placeholder="Image1" style="height: 70px;  padding-top:5px;">
</div>
<div class="form-group" >
<input type="file" class="form-control" name="image2" placeholder="Image2" style="height: 70px;  padding-top:5px;">
</div>
<div class="form-group">
<input type="text" class="form-control" name="price" placeholder="Price">
</div>
<div class="form-group">
<input type="text" class="form-control" name="discount" placeholder="Discount">
</div>
<div class="form-group">
<input type="text" class="form-control" name="total_price" placeholder="Total Price">
</div>
<div class="form-group">
<textarea class="form-control" name="description" placeholder="Description"></textarea>
</div>
<div class="form-group">
<textarea class="form-control" name="ingredients" placeholder="Ingredients"></textarea>
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
<th scope="col">Category Name</th>
<th scope="col">Product Name</th>
<th scope="col">Image1</th>
<th scope="col">Image2</th>
<th scope="col">Price</th>
<th scope="col">Discount</th>
<th scope="col">Total Price</th>
<th scope="col">Description</th>
<th scope="col">Ingredients</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>
    <?php
        
        $sql="select pl.category_name,lgn.* from beauty_product lgn INNER JOIN
        beauty_category pl ON pl.category_id=lgn.category_id where lgn.status=0";
        $result=mysqli_query($con,$sql);
        while($row= mysqli_fetch_array($result))
        {
            ?>
        
        
          <tr data-expanded="true">
            <td><?php echo $row['category_name'];?></td>
            <td><?php echo $row['product_name'];?></td>

            <td><img src="productimage/<?php echo $row['image1'];?>" style="width:50px; height: 50px;"></td>
            
            <td><img src="productimage/<?php echo $row['image2'];?>" style="width:50px; height: 50px;"></td>

            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['discount'];?></td>
            <td><?php echo $row['total_price'];?></td>
            <td><?php echo $row['description'];?></td>
            <td><?php echo $row['ingredients'];?></td>

            <td>
                <a href="editcategory.php?category_id=<?php echo $row['category_id'];?>">
                 <img src="img/icon/edit.png">  
                </a>
             </td>
             <td>
                <a href="beauty_product.php?product_id=<?php echo $row['product_id'];?>">
                 <img src="img/icon/delete.png">  
                </a>
             </td>
            






            
            </td>
            
            
          </tr>
          <?php
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
if(isset($_GET['product_id']))
{
$product_id=$_GET['product_id'];
$sql="update beauty_product set status=1 where product_id='$product_id'";
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