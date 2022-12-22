
<?php

include("config.php"); 

if(isset($_POST['deletedata']))
{
    $course_id = $_POST['delete_id'];

    $query = "update course set status=1 WHERE course_id='$course_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:course1.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>