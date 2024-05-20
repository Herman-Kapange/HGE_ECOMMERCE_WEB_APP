<?php

//database connection
@include 'DB_connect.php';

//starting session
session_start();

//obtaining details of all products in cart and calculating total and desplaying all this in a form
if(isset($_POST['order_btn'])){
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $payment_method = $_POST['payment_method'];

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
    $price_total = 0;
    if(mysqli_num_rows($cart_query) > 0){
        while($product_item= mysqli_fetch_assoc($cart_query)){
            $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .' ) ';
            $product_price = number_format($product_item['price'] * $product_item['quantity']);
            $price_total += $product_price;
        }
    }

    $total_product = implode(', ',$product_name);
    $detail_query = mysqli_query($conn, "INSERT INTO `orders`(name, phone_number, email, address, postal_code, payment_method, total_product, total_price) 
    VALUES('$name','$phone_number','$email','$address','$postal_code','$payment_method','$total_product','$price_total')") or die('query failed');

    if($cart_query && $detail_query){
        echo "
        <div class='order_message_container'>
            <div class='message_container'>
                <h3>Thank you for shopping with HGE!</h3>
                <div class='order_detail'>
                    <span>".$total_product."</span>
                    <span class='total'>Total: $".$price_total."</span>
                </div>
                <div class='customer_details'>
                    <p>Your Name: <span>".$name."</span></p>
                    <p>Your Phone Number: <span>".$phone_number."</span></p>
                    <p>Your Email: <span>".$email."</span></p>
                    <p>Your Address: <span>".$address."</span></p>
                    <p>Your Postal Code: <span>".$postal_code."</span></p>
                    <p>Your Payment Method: <span>".$payment_method."</span></p>
                    <p>(*Pay when product arrives*)</p>
                    <p><a href='wanted.php' class='btn'>Continue Shopping</a></p>
                </div>
            </div>
        </div>            
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Checkout</title>
    <link rel="stylesheet" href="icon_css/all.min.css">
	<link rel="stylesheet" href="icon_css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
</head>
<body>

<div class="cart_page">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.jpg" alt="" width="125px">
            </div>
            <nav>
                <ul>
                    <li><a href="">Wanted</a></li>
                    <li><a href="">Featured</a></li>
                    <li><a href="logout.php">Logout</a></li>

                    <?php

                    $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                    $row_count = mysqli_num_rows($select_rows); 

                    ?>

                    <li><a href="" class="cart"><i class="fas fa-shopping-cart"></i>Cart</a> <span><?php echo $row_count ?></span></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="checkout_form">

        <h2 class="title">Checkout</h2>

        <form action="" method="post">
            <div class="display_order">
                <?php
                
                    //displaying order in form
                    $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                    $total = 0;
                    $grand_total = 0;
                    if(mysqli_num_rows($select_cart) > 0){
                        while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                        $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                        $grand_total = $total += $total_price;
                ?>
                <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
                <?php
                        }
                    }else{
                        echo "<div class='display_order'><span>Your cart is empty!</span></div>";
                    }
                ?>
                <span class="grand_total"> Grand Total : $<?= $grand_total; ?></span>
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>Name</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>
                <div class="inputBox">
                    <span>Phone Number</span>
                    <input type="number" placeholder="enter your phone number" name="phone_number" required>
                </div>
                <div class="inputBox">
                    <span>Email</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>
                <div class="inputBox">
                    <span>Address</span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>
                <div class="inputBox">
                    <span>Postal Code</span>
                    <input type="text" placeholder="enter your postal code" name="postal_code" required>
                </div>
                <div class="inputBox">
                    <span>Payment Method</span>
                    <select name="payment_method" id="">
                        <option value="cash on delivery" selected>cash on delivery</option>
                        <option value="credit card">credit card</option>
                        <option value="paypal">paypal</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="Order Now" name="order_btn" class="btn">
        </form>

    </section>
</div>

</body>
</html>