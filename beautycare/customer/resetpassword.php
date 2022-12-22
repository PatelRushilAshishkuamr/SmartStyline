
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
                  <input id="form_username_email" name="password" class="form-control" type="password" onChange="return pass()">
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
								global $password;
								
								$email_id=$_GET['email_id'];
								
								$newp = $_POST['password'];
								
								$sql = "select * from login where email_id='$email_id' and status = 0";
								$result = mysqli_query($con,$sql);
								$count = mysqli_num_rows($result);
								if($count > 0)
								{
									while($row = mysqli_fetch_array($result))
									
										if($newp)
										{
											$sql1 = "update customer set password = '$newp' where email_id='$email_id'and status = 0";
											$result1 = mysqli_query($con,$sql1);
											if($result1)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												
												$sql2 = "select * from customer where email_id='$email_id'  and status=0";
												$result2 = mysqli_query($con,$sql2);
												$count2 = mysqli_num_rows($result2);
												if($count2 > 0)
												{
													while($row2 = mysqli_fetch_array($result2))
													{
														$passnew= $row2['password'];
													}
													include ("class.phpmailer.php"); // include the class name
													$mail = new PHPMailer(); // create a new object
													$mail->IsSMTP(); // enable SMTP
													$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
													$mail->SMTPAuth = true; // authentication enabled
													$mail->SMTPSecure = 'tls';
													$mail->Host = 'smtp.gmail.com';
						
						
													$mail->Port = 587;
													$mail->IsHTML(true);
													$mail->Username = "smartstylin0123@gmail.com";
													$mail->Password = "smart@123";
													$mail->SetFrom("smartstylin0123@gmail.com");
													$mail->sender= "smartstylin0123@gmail.com";

													$mail->Subject = "Reset Password Details";
													$mail->Body = "<html>
													<body>
													<br> Dear User <br> <br> 
													You have requested to reset the password for login. So according to your requirement your Password is reset successfully and your password is $passnew. <br> 
													Kindly requsting to you to use this details for further login. <br> <br> 
													Thank you for Contacting us. <br>Explore India Holiday Team.<br>
													</body>
													</html>";
													$mail->AddAddress($email_id);
													if(!$mail->Send())
													{
														echo "<script language='javascript'>alert('Error');</script>";
													}
													else
													{
														echo "<script language='javascript'>alert('Mail has been sent');</script>";
														echo "<script language='javascript'>window.location.href='index.php';</script>";
													}
												}
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
						?>
          </div>
          <br /><br />


<?php
include("footer.php");



?>