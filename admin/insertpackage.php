
<?php

$con=mysqli_connect("localhost","root","","beautycare");
 if(isset($_FILES['image']))
 {
     $file_name=$_FILES['image']['name'];
     $file_tmp=$_FILES['image']['tmp_name'];
     $file_size=$_FILES['image']['size'];
     if($_FILES['image']['size'] > 10526552)
     {
         echo "<br>image size is greater";
     }
     else
     {
         if(move_uploaded_file($file_tmp,'packageimage/'.$file_name))
         { 
             
         }}
 }




if(isset($_POST['insertdata']))
{
    $package_price=$_POST['package_price'];
    $image=$_FILES['image']['name'];
    $package_description=$_POST['package_description'];
    $package_title=$_POST['package_title'];
    $duration=$_POST['duration'];
    

    $query = "INSERT INTO package(package_price,image,package_description,package_title,duration) values
        ('$package_price','$image','$package_description','$package_title','$duration')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
         echo '<script>window.location.href="package1.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>


