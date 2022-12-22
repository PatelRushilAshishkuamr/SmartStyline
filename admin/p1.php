<?php
if(isset($_POST['submit']))
{
	$cat_name=$_POST['category_name'];
	$sql="insert into beauty_category(category_name)value('$cat_name')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		
		echo "<script>alert('record inserted');</script>";
	}
	
}
?>
