<!DOCTYPE html>
<html>
<head>
<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
</
</head>
<body class="tm-container-1300px has-side-panel side-panel-right">

 <?php
include ("header1.php");
?>
  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-90 pb-90">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Prouct Details</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Category</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">Product</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Product Detalis</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

             
        
    <section>
      <?php    
  
  include("config.php");
  $product_id=$_GET['product_id'];
    $sql = "select * from beauty_product where status=0 and product_id='".$_REQUEST['product_id']."'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
      {
    $Path="../productimage/".$row['image1'];
      ?>
      <div class="container pb-90">
        <div class="section-content">
          <div class="product-single">
            <div class="row">
              <div class="col-md-6">
                <div class="product-image-slider lightgallery-lightbox">
                  <div class="tm-owl-thumb-carousel" data-nav="true" data-slider-id="1">
                    <div data-thumb="">
                      <?php echo "<img alt='' class='img-fullwidth'  src='../../admin/productimage/$row[3]''>" ?>
                    </div>
                     <div data-thumb="">
                      <?php echo "<img alt='' class='img-fullwidth'  src='../../admin/productimage/$row[4]''>" ?></a>
                    </div>
                  
                  </div>
                  <ul class="tm-owl-thumbs" data-slider-id="1">
                    <li class="tm-owl-thumb-item"><?php echo "<img alt='' class='img-fullwidth'  src='../../admin/productimage/$row[3]''>" ?></li>
                    <li class="tm-owl-thumb-item"><?php echo "<img alt='' class='img-fullwidth'  src='../../admin/productimage/$row[4]''>" ?></li>
                   
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="product-summary">
                  <h2 class="product-title mt-0"><?php echo $row['product_name'];?></h2>
                  
                  <p class="price"><span class="amount"><span class="currency-symbol"><small>₹</span><del><?php echo $row['price'];?></del></small> <?php echo $row['total_price'];?></span>  <sup style="color:red;">  <?php echo $row['discount'];?>% off </sup></p>



<form method="POST">

<style>
.rating1 {
    direction:ltr;
}
.starRating:not(old) {
    display: inline-block;
    height: 18px;
    width:100px;
    overflow: hidden;
}

.starRating:not(old) > input{
  margin-right :-26%;
  opacity      : 0;
}

.starRating:not(old) > label {
    float: right;
    background: url(images/1.png);
    background-size: contain;
    margin-right: 2px;
}

.starRating:not(old) > label:before{
  content         : '';
  display         : block;
  width           : 18px;
  height          : 18px;
  background      : url(images/3.png);
  background-size : contain;
  opacity         : 0;
  transition      : opacity 0.2s linear;

}

.starRating:not(old) > label:hover:before,
.starRating:not(old) > label:hover ~ label:before,
.starRating:not(:hover) > :checked ~ label:before{
  opacity : 1;
}
/*-- //Ratings --*/
/*-- //single-page --*/
/*-- to-top --*/
#toTop {
  display: none;
  text-decoration: none;
  position: fixed;
  bottom: 55px;
  right: 2%;
  overflow: hidden;
  z-index: 999; 
  width: 32px;
  height: 32px;
  border: none;
  text-indent: 100%;
  background: url(images/3.png) no-repeat 0px 0px;
}
#toTopHover {
  width: 32px;
  height: 32px;
  display: block;
  overflow: hidden;
  float: right;
  opacity: 0;
  -moz-opacity: 0;
  filter: alpha(opacity=0);
}
</style> 



          <div class="rating1">
            <span class="starRating">
              <input id="rating5" type="radio" name="rating" value="5">
              <label for="rating5">5</label>
              <input id="rating4" type="radio" name="rating" value="4">
              <label for="rating4">4</label>
              <input id="rating3" type="radio" name="rating" value="3" checked="">
              <label for="rating3">3</label>
              <input id="rating2" type="radio" name="rating" value="2">
              <label for="rating2">2</label>
              <input id="rating1" type="radio" name="rating" value="1">
              <label for="rating1">1</label>
            </span>
          </div><br>
                    <input type="text" name="message" value="" placeholder="Enter Message">  
                    <input type="submit" name="ratenow" value="Rate Now" style="    outline: none;
    padding: 14px 0;
    background: #abc502;
    border: none;
    width: 20%;
    font-size: 1em;
    color: #fff;
    font-weight: 700;
    letter-spacing: 2px;">
             
          
                    <?php
          include('config.php');
          if(isset($_POST['ratenow']))
          {
            $star=$_POST['rating'];
            $rating_id=$_REQUEST['rating_id'];
             $message=$_REQUEST['message'];
            $sql="select * from rating where customer_id='$customer_id' and rating_id='$rating_id'";
            
            
            $result1=mysqli_query($con,$sql);
            $count=mysqli_num_rows($result1);
            if($count>0)
            {
              echo "<script language='javascript'>alert('Sorry, You Already Rate !');</script>";
              echo "<script language='javascript'>window.location.href='index.php';</script>";
            }
            else
            {
              
              $sql1="insert into rating(rating_id,customer_id,product_id,rating_score,message,date)values('$rating_id','$customer_id','$product_id',$star,'$message',now())";
            $result2=mysqli_query($con,$sql1);
            if($result2)
            {
              echo "<script language='javascript'>alert('Thank You For Rating');</script>";
              echo "<script language='javascript'>window.location.href='index.php';</script>";
            }
            }
          }
          ?>

                  <div class="product_meta">
                  <span class="sku_wrapper">Ingredients</span>  
                  <div class="short-description">
                    <?php echo $row['ingredients']?>
                    
                  </div>
                </div>
                  <div class="product_meta">
                    <span class="posted_in" >Category :-  
                    
                      <?php 
                      $id=$row['category_id'];
                      $sql1="select category_name from beauty_category where category_id=$id and status=0";
                      $result1 = mysqli_query($con,$sql1);
                      while($row1 = mysqli_fetch_array($result1))
                      {
                        echo $row1['category_name'];
                      }
                      ?>
                    </span>
                    <span class="sku_wrapper">Description</span><div class="short-description"><?php echo $row['description'];?></div>
                    
                  </div>
                  <div class="btn-add-to-cart">
                    <div class="quantity">
                      <input class="minus" type="button" value="-">
                      <input type="number" id="quantity_5f0c6f4cb0b78" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
                      <input class="plus" type="button" value="+">
                    </div>

                    <?php
/*<script src="raty/jquery.raty.js" type="text/javascript"></script>

 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */


error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'beautycare');


define('PROJECT_NAME', 'Product rating system with php, mysql, jquery and Ajax - www.thesoftwareguy.in');
$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
  $DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}



?>
     
    
           
    
    
    <?php
    $product_id=$_GET['product_id'];
      $sql = "SELECT product_id,product_name,image1,total_price  FROM beauty_product WHERE product_id='$product_id' and status=0 LIMIT 16";
      try {
        $stmt = $DB->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
      } catch (Exception $ex) {
        echo $ex->getMessage();
      }

      // fetching ratings for specific product
       

       
      $stmt2 = $DB->prepare($sql);
     

      for ($i = 0; $i < count($products); $i++) {

        ?>
      

                    <a href="cartAction.php?action=addToCart&product_id=<?php echo $products[$i]["product_id"];?>" class="btn btn-theme-colored1 ml-10">Add to cart</a>

<?php }?>
                  </div>
                </div>
              </div>
             
            </div>
 </form>
</span>
</p>
</div>

                <!-- End Isotope Gallery Grid -->
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php  }?> 
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php
include ("footer.php");
  ?>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/shop-product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:51:35 GMT -->
</html>