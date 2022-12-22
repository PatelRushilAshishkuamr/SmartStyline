<?php

include("config.php");
    if(isset($_POST['updatedata']))
    {   
        $category_id = $_POST['update_id'];
        
        $category_name = $_POST['category_name'];
        $image = trim($_FILES['image']['name']);

    
    if($_FILES["image"]["name"] == ''){
         $image = $_POST['oldimagename'];
    }
    else{
         $image = $_FILES['image']['name'];
    }

 
 move_uploaded_file($_FILES['image']['tmp_name'], "categoryimage/".$_FILES['image']['name']);
        

        $query = "UPDATE beauty_category SET category_name='$category_name',image='$image' WHERE category_id=$category_id and status=0";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
              echo '<script>window.location.href="category.php";</script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    
?>