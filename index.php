<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HGE | Home</title>
    <link rel="stylesheet" href="icon_css/all.min.css">
	<link rel="stylesheet" href="icon_css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet"> 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

    <!-- cookie info -->
    <div class="cookie_container">
      <p>
        HGE would like to let you know that we use cookies in our website <br>
        as an effort to give you the best user experience possible and show <br>
        you adverts more relevant to you!
      </p>

      <button class="cookie_btn">Okay</button>
    </div>

    <!----js for cookie info------>
    <script>
        const cookieContainer = document.querySelector(".cookie_container");
        const cookieButton = document.querySelector(".cookie_btn");

        cookieButton.addEventListener("click", () => {
        cookieContainer.classList.remove("active");
        localStorage.setItem("cookieBannerDisplayed", "true");
        });

        setTimeout(() => {
        if (!localStorage.getItem("cookieBannerDisplayed")) {
            cookieContainer.classList.add("active");
        }
        }, 2000);
    </script>

    <!-- page heading -->
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                <img src="images/logo.jpg" alt="" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a class="active" href="../e-commerce web app/index.php">Home</a></li>
                        <li><a href="../e-commerce web app/information.php">Information</a></li>
                        <li><a href="../e-commerce web app/login.php">Wanted</a></li>
                        <li><a href="../e-commerce web app/workshop.php">Workshop</a></li>
                        <li><a href="../e-commerce web app/gallery.php">Gallery</a></li>
                        <li><a href="../e-commerce web app/contact.php">Contact</a></li>
                        <li><a href="../e-commerce web app/login.php">Featured</a></li>
                    </ul>
                </nav>

                <!-- nav icon -->
                <img src="images/menu.png" class="menu_icon" onclick="menuToggle()">
            </div>
            <div class="row">
                <div class="col2">
                    <h1>Health and Fitness<br>In the comfort of your home!</h1>
                    <p>Shop with HGE and take your health and fitness to the next level!</p>
                    <div class="search">
                        <div class="icon"></div>
                        <div class="input"></div>
                    </div>
                    <a href="../e-commerce web app/login.php" class="btn">Search For Products <i class="fas fa-search"></i></a>
                </div>
                <div class="col2"> 
                    <img src="images/img9.jpg" alt="">
                </div>
            </div>
        </div> 
    </div>

    <!-- products -->
    <div class="container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col3">
                <video controls autoplay muted loop><source src="images/vid4.mp4"></video>
                <h4>Yoga Mat</h4>
                <p>$45</p>
            </div>
            <div class="col3">
                <video controls autoplay muted loop><source src="images/vid2.mp4"></video>
                <h4>Crossfit Ropes</h4>
                <p>$50</p>
            </div>
            <div class="col3">            
                <video controls autoplay muted loop><source src="images/vid3.mp4"></video>
                <h4>Kettle Bell</h4>
                <p>$60</p>
            </div> 
            <a href="../e-commerce web app/login.php" class="btn">See More <i class="fas fa-arrow-right"></i></a>
        </div>
    </div> 
    
    <!-- slideshow -->
    <div class="slideshow">
        <h2 class="title">Trending Products</h2>
        <div class="row">
            <div class="col4">
                <img name = "slide">

                <!-- captcha verification -->
                <div class="g-recaptcha" data-sitekey="6LeNxJgfAAAAALV8hzVTajOEa1IAEa3A_Wbqd9o4"></div>
                
                <!-- number of views counter -->
                <span><p> Number of page views <i class="fas fa-arrow-down"></i></p></span>
                <a href="https://www.hitwebcounter.com" target="_blank">
                <img class="counter" src="https://hitwebcounter.com/counter/counter.php?page=7979323&style=0024&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter"/></a>
            </div>
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
                    <li><a class="active" href="../e-commerce web app/index.php">Home</a> <span><i class="fas fa-arrow-left"></i>You are here!</span></li>
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

    <!-------------------SLIDE SHOW JS---------------------->
    <script>
        var i = 0; //start
        var images = [];
        var time = 2500;

        //images in slideshow
        images[0] = 'images/img2.jpg';
        images[1] = 'images/img3.jpg';
        images[2] = 'images/img6.jpg';
        images[3] = 'images/img7.jpg';


        //changing the image
        function changeImg(){
            document.slide.src = images[i];

            if(i < images.length - 1){
                i++;
            } 
            else{
                i = 0;
            }

            setTimeout("changeImg()", time);   
        }

        window.onload = changeImg;
    </script>

</body>
</html>