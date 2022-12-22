

		<?php
include("header1.php");
?>
                    

<br><br>




<?php
// include database configuration file
include 'dbConfig.php';

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
//$_SESSION['sessCustomerID'] = 'userid';

// get customer details by session customer ID
//$query = $db->query("SELECT * FROM registration WHERE userid = ".$_SESSION['sessCustomerID']);




$user=$_SESSION["user"];
// get customer details by session customer ID
$query = $db->query("select * from customer where email_id = '$user' and status = 0");




$custRow = $query->fetch_assoc();
?>

<div class="container">
<h1 style="margin-left:493px; margin-top:20px; color:#F60; font-family:Georgia, 'Times New Roman', Times, serif;"> Order Preview </h1>
    
    <table class="table" style="margin-top:30px;">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
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
            <td><?php echo 'Rs.'.$item["total_price"].' '; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo 'Rs'.$item["subtotal"].' '; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo 'Rs.'.$cart->total().' '; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4 style="color:#F60;">Shipping Details</h4>
        <p><?php echo $custRow['cust_fullname']; ?></p>
        <p><?php echo $custRow['city']; ?></p>
        <p><?php echo $custRow['address']; ?></p>
         <p><?php echo $custRow['mob_number']; ?></p>
        
        </div>
    <div class="footBtn">
        <a  href="product.php" class="my-cart-b item_add" ><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
		<br>
        <a href="cartAction.php?action=placeOrder"  class="my-cart-b item_add" >Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</body>
</html>
<br><br>
<?php
include("footer.php");
?>