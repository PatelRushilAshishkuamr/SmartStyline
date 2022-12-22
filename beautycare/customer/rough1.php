<?php
   session_start();
   
  global $user;
  @$user=$_SESSION["user"];  
  echo "User : " . $user;   
  // if($user == "")
  // {
  //   echo "<script language='javascript'>window.location.href='index.php';</script>";             
  // }
?>

<?php
  // global $email_id;
  //   include("config.php");
  //   $sql= "select * from customer where email_id = '$user' and status = 0";
  //       $result=mysqli_query($con,$sql);
  //       $count = mysqli_num_rows($result);
  //       while($row = mysqli_fetch_array($result))
  //         {
  //         $email_id = $row['email_id'];
  //         $customer_id = $row['customer_id'];
          
          // }
  ?>

<!-- welcome!<?php // echo $email_id;?> -->
