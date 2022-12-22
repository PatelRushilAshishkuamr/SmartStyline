<?php

include("config.php");
    if(isset($_POST['updatedata']))
    {   
        $customer_id=$_POST['update_id'];
        $cust_fullname=$_POST['cust_fullname'];
        $mob_number=$_POST['mob_number'];
        $email_id=$_POST['email_id'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $pin_code=$_POST['pin_code'];
        $dob=$_POST['dob'];
        $password=$_POST['password'];
        $otp=$_POST['otp'];
        $create_date=$_POST['create_date'];



        $query = "UPDATE customer SET cust_fullname='$cust_fullname', mob_number='$mob_number',email_id='$email_id',gender='$gender',address='$address', city='$city', pin_code='$pin_code',dob='$dob',password='$password',otp='$otp',create_date='$create_date'  WHERE customer_id=$customer_id and status=0 ";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
              echo '<script>window.location.href="customer.php";</script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    
?>