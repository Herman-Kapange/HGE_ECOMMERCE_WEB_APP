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
                        <li><a href="../e-commerce web app/workshop.php">Workshop</a></li>
                        <li><a class="active" href="../e-commerce web app/gallery.php">Gallery</a></li>
                        <li><a href="../e-commerce web app/contact.php">Contact</a></li>
                        <li><a href="../e-commerce web app/login.php">Featured</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu_icon" onclick="menuToggle()">
            </div>
        </div>
    </div>

    <!-- gallery pictures and associated text -->
    <section class="gallery_container">
		<div class="title"><h1>Our Products</h1></div>		
		<div class="gallery_item">
			<div>
				<h3 class="title">Treadmill</h3>
				<p>You don't need to leave your home to get in a good run. Our treadmills are of very good quality and very flexible for home use. Very good for cardio and overall fitness.</p>
			</div>
			<div>
				<img class="gallery_image" src="images/treadmill.jpg">
			</div>
		</div>
		<br/>
		<br/>
		<div class="gallery_item">
			<div>
				<h3 class="title">Stationary Bicycle</h3>
				<p>Great for cardio and legs, it's perfect for home use. You don't need to leave yourt home to go for a bike ride, all the health benefits can be obtained from this equipment.</p>
			</div>
			<div>
				<img class="gallery_image" src="images/stationary_bike.jpg" >
			</div>
		</div>
		<br/>
		<br/>
		<div class="gallery_item">
			<div>
				<h3 class="title">Dumbell</h3>
				<p>Great your home workout! They are relatively small and very flexible for a variety of workoutsm which makes them very useful at home.</p>
			</div>
			<div>
				<img class="gallery_image" src="images/dumbell.jpg">
			</div>
		</div>
		<br/>
		<br/>
		<div class="gallery_item">
			<div>
				<h3 class="title">Barbell</h3>
				<p>A great all round piece of equipment that can be used to train and exercise most parts of the body. A great product for home use.</p>
			</div>
			<div>
				<img class="gallery_image" src="images/barbell.jpg">
			</div>
		</div>
        <br/>
		<br/>
		<div class="gallery_item">
			<div>
				<h3 class="title">Footwork Ladder</h3>
				<p>Very flexible for home use. The footwork ladder is a great workout tool to greatly increase your co-ordination and footwork while simultaneously improving your cardio!</p>
			</div>
			<div>
				<img class="gallery_image" src="images/footwork_ladder.jpg" >
			</div>
		</div>
        <br>
        <br>
        <h2>Many more products available on our store! </h2><a href="../e-commerce web app/wanted.php" class="btn">Visit Store <i class="fas fa-arrow-right"></i></a>
        <br>
        <a href="../e-commerce web app/Gallery_RSS.xml">HGE RSS Feed <i class='fas fa-rss'></i></a>
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
                    <li><a href="../e-commerce web app/home.php">Home</a></li>
                    <li><a href="../e-commerce web app/information.php">Information</a></li>
                    <li><a href="../e-commerce web app/wanted.php">Wanted</a></li>
                    <li><a href="../e-commerce web app/workshop.php">Workshop</a></li>
                    <li><a class="active" href="../e-commerce web app/gallery.php">Gallery</a> <span><i class="fas fa-arrow-left"></i>You are here!</span></li>
                    <li><a href="../e-commerce web app/contact.php">Contact</a></li>
                    <li><a href="../e-commerce web app/featured.php">Featured</a></li>
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