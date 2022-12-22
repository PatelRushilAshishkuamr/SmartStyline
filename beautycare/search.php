<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smart Styiln</title>
  <!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php include ('header1.php'); ?>

<section class="" >
<div class="col-md-12 text-center">
<h2 class="title" style="margin-bottom: -100px;">Our Product</h2>
      <div class="container pb-90" >

        <div class="section-content" >
          
          <div class="row">

            <div class="col-md-12" style="margin-left: 10px;">
           
              <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox" >
                <div class="isotope-layout-inner">


<?php    
 if(isset($_GET['search']))
{
  $search_query=$_GET['search'];
    $sql1 = "select * from beauty_product where status=0 and product_name like '%$search_query%'";
    $result1 = mysqli_query($con,$sql1);
    while($row = mysqli_fetch_array($result1))
      {
    $Path="admin/productimage/".$row['image1'];
      ?>
                  <!-- Isotope Item Start -->
                  <div class="isotope-item cat1 cat3">
                    <div class="isotope-item-inner">
                      <div class="product">
                        <div class="product-header">
                          <span class="onsale">Sale!</span>
                          <div class="thumb image-swap">
                            <a href="single.php?product_id=<?php echo $row['product_id'];?>">
                              <?php echo "<img alt='' class='img-fluid w-100'  src='../admin/productimage/$row[3]'style='border:2px solid black;width:250px;height:250px';>" ?>
              
                            </a>
                            <a href="single.php">  </a>
                          </div>
                          <div class="product-button-holder">
                            <ul class="shop-icons">
                              <li class="item"><a href="#" class="button btn-quickview" title="Product quick view"></a></li>
                              <li class="item"><a href="#" class="button tm-btn-add-to-cart">Add to cart</a></li>
                            </ul>
                          </div>
                        </div>



                        <div class="product-details">


                          <h5 class="product-title"><a href="single.php?product_id=<?php echo $row['product_id'];?>"><?php echo $row['product_name'];?></a></h5>
                          <span class="price">
                            <ins><span class="amount"><a href="single.php">₹<?php echo $row['price'];?></a></span></ins>
                          </span>
                        </div>
 
                      </div>

                      </div>

                  </div>
                 <?php
  }
   }
                else 
                {
                    echo "No Record Found";
                }
            
?>
            
        </div>

                        
               
      </div>

</div>
</div></div></div>
    </section>
<?php
include('footer.php');
?>
</body>
</html>