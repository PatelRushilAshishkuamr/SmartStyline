<!DOCTYPE html>
<head>
<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

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
              <h2 class="title">Change Password</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                
                  <span class="active">Change Password</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php
    if(isset($_POST['submit']))
    {
		global $pass;
		$oldp = $_POST['old'];
		$newp = $_POST['newpass'];
		$conp = $_POST['con'];
		$sql = "select * from customer where email_id = '$user' and status = 0";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
					$pass = $row['password'];
										
				}
				if($pass == $oldp)
				{
					if($newp == $conp)
					{
						$sql1 = "update customer set password = '$newp' where email_id = '$user' and status = 0";
						$result1 = mysqli_query($con,$sql1);
						if($result1)
						{
							echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												
							echo "<script language='javascript'>window.location.href='../customer/index.php';</script>";
						}
						$sql2 = "update customer set password = '$newp' where email_id = '$user' and status = 0";
						$result2 = mysqli_query($con,$sql2);
						if($result2)
						{
							echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												
							echo "<script language='javascript'>window.location.href='../customer/index.php';</script>";
						}
					}
					else
					{
						echo "<script language='javascript'>alert('please enter same password is not match');</script>";
					}
				}
				else
				{
					echo "<script language='javascript'>alert('Please enter your Current Password');</script>";
				}
			}
		}
?>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 mb-40">
            <h4 class="text-gray mt-0 pt-10"> Change Password</h4>
            <hr>
           
            <form name="login-form" class="clearfix" method="post">
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_username_email">Old Password</label>
                  <input id="form_username_email" name="old" class="form-control" type="password" required>
                </div>
              </div>
             <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_password">New Password</label>
                  <input id="form_password" name="newpass" class="form-control" type="password" required>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_password">Confirm Password</label>
                  <input id="form_password" name="con" class="form-control" type="password" required>
                </div>
              </div>
              
              <div class="mb-3 tm-sc-button mt-10">
                <button type="submit" class="btn btn-dark" name="submit">Change Password</button>
              </div>
</form></div></div></div></section></div>









 




<!-- footer -->
<?php
include("footer.php");
?>
<!-- //footer -->
</body>
</html>