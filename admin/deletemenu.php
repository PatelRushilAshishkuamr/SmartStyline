
<?php
include("config.php"); 


if(isset($_POST['deletedata']))
{
    $catalogue_id = $_POST['delete_id'];

    $query = "update catalogue set status=1 WHERE catalogue_id='$catalogue_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:menu.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>