<?php
include("config.php");
// include('db.php'); 
if(isset($_POST['pay_id'])&& isset($_POST['amount'])&& isset($_POST['product_id'])){
$pay_id=$_POST['pay_id'];	
$amount=$_POST['amount'];	
$product_id=$_POST['product_id'];	

$sql1="select *from order_detail where status='pending'";
$result=mysqli_query($con,$sql1);
$count=mysqli_num_rows($result);
while ($row=mysqli_fetch_array($result)) {
	$product_id=$_row['product_id'];
}
$query="INSERT INTO razorpay(`email`,`amount`,`pay_id`,`pay_status`,`product_id`)
VALUES('$email','$amount','$pay_id','Success','$product_id')";
mysqli_query($con,$query);
}
?>