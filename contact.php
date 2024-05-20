<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Contact</title>
    <link rel="stylesheet" href="icon_css/all.min.css">
	<link rel="stylesheet" href="icon_css/fontawesome.min.css">
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
                        <li><a class="active" href="../e-commerce web app/contact.php">Contact</a></li>
                        <li><a href="../e-commerce web app/login.php">Featured</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu_icon" onclick="menuToggle()">
            </div>
        </div>
    </div>

    <!-- contact details -->
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
        </div>
        <div class="contact_container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-map"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Dedean Kimathi Road,<br>Lusaka, Zambia</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>0235671897 / 0234173011</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>HGE@gmail.com</p>
                    </div>
                </div>
            </div>

            <!-- contact form -->
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- privacy policy -->
    <section class="gallery_container">	
            <div class="gallery_item">
                <div>
                    <h3 class="title">Privacy Policy</h3>
                    <p>1. What information do we collect and how do we use it?
                         -We collect our client's contact details and personal information and use it in transactions with  our clients.
                    </p>
                    <br>
                    <p>2. Is my information secure and will anyone else access it?
                         -All your information is kept in a very secure database with strict security measures and cannot be accessed by other parties.
                    </p>
                    <br>
                    <p>3. Is it a must that I must give out my data and concent?
                         -In order to transact with HGE you must agree with our privacy policy and allow your data to be used.
                    </p>
                </div>
            </div>
	</section>

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
                    <li><a class="active" href="../e-commerce web app/contact.php">Contact</a> <span><i class="fas fa-arrow-left"></i>You are here!</span></li>
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
