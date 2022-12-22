
<?php

include("header1.php");
include("config.php");

?>


<br><br>


<?php
global $product_id,$total_price;
include("config.php");

$sql="select * from order_detail";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$total_price=$row['total_price'];
	$product_id=$row['product_id'];
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
 crossorigin="anonymous"></script>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
	<h3> <center>Payment Details</center></h3>
	<pre>
	</pre>
		<center><table border="1" >
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>Order id:*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" style="width:329px;">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>Cust Id:*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="50" size="12"
					name="CUST_ID" autocomplete="off" value="<?php echo $user;?>" style="width:329px;"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>industry type id:*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
					name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" style="width:329px;"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel:*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" style="width:329px;">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Total Price :*</label></td>
					<td><input title="TXN_AMOUNT" type="text" name="TXN_AMOUNT" id="TXN_AMOUNT"	value="<?php echo $total_price;?>" style="width:329px;">
					</td>
				</tr>
                
				<tr>
					<td>6</td>
					<td><label>Product Id :*</label></td>
					<td><input title="TXN_AMOUNT" type="text" name="product_id" id="product_id"	value="<?php echo $product_id;?>" style="width:329px;">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="button"  onclick="MakePayment()"></td>
				</tr>
			</tbody>
		</table></center>
	
	

    <script>
function MakePayment()
{
var orderid=$("#ORDER_ID").val();	
var email=$("#CUST_ID").val();	
var amount=$("#TXN_AMOUNT").val();
var product_id=$("#product_id").val();
// alert(amount)
var options = { 
   "key": "rzp_test_C4NRcXahugEdjE",
 
   "amount": amount*100, 
  
   "currency": "INR",  
   "name": email, 
   "description": "Test Transaction", 
   "image": "https://example.com/your_logo",   
  // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step 
  // "account_id": "acc_Ef7ArAsdU5t0XL", 
   "handler": function(response)
   {  
      // console.log(response)
jQuery.ajax({
	type:"POST",
	url:"orderSuccess.php",
	data:"pay_id="+response.razorpay_payment_id+"&amount="+amount+"&email="
	+email+"&product_id="
	+product_id,
	success:function(result){
			window.location.href="success.php";
	}
 });
}
};
   var rzp1 = new Razorpay(options);
   
     rzp1.open();  
   // e.preventDefault();
	
}


   </script>


 

</body>
</html>

<br><br><br><br><br>
<?php

include("footer.php");

?>
