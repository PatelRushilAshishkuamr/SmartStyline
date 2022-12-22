
<?php
$con=mysqli_connect("localhost","root","","beautycare");
?>
<?php
if(isset($_POST['deletedata']))
{
    $customer_id = $_POST['delete_id'];

    $query = "update customer set status=1 WHERE customer_id='$customer_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:customer.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>