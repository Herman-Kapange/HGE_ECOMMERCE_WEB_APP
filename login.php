<!-------------PHP for Login----------------->
<?php

//database connection
include 'DB_connect.php';

//initialising session
session_start();

error_reporting(0);

//locking session after 3 failed login attempts
if(isset($_SESSION['locked'])){
    $difference = time() - $_SESSION['locked'];
    if($difference > 600){
        unset($_SESSION['locked']);
        unset($_SESSION['login_attempts']);
    }
}

//veryfying email and password
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_object($result);

        if ($password == $row->password){
            $email == "admin@gmail.com" ? header("Location: admin.php") : header("Location: wanted.php");
        }else{
            $_SESSION['login_attempts'] += 1;
            $_SESSION['error'] = "Incorrect Password";
        }
    } else{
        $_SESSION['login_attempts'] += 1;
        $_SESSION['error'] = "Incorrect Email";
    }
}

//error message
if(isset($_SESSION['error'])){
    echo "<script>alert('$_SESSION[error]')</script>";
}

//unsetting error
unset($_SESSION['error']);

?>

<!--------------Login Page----------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
</head>
<body>
    
    <div class="contact_header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                <img src="images/logo.jpg" alt="" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="../e-commerce web app/index.php">Home</a></li>
                        <li><a href="../e-commerce web app/information.php">Information</a></li>
                        <li><a href="../e-commerce web app/login.php">Wanted</a></li>
                        <li><a href="../e-commerce web app/workshop.php">Workshop</a></li>
                        <li><a href="../e-commerce web app/gallery.php">Gallery</a></li>
                        <li><a href="../e-commerce web app/contact.php">Contact</a></li>
                        <li><a href="../e-commerce web app/login.php">Featured</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu_icon" onclick="menuToggle()">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col2">
            <div class="form_container">
                <div class="form_btn">
                    <span>Login</span>
                    <hr id="underline">
                </div> 
                
                <!-- login for with php associated with verification of credentials -->
                <form action="" method="POST" id="loginForm">
                    <input type="email" placeholder="Email" name="email" value="<?php echo $email;?>" required>
                    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['$password'];?>" required>
                    <?php

                        //initializing the locked session and deactivating button
                        if($_SESSION['login_attempts'] > 2){
                            $_SESSION['locked'] = time();
                            echo "<script>alert('You have exceeded your login attempts, please try again after 10 minutes')</script>";
                        }else{
                    ?>
                        <button name="submit" class="btn">Login</button>
                    <?php } ?>
                    <h5>Don't have an account? <a href="../e-commerce web app/sign-up.php"><u>Sign-Up</u></a></h5>
                </form>

            </div>
        </div>
        <div class="col2"> 
            <img src="images/img1.jpg" alt="">
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
                    <li><a href="../e-commerce web app/login.php">Featured</a></li>
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

</body>
</html>
