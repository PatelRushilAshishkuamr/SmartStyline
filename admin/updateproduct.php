
<!----------Update-->

<?php

include("config.php");
    if(isset($_POST['updatedata']))
    {   
        $product_id=$_POST['update_id'];
        $product_name=$_POST['product_name'];
        $image1=$_FILES['image1']['name'];
        $image2=$_FILES['image2']['name'];
        $price=$_POST['price'];
        $discount=$_POST['discount'];
        $total_price=$_POST['total_price'];
        $description=$_POST['description'];
        $ingredients=$_POST['ingredients'];

    
    if($_FILES["image1"]["name"] == ''){
         $image1 = $_POST['oldimagename1'];
    }
    else{
         $image1 = $_FILES['image1']['name'];
    }

    if($_FILES["image2"]["name"] == ''){
         $image2 = $_POST['oldimagename2'];
    }
    else{
         $image2 = $_FILES['image2']['name'];
    }

 
 move_uploaded_file($_FILES['image1']['tmp_name'], "productimage/".$_FILES['image1']['name']);
 move_uploaded_file($_FILES['image2']['tmp_name'], "productimage/".$_FILES['image2']['name']);
        

        $query = "UPDATE beauty_product SET product_name='$product_name',image1='$image1', image2='$image2',price='$price',discount='$discount',total_price='$total_price',description='$description',ingredients='$ingredients'  WHERE product_id=$product_id and status=0";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
              echo '<script>window.location.href="product.php";</script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    
?>