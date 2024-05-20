<?php

//database connection
@include 'DB_connect.php';

//starting session
session_start();

//add to cart functionality
if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'This product has already been added to the cart';
    }else{
        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity)
        VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        $message[] = 'Product successfully added to cart';
        //echo "<script>alert('$message')</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Featured</title>
    <link rel="stylesheet" href="icon_css/all.min.css">
	<link rel="stylesheet" href="icon_css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
</head>

<body>

    <!--- side bar ------>
<div class="wrapper">
    <div class="main_content">
        <?php

        if(isset($message)){
            foreach($message as $message){
                echo "<script>alert('$message')</script>";
            }
        }

        ?>

        <div class="wanted_page">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.jpg" alt="" width="125px">
                    </div>

                    <nav>
                        <ul id="MenuItems">
                            <li><a href="../e-commerce web app/wanted.php">Wanted</a></li>
                            <li><a href="../e-commerce web app/featured.php" class="active">Featured</a></li>
                            <li><a href="logout.php">Logout <i class="fas fa-arrow-right"></i></a></li>

                            <?php

                            //number of cart items
                            $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                            $row_count = mysqli_num_rows($select_rows); 

                            ?>

                            <li><a href="../e-commerce web app/cart.php" class="cart"><i class="fas fa-shopping-cart"></i>Cart</a> <span><?php echo $row_count ?></span></li>
                        </ul>
                    </nav>
                    <img src="images/menu.png" class="menu_icon" onclick="menuToggle()">
                </div>
                
                <section class="products">

                <!-- display products in the top 3 category from the database -->
                <h2 id="top3" class="title">Top 3 Products</h2>
                <div class="box_container">
                    <?php

                    $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'top3'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                    ?>

                    <form action="" method="post">
                        <div class="box">
                            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                            <h3><?php echo $fetch_product['name']; ?></h3>
                            <div class="price">$<?php echo $fetch_product['price']; ?></div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                            <input type="submit" class="btn" value="Add to cart" name="add_to_cart">
                        </div>
                    </form>

                    <?php

                        }
                    }else{
                        echo "<span>*No products added to this category</span>";
                    }

                    ?>
                </div>
                </section>
                <section class="products">

                <!-- display products in the tech category from the database -->
                <h2 id="tech" class="title">Tech</h2>
                <div class="box_container">
                    <?php

                    $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'tech'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                    ?>

                    <form action="" method="post">
                        <div class="box">
                            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                            <h3><?php echo $fetch_product['name']; ?></h3>
                            <div class="price">$<?php echo $fetch_product['price']; ?></div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                            <input type="submit" class="btn" value="Add to cart" name="add_to_cart">
                        </div>
                    </form>

                    <?php

                        }
                    }else{
                        echo "<span>*No products added to this category</span>";
                    }

                    ?>
                </div>
                </section>
                <section class="products">

                <!-- display products in the medical category from the database -->
                <h2 id="medical" class="title">Medical</h2>
                <div class="box_container">
                    <?php

                    $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'medical'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                    ?>

                    <form action="" method="post">
                        <div class="box">
                            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                            <h3><?php echo $fetch_product['name']; ?></h3>
                            <div class="price">$<?php echo $fetch_product['price']; ?></div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                            <input type="submit" class="btn" value="Add to cart" name="add_to_cart">
                        </div>
                    </form>

                    <?php

                        }
                    }else{
                        echo "<span>*No products added to this category</span>";
                    }

                    ?>
                </div>
                </section>
                <section class="products">

                <!-- display products in the clothing category from the database -->
                <h2 id="clothing" class="title">Clothing</h2>
                <div class="box_container">
                    <?php

                    $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'clothing'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                    ?>

                    <form action="" method="post">
                        <div class="box">
                            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                            <h3><?php echo $fetch_product['name']; ?></h3>
                            <div class="price">$<?php echo $fetch_product['price']; ?></div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                            <input type="submit" class="btn" value="Add to cart" name="add_to_cart">
                        </div>
                    </form>

                    <?php

                        }
                    }else{
                        echo "<span>*No products added to this category</span>";
                    }

                    ?>
                </div>
                </section>
            </div>
        </div>

        <section class="footer">
            <div class="socials">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.snapchat.com/"><i class="fab fa-snapchat"></i></a>
                <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.skype.com/"><i class="fab fa-skype"></i></a>
            </div>
            <div>
                <nav>
                    <ul>
                        <li><a href="../e-commerce web app/index.php">Home</a></li>
                        <li><a href="../e-commerce web app/information.php">Information</a></li>
                        <li><a href="../e-commerce web app/login.php">Wanted</a></li>
                        <li><a href="../e-commerce web app/workshop.php">Workshop</a></li>
                        <li><a href="../e-commerce web app/gallery.php">Gallery</a></li>
                        <li><a href="../e-commerce web app/contact.php">Contact</a></li>
                        <li><a class="active" href="../e-commerce web app/login.php">Featured</a> <span><i class="fas fa-arrow-left"></i>You are here!</span></li>
                    </ul>
                </nav>
            </div>
            <div>
                <p class="copyright">© 2022 Home Gym Equipment. All rights reserved</p>
            </div>
        </section>

        <!------------- script ------------------->
        <script>
            var MenuItems = document.getElementById("MenuItems");
            //var Hide = documnet.getElementById("Hide");

            MenuItems.style.maxHeight = "0px";
            //Hide.style.display = "contents";

            function menuToggle(){
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "300px";
                    //Hide.style.display = 'none';
                }
                else
                {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
    </div>
    <div class="sidebar">
        <h2>Wearable Technology Categories</h2>
        <ul>
            <li><a href="#top3"><i></i>Top 3 Products</a></li>
            <li><a href="#tech"><i></i>Tech</a></li>
            <li><a href="#medical"><i></i>Medical</a></li>
            <li><a href="#clothing"><i></i>Clothing</a></li>
            <li><a href="../e-commerce web app/cart.php"><i></i>Payment Plan</a></li>
        </ul> 
    </div>
</div>
</body>
</html>