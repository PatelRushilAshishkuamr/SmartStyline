
<?php
include("config.php"); 


if(isset($_POST['deletedata']))
{
    $category_id = $_POST['delete_id'];

    $query = "update beauty_category set status=1 WHERE category_id='$category_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:category.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>