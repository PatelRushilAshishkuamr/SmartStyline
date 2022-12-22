<?php
include("header1.php");
?>
<br><br><br>

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
    echo '<script>alert("Record Inserted");</script>';
    echo '<script>window.location.href="index.php";</script>';

}

}
?>


<?php
global $product_id,$total_price;
include("config.php");

$sql="select * from beauty_product";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    $product_id=$row['product_id'];
    $total_price=$row['total_price'];
}

?>


<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Order Success -</title>
    <meta charset="utf-8">
    

</head>
<body>

<div class="container">
    <center><h1 style="color:#F60;">Order Status</h1></center>
    <center><p style="margin-top:20px;">Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p></center>
    <center><h4 style="margin-left:28px; margin-top:20px; ">select your payment option</h4></center>

</div>

<div id="demo" >
<html>

<form method="POST" action="payment2.php">
<input type="image" name="submit" border="0" style="margin-left:43%;margin-top:10px;heigth:200px;width:200px;"
  src="images/Razorpay.jpg"> 
<br><br>

</form>
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

<form method="POST" >
    <div hidden>
    <div class="row" >
                <div class="mb-3 col-md-12">
                  <label for="form_username_email">Product ID</label>
                  <input type="text" name="product_id" value="<?php echo $product_id ?>" hidden>
                  <input id="form_username_email" value="<?php echo $product_name; ?>" placeholder="" name="product_name" class="form-control" type="text" required>
                </div>
              </div>
              <div class="row" >
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
              </div></div>
<center><input type="submit" name="submit" value="Cash On Delivery" style="text-align: center;"></center>
</form>

</html></div>
<br><br>
</form>
<br><br></div></div></section>
<?php
include("footer.php");
?>
<?php
include("config.php");
// include('db.php'); 
if(isset($_POST['pay_id'])&& isset($_POST['amount'])&& isset($_POST['email'])){
$pay_id=$_POST['pay_id'];   
$amount=$_POST['amount'];   
$email=$_POST['email'];   
$product_id=$_POST['product_id'];   

$sql1="select *from order_detail where email_id = '$user' and status='pending'";
$result1=mysqli_query($con,$sql1);
$count=mysqli_num_rows($result);
while ($row=mysqli_fetch_array($result1)) {
    $id=$_row['id'];
}
$query="INSERT INTO razorpay(`email`,`amount`,`pay_id`,`pay_status`,`product_id`)
VALUES('$email','$amount','$pay_id','Success','$product_id')";
mysqli_query($con,$query);
}
?>
</body>
</html>
