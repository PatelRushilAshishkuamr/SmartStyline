<?php

include("config.php");
    if(isset($_POST['updatedata']))
    {   
        $package_id=$_POST['update_id'];
        $image=$_FILES['image']['name'];
        $package_price=$_POST['package_price'];
        $package_description=$_POST['package_description'];
        $package_title=$_POST['package_title'];
        $duration=$_POST['duration'];

    
    if($_FILES["image"]["name"] == ''){
         $image = $_POST['oldimagename'];
    }
    else{
         $image = $_FILES['image']['name'];
    }

    

 
 move_uploaded_file($_FILES['image']['tmp_name'], "packageimage/".$_FILES['image']['name']);
 
        

        $query = "UPDATE package SET image='$image', package_price='$package_price',package_description='$package_description',package_title='$package_title',duration='$duration'  WHERE package_id=$package_id and status=0";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
              echo '<script>window.location.href="package1.php";</script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    
?>