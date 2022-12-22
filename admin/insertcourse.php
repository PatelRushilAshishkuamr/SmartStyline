
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
         if(move_uploaded_file($file_tmp,'courseimage/'.$file_name))
         { 
             
         }}
 }


 
if(isset($_POST['insertdata']))
{
    $course_id=$_POST['course_id'];
    $course_name=$_POST['course_name'];
    $image=$_FILES['image']['name'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    

    $query = "INSERT INTO course(course_id,course_name,image,price,description) values
        ('$course_id','$course_name','$image','$price','$description')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
         echo '<script>window.location.href="course1.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>


