<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smart Stylin</title>
	<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php 
include 'header1.php';
?>
<!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Cash On Delivery</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                 
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php 
$id=$_GET['id'];
$sql1="select *from order_detail where email_id = '$user' and status='pending' and order_id='$id'";
$result1=mysqli_query($con,$sql1);
while ($row=mysqli_fetch_array($result1)) {
    $product_id=$row['product_id'];
    $email_id=$row['email_id'];
    $total_price=$row['total_price'];
    $sql1="select product_name from beauty_product where product_id='$product_id'";
    $result1=mysqli_query($con,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
    	$product_name=$row1['product_name'];
    }
 }?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 mb-40">
            <h4 class="text-gray mt-0 pt-10">Cash On Delivery</h4>
            <hr>
           
            <form name="login-form" method="POST">
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_username_email">Product ID</label>
                  <input type="text" name="product_id" value="<?php echo $product_id ?>" hidden>
                  <input id="form_username_email" value="<?php echo $product_name; ?>" placeholder="" name="product_name" class="form-control" type="text" required>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_password">Email Id</label>
                  <input id="form_password" value="<?php echo $email_id; ?>" placeholder="" name="email_id" class="form-control" type="email" required>
                </div>
              </div>
               <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_username_email">Total Price</label>
                  <input id="form_username_email" value="<?php echo $total_price; ?>" placeholder="" name="total_price" class="form-control" type="text" required>
                </div>
              </div>
              <div class="mb-3 tm-sc-button mt-10">
                <input type="submit" class="btn btn-dark" name="submit" value="submit">
              </div>
</form>
<?php
if(isset($_POST['submit']))
{
$product_id=$_POST['product_id'];
$email_id=$_POST['email_id']; 
$total_price=$_POST['total_price']; 


$sql = "INSERT INTO cod (product_id,email_id,total_price,type) VALUES ('$product_id','$email_id','$total_price','cod')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo '<script>alert("record inserted");</script>';
	echo '<script>window.location.href="codorder.php";</script>';

}

}
?>

</div>
</div>
</div>
</section>
</div>
<?php 
include 'footer.php';
?>
</body>
</html>