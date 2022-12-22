<?php
include("header1.php");
?>
<?php
include("config.php");
if(isset($_REQUEST['app_id']))
{	
	$cancel_id=$_REQUEST['app_id'];
	$result2=mysqli_query($con,"select * from appointment where app_id='$cancel_id' group by app_id");
	
	
	
				
	while($row2=mysqli_fetch_array($result2))
	{
		$date2=date('Y/m/d');
		$date1=$row2['date'];
		$diff=round(strtotime($date2) - strtotime($date1)); 
		if($diff<=86400)
		{
			$result1=mysqli_query($con,"update appointment set status='cancelled' where app_id='$cancel_id'");
			if($result1)
			{
				echo "<script language = 'javascript'> alert('Your Order Cancelled Successfully');</script>";
				echo "<script>window.location.href='index.php'</script>";
			}
		}
		else
		{
			echo "<script language = 'javascript'> alert('Sorry, Cancellation Time Limit Has Been Expired');</script>";
			echo "<script>window.location.href='index.php'</script>";
		}
	}
}
?>

<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Cancellation</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span style="color:green;">Apponitment Cancellation</span></h5>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-6 wthree-form-left" style="margin-left:25%;">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        
                   <table class="table" style="margin-top:47px;">
					<thead>
                         <tr style="font-size:18px;">
                        <th>Order Id</th>
                        <th>Total Price</th>
                        <th>Order Cancellation</th>
                        </tr>
                        </thead>
                        
                        <?php
							include('config.php');
							$flag=0;
							$result=mysqli_query($con,"select * from appointment where email='$user' and status!='cancelled' group by app_id ");
							mysqli_num_rows($result);
							while($row=mysqli_fetch_array($result))
							{
								$date2=date('Y/m/d');
								$date1=$row['date'];
								$diff=round((strtotime($date2) - strtotime($date1))); 
								if($diff<=86400)
								{
									$flag=1;
						?>
                        <tr>
                        <td><?php echo $row['app_id'];?></td>
                     
                        <td><a href="cancellation.php?app_id=<?php echo $row['app_id'];?>" class="btn btn-danger" style="margin-left:20%;">Cancel</a></td>
                        </tr>
                        <?php
								}
							}
							if($flag==0)
							{
								echo "<script language = 'javascript'> alert('Orders Not Found');</script>";
								echo "<script>window.location.href='index.php'</script>";
							}
						?>
                        </table>
    </div>
                        </div>
                        </div>
                        </div>
                        </div>
                      
    <?php
	include("footer.php");
	?>