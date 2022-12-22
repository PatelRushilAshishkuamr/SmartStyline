
<?php

$con=mysqli_connect("localhost","root","","beautycare");
 



if(isset($_POST['insertdata']))
{
    $catalogue_name = $_POST['catalogue_name'];
    $catalogue_price= $_POST['catalogue_price'];
    

    $query = "INSERT INTO catalogue(catalogue_name,catalogue_price) 
    VALUES ('$catalogue_name','$catalogue_price')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
         echo '<script>window.location.href="menu.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>


