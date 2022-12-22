<?php

include("config.php");
    if(isset($_POST['updatedata']))
    {   
        $catalogue_id=$_POST['update_id'];
        $catalogue_name=$_POST['catalogue_name'];
        
        $catalogue_price=$_POST['catalogue_price'];
        

    
   

 
 
        

        $query = "UPDATE catalogue SET catalogue_name='$catalogue_name',catalogue_price='$catalogue_price' WHERE catalogue_id=$catalogue_id and status=0";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
              echo '<script>window.location.href="menu.php";</script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    
?>