<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>

</body>
</html>
<?php

$con=mysqli_connect("localhost","root","","beautycare");
 if(isset($_FILES['image1']))
 {
     $file_name=$_FILES['image1']['name'];
     $file_tmp=$_FILES['image1']['tmp_name'];
     $file_size=$_FILES['image1']['size'];
     if($_FILES['image1']['size'] > 10526552)
     {
         echo "<br>image size is greater";
     }
     else
     {
         if(move_uploaded_file($file_tmp,'productimage/'.$file_name))
         { 
             
         }}
 }


 if(isset($_FILES['image2']))
 {
     $file_name=$_FILES['image2']['name'];
     $file_tmp=$_FILES['image2']['tmp_name'];
     $file_size=$_FILES['image2']['size'];
     if($_FILES['image2']['size'] > 10526552)
     {
         echo "<br>image size is greater";
     }
     else
     {
         if(move_uploaded_file($file_tmp,'productimage/'.$file_name))
         { 
             
         }}
 }


if(isset($_POST['insertdata']))
{
    $category_id=$_POST['category_id'];
    $product_name=$_POST['product_name'];
    $image1=$_FILES['image1']['name'];
    $image2=$_FILES['image2']['name'];
    $price=$_POST['price'];
    $discount=$_POST['discount'];
    $total_price=$_POST['total_price'];
    $description=$_POST['description'];
    $ingredients=$_POST['ingredients'];
    

    $query = "INSERT INTO beauty_product(category_id,product_name,image1,image2,price,discount,total_price,description,ingredients) values
        ('$category_id','$product_name','$image1','$image2','$price','$discount',
        '$total_price','$description','$ingredients')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
         echo '<script>window.location.href="product.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>


