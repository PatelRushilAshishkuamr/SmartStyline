<?php

include("config.php");
    if(isset($_POST['updatedata']))
    {   
        $course_id=$_POST['update_id'];
        $course_name=$_POST['course_name'];
        $image=$_FILES['image']['name'];
        $price=$_POST['price'];
        $description=$_POST['description'];

    
    if($_FILES["image"]["name"] == ''){
         $image = $_POST['oldimagename'];
    }
    else{
         $image = $_FILES['image']['name'];
    }

    

 
 move_uploaded_file($_FILES['image']['tmp_name'], "courseimage/".$_FILES['image']['name']);
 
        

        $query = "UPDATE course SET course_name='$course_name',image='$image', price='$price',description='$description'  WHERE course_id=$course_id and status=0";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
              echo '<script>window.location.href="course1.php";</script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    
?>