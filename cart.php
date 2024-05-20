<?php

// database connection
@include 'DB_connect.php';

//starting session
session_start();

//updating number of items selected and prices in cart 
if(isset($_POST['update_update_btn'])){
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE product_id = '$update_id'");
    if($update_quantity_query){
        header('location:cart.php');
    }
}

//removing items from cart
if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE product_id = '$remove_id'");
    header('location:cart.php');
}

//deleting all items from cart
if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart`");
    header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Cart</title>
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
                    <ul id="MenuItems">
                        <li><a href="../e-commerce web app/wanted.php" class="active">Wanted</a></li>
                        <li><a href="../e-commerce web app/featured.php">Featured</a></li>
                        <li><a href="logout.php">Logout <i class="fas fa-arrow-right"></i></a></li>

                        <?php

                        $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                        $row_count = mysqli_num_rows($select_rows); 

                        ?>

                        <li><a href="../e-commerce web app/cart.php" class="cart"><i class="fas fa-shopping-cart"></i>Cart</a> <span><?php echo $row_count ?></span></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu_icon" onclick="menuToggle()">
            </div>
    </div>

    <section class="shopping_cart">

        <h2 class="title">Cart</h2>
        
        <table>
            <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php

                //displaying all the details of all items in cart and calculating grand total grand total

                $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                $grand_total = 0;

                if(mysqli_num_rows($select_cart) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                ?>

                <tr>
                    <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                    <td><?php echo $fetch_cart['name']; ?></td>
                    <td>$<?php echo number_format($fetch_cart['price']); ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['product_id']; ?>">
                            <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
                            <input type="submit" value="update" name="update_update_btn">
                        </form>
                    </td>
                    <td>$<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
                    <td><a href="cart.php?remove=<?php echo $fetch_cart['product_id']; ?>" onclick="return confirm('remove item from cart?')" class="btn"><i class="fas fa-trash"></i> remove</a></td>
                </tr>

                <?php
                $grand_total += $sub_total;
                    }
                }
                ?>
                <tr class="table_bottom">
                    <td><a href="wanted.php" class="btn">Continue Shopping</a></td>
                    <td colspan="3">Grand Total</td>
                    <td>$<?php echo $grand_total; ?></td>
                    <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="btn"> <i class="fas fa-trash"></i>delete all</a></td>
                </tr>
            </tbody>
        </table>

        <div class="checkout_btn">
            <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>"> Proceed to checkout <i class="fas fa-arrow-right"></i></a>
        </div>

    </section>
</div>

</body>
</html>