<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:48:58 GMT -->
<head>
<!-----favicon------>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="HairCare- Beauty Salon & Barber HTML5 Template for Women & Men"/>
<meta name="keywords" content="agency, business, charity, corporate, fundraising"/>
<meta name="author" content="ThemeMascot"/>

<!-- Page Title -->
<title>Smart Stylin</title>

<!-- Favicon and Touch Icons -->

<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="css/javascript-plugins-bundle.css" rel="stylesheet"/>

<!-- CSS | menuzord megamenu skins -->
<link href="js/menuzord/css/menuzord.css" rel="stylesheet"/>

<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>

<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/javascript-plugins-bundle.js"></script>
<script src="js/menuzord/js/menuzord.js"></script>

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/rs6.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/extra-rev-slider1.css">
<!-- REVOLUTION LAYERS STYLES -->
<!-- REVOLUTION JS FILES -->
<script src="js/revolution-slider/js/revolution.tools.min.js"></script>
<script src="js/revolution-slider/js/rs6.min.js"></script>
<script src="js/revolution-slider/extra-rev-slider2.js"></script>

<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="tm-container-1170px has-side-panel side-panel-right switchable-logo">
<?php
include ('header1.php');
?>  
<br><br><br>

<?php

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>

    <script>
    function updateCartItem(obj,product_id){
        $.get("cartAction.php", {action:"updateCartItem", product_id:product_id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }
        });
    }
    </script>
</head>
</head>
<body>
    
<div class="container">
    <h1 style="margin-left:400px; margin-top:10px;color:#F60; font-family:Georgia, 'Times New Roman', Times, serif;"> Shopping Cart </h1>
    <table class="table" style="margin-top:47px; margin-left:30px;">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>image</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["product_name"]; ?></td>
            
            <td> <img src='../../admin/productimage/<?php echo $item['image1'];?>' style='height:55px;;width:55px;'></td>
            <td><?php echo 'Rs.'.$item["total_price"].' '; ?></td>
            <td><input style="max-width:80;" type="number"  max="5" class="form-control text-center"  value="<?php echo $item["qty"]; ?>" onChange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo 'Rs.'.$item["subtotal"].' '; ?></td>
            <td>
                <!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
                <a href="cartAction.php?action=removeCartItem&product_id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onClick="return confirm('Are you sure?')">Delete<i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
        
        
        
        
        
        
        
            <td><a  href="product.php" class="my-cart-b item_add">Continue Shopping</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo 'Rs.'.$cart->total().' '; ?></strong></td>
            <td><a  href="checkout.php" class="my-cart-b item_add">Checkout</a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
</tr></td></tr></tbody></table></div></body></div></div></div></div></div>

<br><br><br>

<?php
include ("footer.php");

?>
