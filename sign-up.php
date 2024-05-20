<!------------PHP for Sign-Up-------------->
<?php

//database connection
include 'DB_connect.php';

error_reporting(0);

//initialising session
session_start();

//saving sign up credentials to database and returning error if credentials exist
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $Spassword = md5($_POST['Spassword']);

    if($password == $Spassword){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username','$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if(!$results){
                echo "<script>alert('You have successfully signed up!.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['Spassword'] = "";
            } else{
                echo "<script>alert('Sorry, something went wrong.')</script>";
            }
        } else{
            echo "<script>alert('Sorry, an account with this email already exists.')</script>";
        }
        
    } else{
        echo"<script>alert('Password did not match, try again.')</script>";
    }
}

?>

<!--------------Login Page----------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Sign-Up</title>
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
                    <span>Sign-Up</span>
                    <hr id="underline">
                </div> 

                <!-- sign up form with php associated with sign up and saving credentials -->
                <form action="" method="POST" id="sign_upForm">
                    <input type="text" placeholder="Username" name="username" value="<?php echo $username;?>" required>
                    <input type="email" placeholder="Email" name="email" value="<?php echo $email;?>"required>
                    <input type="password" placeholder="Password" name=password value="<?php echo $_POST['$password'];?>" required>
                    <input type="password" placeholder="Confirm Password" name=Spassword value="<?php echo $_POST['$Spassword'];?>" required>
                    <button name="submit" class="btn">Sign-Up</button>
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
                    <li><a class="active" href="../e-commerce web app/index.php">Home</a><span>You are here!</span></li>
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

        MenuItems.style.maxHeight = "0px";

         function menuToggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "300px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>

