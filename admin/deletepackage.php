
<?php

$con=mysqli_connect("localhost","root","","beautycare");

if(isset($_POST['deletedata']))
{
    $package_id = $_POST['delete_id'];

    $query = "update package set status=1 WHERE package_id='$package_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:package1.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>