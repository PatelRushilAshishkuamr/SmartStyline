<?php
   session_start();
   
  global $user;
  @$user=$_SESSION["user"];  
  echo "User : " . $user;   
  if($user == "")
  {
    echo "<script language='javascript'>window.location.href='index.php';</script>";             
  }
?>

<?php
  global $email_id;
    include("config.php");
    $sql= "select * from customer where email_id = '$user' and status = 0";
        $result=mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
        while($row = mysqli_fetch_array($result))
          {
          $email_id = $row['email_id'];
          $customer_id = $row['customer_id'];
          
          }
  ?>




<?php
// initialize shopping cart class
include 'Cart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['product_id'])){
        $product_id = $_REQUEST['product_id'];
        // get product details
        $query = $db->query("SELECT * FROM beauty_product WHERE product_id = ".$product_id);
        $row = $query->fetch_assoc();
        $itemData = array(
            'product_id' => $row['product_id'],
            'product_name' => $row['product_name'],
            'image1' => $row['image1'],
            'total_price' => $row['total_price'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['product_id'])){
        $itemData = array(
            'rowid' => $_REQUEST['product_id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['product_id'])){
        $deleteItem = $cart->remove($_REQUEST['product_id']);
        header("Location: viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['user'])){
        
        global $email_id;
        
        $sql1 = "select * from customer where email_id = '$user' and status=0";
                                                    $result1 = mysqli_query($con,$sql1);
                        while($row = mysqli_fetch_array($result1))
                                                    {
                        $email_id = $row['email_id'];
                                                    }
        
        
        
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orders 
        (email_id, total_price, created, modified) VALUES 
        ('".$email_id."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO order_detail
                (order_id,email_id,product_id,total_price,quantity,date,status)
                VALUES ('".$orderID."','".$user."', 
                '".$item['product_id']."','".$cart->total()."', 
                '".$item['qty']."',NOW(),'pending');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}