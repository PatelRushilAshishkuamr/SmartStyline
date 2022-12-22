<form method="POST" class="forgot_password">
						<h3>Forgot Password</h3>
						<div>
							<label>Email:</label>
							<input type="text"  name="email" onchange='validEmail(this.event);' placeholder="Email" required />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<input type="submit" value="Send reminder" name="login"></input>
							<a href="index.html" rel="login" class="linkform">Suddenly remebered? Log in here</a>
							<a href="register.html" rel="register" class="linkform">You don't have an account? Register here</a>
							<div class="clear"></div>
						</div>
					</form>
                    <?php

		if(isset($_POST['login']))
					{
			include('config.php');
		$email = $_POST['email'];
	$sql = "select * from login where email = '$email' and status = 0";
					$result = mysqli_query($con,$sql);
						$count = mysqli_num_rows($result);
						if($count > 0)
						{
				while($row = mysqli_fetch_array($result))
					  		{
						$pass= $row['password'];
						}
					
									if($pass)
												{
													echo "<script language='javascript'>window.location.href='resetpassword.php?email=".$email."';</script>";
												}
												
											}
											else
											{
												echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
											}
										}
									?>  

				</div>
				<div class="clear"></div>
			</div>
			
		</div>