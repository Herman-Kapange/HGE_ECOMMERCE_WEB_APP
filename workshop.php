<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Gallery</title>
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
                        <li><a class="active" href="../e-commerce web app/workshop.php">Workshop</a></li>
                        <li><a href="../e-commerce web app/gallery.php">Gallery</a></li>
                        <li><a href="../e-commerce web app/contact.php">Contact</a></li>
                        <li><a href="../e-commerce web app/login.php">Featured</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu_icon" onclick="menuToggle()">
            </div>
        </div>
    </div>

    <!-- workshop info -->
    <section class="gallery_container">
        <div class="title"><h1>Workshop</h1></div>		
		<div class="gallery_item">
			<div>
				<h3 class="title">HGE Workshop</h3>
				<p>HGE has a fully operational workshop with qualified professionals in the rapair and maintenance of gym equipment. Visit our workshop for affordable and quality repairs and maintenance of your gym equipment.</p>
			</div>
			<div>
				<img class="gallery_image" src="images/workshop.jpg">
			</div>
		</div>
		<br/>
		<br/>
        <h2>Get in touch and arrange an appointment at the workshop! </h2><a href="../e-commerce web app/contact.php" class="btn">Contact Now <i class="fas fa-arrow-right"></i></a>
        <br>
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
                    <li><a class="active" href="../e-commerce web app/workshop.php">Workshop</a> <span><i class="fas fa-arrow-left"></i>You are here!</span></li>
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