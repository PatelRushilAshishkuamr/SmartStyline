<?php

include("config.php");
    if(isset($_POST['updatedata']))
    {   
        $login_id=$_POST['update_id'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        

        $query = "UPDATE login SET email='$email',password='$password' WHERE login_id=$login_id and status=0";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
              echo '<script>window.location.href="admin_login.php";</script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    
?>