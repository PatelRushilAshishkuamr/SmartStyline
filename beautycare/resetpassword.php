<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>Smart Stylin</title>
</head>
<body>


<?php
include("header1.php");
?>
<!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Reset Password</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                
                  <span class="active">Reset Password</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

 <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 mb-40">
            <h4 class="text-gray mt-0 pt-10"> Reset Password</h4>
            <hr>
           
            <form name="login-form" class="clearfix" method="post">
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_username_email">New Password</label>
                  <input id="form_username_email" name="password" placeholder="Enter Password" class="form-control" type="password" onChange="return pass()" required>
                </div>
              </div>
               
                <div class="col-md-12">
               
                  <input type="submit" name="submit" value="Change" class="btn btn-dark">
                </div>
              </div>
            </form>
          </div>
			<?php
				include("config.php");
			?>
	          <?php
                            if(isset($_POST['submit']))
                            {
								global $email_id;
								global $pass;
								
								$email_id=$_GET['email_id'];
								$newp = $_POST['password'];
								
								$sql = "select * from customer where email_id='$email_id' and status = 0 and type='customer'";
								$result = mysqli_query($con,$sql);
								$count = mysqli_num_rows($result);
								if($count > 0)
								{
									while($row = mysqli_fetch_array($result))
									
										if($newp)
										{
											$sql1 = "update customer set password = '$newp' where email_id='$email_id'and status = 0 and type='customer'";
											$result1 = mysqli_query($con,$sql1);
											if($result1)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												
												$sql2 = "select * from customer where email_id='$email_id'  and status=0 and type='customer'";
												$result2 = mysqli_query($con,$sql2);
												$count2 = mysqli_num_rows($result2);
												if($count2 > 0)
												{
													while($row2 = mysqli_fetch_array($result2))
													{
														$passnew= $row2['password'];
													}
													
							}}}}}
							echo "<script>window.location.href='index.php'</script>";
						?>
          </div>
          <br /><br />


<?php
include("footer.php");



?>
</div></section></div>
</body>
</html>