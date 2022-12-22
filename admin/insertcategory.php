
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
         if(move_uploaded_file($file_tmp,'categoryimage/'.$file_name))
         { 
             
         }}
 }



if(isset($_POST['insertdata']))
{
    $category_name = $_POST['category_name'];
    $image= $_FILES['image']['name'];
    

    $query = "INSERT INTO beauty_category(category_name,image) 
    VALUES ('$category_name','$image')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
         echo '<script>window.location.href="category.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>


