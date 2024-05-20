<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Information</title>
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
                        <li><a class="active" href="../e-commerce web app/information.php">Information</a></li>
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


    <!-- latest info -->
    <div class="container">
        <h2 class="title">Latest Fitness Information</h2>
        <div class="row">
            <div class="col3">
                <img src="images/food.jpg" alt="" height="250px">
                <h4>Dieting in fitness</h4>
                <p><a href="https://www.excellenceinfitness.com/blog/nutrition-for-fitness-training-the-facts-you-need-to-know" class="fit_btn">Learn More <i class="fas fa-arrow-right"></i></a></P>
            </div>
            <div class="col3">
                <img src="images/sleep.jpg" alt="" height="250px">
                <h4>How sleep inhaces your health and fitness</h4>
                <p><a href="https://www.everydayhealth.com/fitness/intimate-relationship-between-fitness-sleep/" class="fit_btn">Learn More <i class="fas fa-arrow-right"></i></a></P>
            </div>
            <div class="col3">            
                <img src="images/stationary_bike.jpg" alt="" height="250px">
                <h4>Upcoming fitness tech</h4>
                <p><a href="https://www.wallpaper.com/technology/latest-exercise-machines-and-fitness-tech" class="fit_btn">Learn More <i class="fas fa-arrow-right"></i></a></P>
            </div> 
        </div>
    </div> 

    <!-- faqs -->
    <div class="faq_background">
        <section class="faq_container">
            <div class="title"><h1>Frequyently Asked Questions</h1></div>
            <div class="faq_box">
            <p class="faq_heading">FAQs</p>
                <div class="faqs">
                    <details>
                        <summary>Ho do I keep fit during quarantine?</summary>
                        <p class="text">The are a multitude of effective workouts that can be done within the house, contact HGE for more information.</p>
                    </details>
                    <details>
                        <summary>Is it necessary to go to the gym to keep fit?</summary>
                        <p class="text">No, you can get even more fit while at home, all you need is a few pieces of equipment and commitment!</p>
                    </details>
                    <details>
                        <summary>Where can i get my workout equipment repaired?</summary>
                        <p class="text">HGE has a full time workshop with qualified professionals to repair and maintain your equipment.</p>
                    </details>
                    <details>
                        <summary>Do you only sell Gym Equipment?</summary>
                        <p class="text">HGE also sells some equality wearable technology. We also offer repairs and maintenance of gym equipment at our workshop.</p>
                    </details>
                    <details>
                        <summary>Can you deliver the equipment that I purchase?</summary>
                        <p class="text">Delivery of equipment is offered, a delivery fee is attatched depending on the destination.</p>
                    </details>
                    <details>
                        <summary>Do you have a store where I can see and try out your products?</summary>
                        <p class="text">Yes HGE has a store in Lusaka, Zambia, visit our contact us page for our precise location.</p>
                    </details>
                </div>
            </div>
        </section>
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
                        <li><a class="active" href="../e-commerce web app/information.php">Information</a> <span><i class="fas fa-arrow-left"></i>You are here!</span></li>
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