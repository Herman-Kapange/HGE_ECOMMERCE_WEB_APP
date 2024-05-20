<?php

//database connection
@include 'DB_connect.php';

//starting session
session_start();

//adding and saving a new product to the database
if(isset($_POST['add_product'])){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_category = $_POST['p_category'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'uploaded_img/'.$p_image;

    $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image, category) 
                                VALUES('$p_name','$p_price','$p_image','$p_category')") or die('query failed');

    if($insert_query){
       move_uploaded_file($p_image_tmp_name, $p_image_folder);
       $message[] = 'Product added succesfully';
    }else{
        $message[] = 'An error occured, product not added';
    }
}

//deleteing product from the database
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE product_id = $delete_id");
    if($delete_query){
         header('location:admin.php');
        $message[]= 'product deleted';
    }else{
        header('location:admin.php');
        $message[]= 'product could not be deleted';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Admin</title>
    <link rel="stylesheet" href="icon_css/all.min.css">
	<link rel="stylesheet" href="icon_css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
</head>
<body>

<?php

//message associated with database transactions
if(isset($message)){
    foreach($message as $message){
        echo "<script>alert('$message')</script>";
    }
}

?>

    <div class="admin_page">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.jpg" alt="" width="125px">
                </div>
                <nav>
                    <ul>
                        <li><a href="logout.php" class="active">Logout</a> <i class="fas fa-arrow-right"></i></li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col2">
                    <div class="form_container">
                        <div class="form_btn">
                            <span>Add Product</span>
                            <hr id="underline">
                        </div> 

                        <form action="" method="post" class="add_product_form" enctype="multipart/form-data">
                        <input type="text" name="p_name" placeholder="product name" class="box" required>
                        <input type="number" name="p_price" min="0" placeholder="product price" class="box" required>
                        <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                        <span><p>Category</p> </span> 
                        <select name="p_category" placeholder="product category" class="box" required>
                            <option value="equipment">Equipment</option>
                            <option value="top3">A Top 3 Product</option>
                            <option value="tech">Tech</option>
                            <option value="medical">Medical</option>
                            <option value="clothing">Clothing</option>
                        </select>
                        <input type="submit" value="Add" name="add_product" class="btn">
                    </form> 

                    </div>
                </div>
                <div class="products_table"> 
                    <table>
                        <thead>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Category</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            <?php 
                            
                                //retrieving and desplaying all products from the database in table format
                                $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                                if(mysqli_num_rows($select_products) > 0){
                                    while($row = mysqli_fetch_assoc($select_products)){       
                            ?>

                            <tr>
                                <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                                <td><?php echo $row['name']; ?></td>
                                <td>$<?php echo $row['price']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td>
                                    <a href="admin.php?delete=<?php echo $row['product_id']; ?>" class="btn" 
                                    onclick="return confirm('are you sure you want to delete this product?');"> <i class="fas fa-trash"></i> delete </a>
                                </td>
                            </tr>

                            <?php

                                    }
                                }else{
                                    echo "<span>*No products added yet</span>";
                                }

                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>