
<?php
include("sidebar.php");
include("header.php");
?>


<?php
include("config.php");
	if(isset($_GET['service_name']))
	{
		
		$service_name=$_GET['service_name'];
		$sql="select * from tbl_serviceprovider where status=0 and service_name='$service_name'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$service_name=$row['service_name'];
	$service_category=$row['service_category'];
	$owner_name=$row['owner_name'];
	$description=$row['description'];
	$logo=$row['logo'];
	$city=$row['city'];
	$adderss=$row['adderss'];
	$contact_no=$row['contact_no'];
	$booking_rate=$row['booking_rate'];
}}
?>

<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>serviceprovider Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>serviceprovider Form :</h4>
								</div>
								<div class="form-body">
									<form enctype="multipart/form-data" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">service name </label> 
											<input type="text" name="service_name" class="form-control"value="<?php echo $service_name?>" id="exampleInputEmail1" placeholder="service name"> 
										</div> 
                                        
										<div class="form-group"> 
											<label for="exampleInputPassword1">service catrgroy</label> 
											<input type="text" name="service_category" class="form-control" value="<?php echo $service_category?>" id="exampleInputPassword1" placeholder="servicecategory"> 
										</div> 
										
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">owner name</label> 
											<input type="text" name="owner_name" class="form-control"value="<?php echo $owner_name?>" id="exampleInputPassword1" placeholder="owner name"> 
										</div> 
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">description</label> 
											<input type="text" name="description" class="form-control" value="<?php echo $description?>" id="exampleInputPassword1" placeholder="description"> 
										</div> 
                                       
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">logo</label>
											<img src="serviceproviderlogo/<?php echo $logo; ?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br /><input type="file" name="logo" id="logo" style="float:left;" />
<input type="hidden" name="logo" id="logo"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{echo $logo;} ?>"/>
										</div> 
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">city</label> 
											<input type="city" name="city" class="form-control" value="<?php echo $city?>" id="exampleInputPassword1" placeholder="city"> 
										</div> 
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">adderss</label> 
											<input type="text" name="adderss" class="form-control"value="<?php echo $adderss?>" id="exampleInputPassword1" placeholder="adderss"> 
										</div> 
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">contact no</label> 
											<input type="text" name="contact_no" class="form-control" value="<?php echo $booking_rate?>" id="exampleInputPassword1" placeholder="city"> 
										</div> 
                                        
										 <div class="form-group"> 
											<label for="exampleInputPassword1">booking rate</label> 
											<input type="text" name="booking_rate" class="form-control" value="<?php echo $booking_rate?>" id="exampleInputPassword1" placeholder="booking rate"> 
										</div> 
                                        
                                        
                                         
										<button type="submit" name="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
					




<?php

include("config.php");
if(isset($_POST['submit']))
{
	if(isset($_FILES['logo']))
           {
	$service_name=$_POST['service_name'];
	$service_category=$_POST['service_category'];
	$owner_name=$_POST['owner_name'];
	$description=$_POST['description'];
	$logo = trim($_FILES['logo']['name']);

	
	if($_FILES["logo"]["name"] == ''){
		 $logo = $_POST['logo'];
	}
	else{
		 $logo = $_FILES['logo']['name'];
	}

 
 move_uploaded_file($_FILES['logo']['tmp_name'], "serviceproviderlogo/".$_FILES['logo']['name']);
	$city=$_POST['city'];
	$adderss=$_POST['adderss'];
	$contact_no=$_POST['contact_no'];
	$booking_rate=$_POST['booking_rate'];
	$sql="update tbl_serviceprovider set service_name='$service_name',service_category='$service_category',owner_name='$owner_name',description='$description',logo='$logo',city='$city',adderss='$adderss',contact_no='$contact_no',booking_rate='$booking_rate' where status=0 and service_name='$service_name'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
     echo "<script>alert('serviceprovider edited successfully');</script>";
	echo "<script>window.location.href='serviceprovider.php'</script>";	
    	
	}
}}


?>
<?php
include("footer.php");
?>