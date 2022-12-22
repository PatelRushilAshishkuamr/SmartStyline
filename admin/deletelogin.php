
<?php
$con=mysqli_connect("localhost","root","","beautycare");
?>
<?php
if(isset($_POST['deletedata']))
{
    $login_id = $_POST['delete_id'];

    $query = "UPDATE login set status=1 WHERE login_id='$login_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:admin_login.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>