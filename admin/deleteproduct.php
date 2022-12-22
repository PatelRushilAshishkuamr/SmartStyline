
<!-----Delete---->
<?php

$con=mysqli_connect("localhost","root","","beautycare");

if(isset($_POST['deletedata']))
{
    $product_id = $_POST['delete_id'];

    $query = "update beauty_product set status=1 WHERE product_id='$product_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:product.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>