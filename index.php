<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

    <script>
        $(document).ready(function() {
          $("form").submit(function(event) {
            event.preventDefault();
            var name = $("#mail-name").val();
            var email = $("#mail-email").val();
            var message = $("#mail-message").val();

            $(".form-message").load("mail.php", {
                name: name,
                email: email,
                message: message
            });
          });  
        });
    </script>
    <title>Responsive HTML/CSS predlozak</title>
</head>

<body>
<header class="site-header">
    <nav class="main-nav">
        <div class="main-nav__logo">
            <img src="img/Locastic_logo.png" alt="Locastic">
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <div class="nav-submenu" id="myTopnav">
                <button class="nav-dropbtn"><a href="#">Works</a></button>
                <ul class="nav-content">
                    <li><a href="#">Manistra na pome</a></li>
                    <li><a href="#">Biftek - Medium rare+</a></li>
                    <li><a href="#">Picigin 2016</a></li>
                    <li><a href="#">Jos jedan link eto tako</a></li>
                </ul>
            </div>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line_one"></div>
            <div class="line_two"></div>
            <div class="line_three"></div>
        </div>
    </nav>
</header>

    <!-- Start Slick Slider -->
    <div class="slider">
        <div class="slider-element"><img src="img/slider-image-1024x250.png" alt="Third slide" id="wows1_0" />
            <h2 class="slider-title">Moj najliššši naslov ikad</h2>
        </div>
        <div class="slider-element"><img src="img/slidertwo-mountains-1024x250.png" alt="First slide" id="wows1_0" />
            <h2 class="slider-title">Mountains</h2>
        </div>
        <div class="slider-element"><img src="img/sliderthree-dogo-1024x250.png" alt="Second slide" id="wows1_0" />
            <h2 class="slider-title">Dog</h2>
        </div>
    </div>
    <!-- End Slick Slider -->

    <div class="main-wrapper__card">
        <div class="card">
            <img src="img/content-image.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Roboto 40px Size, Spacing 44px - Comment On The Importance Of Human Life</h5>
                <p class="card-text">Roboto Regular, 22px, Spacing 34px - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="card-btn">View full article</a>
            </div>
        </div>
        <div class="card">
            <img src="img/content-image.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Roboto 40px Size, Spacing 44px - Comment On The Importance Of Human Life</h5>
                <p class="card-text">Roboto Regular, 22px, Spacing 34px - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="card-btn">View full article</a>
            </div>
        </div>
        <div class="card">
            <img src="img/content-image.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Roboto 40px Size, Spacing 44px - Comment On The Importance Of Human Life</h5>
                <p class="card-text">Roboto Regular, 22px, Spacing 34px - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="card-btn">View full article</a>
            </div>
        </div>

        <div class="card">
            <img src="img/content-image.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Roboto 40px Size, Spacing 44px - Comment On The Importance Of Human Life</h5>
                <p class="card-text">Roboto Regular, 22px, Spacing 34px - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="card-btn">View full article</a>
            </div>
        </div>
        <div class="card">
            <img src="img/content-image.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Roboto 40px Size, Spacing 44px - Comment On The Importance Of Human Life</h5>
                <p class="card-text">Roboto Regular, 22px, Spacing 34px - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="card-btn">View full article</a>
            </div>
        </div>
        <div class="card">
            <img src="img/content-image.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Roboto 40px Size, Spacing 44px - Comment On The Importance Of Human Life</h5>
                <p class="card-text">Roboto Regular, 22px, Spacing 34px - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="card-btn">View full article</a>
            </div>
        </div>
    </div>

    <div class="main-wrapper__button">
        <button class="button">Load more</button>
    </div>

    <div class="contactform-wrapper">
        <h3 class="contactform-title">Contact Form</h3>
        <div class="main-container">
            <form action="mail.php" method="POST">
                <label class="form-title" for="fname">Contact Name</label>
                <input id="mail-name" type="text" id="fname" name="firstname" placeholder="Doktor Slicer">

                <label class="form-title" for="lname">Email address</label>
                <input id="mail-email" type="text" id="email" name="email" placeholder="frontend@locastic.com">

                <label class="form-title" for="message">Message</label>
                <textarea id="mail-message" name="message"></textarea>

                <input type="submit" value="Send Message">
                <p class="form-message"></p>
            </form>
        </div>
    </div>
</body>

<footer>
    <div class="footer">
        <div class="footer-left">
            <p>2016 Locastic Test Page</p>
        </div>
        <div class="footer-right">
            <p>By Frontend Developer</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="js/nav.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').bxSlider();
          });
        </script>
</footer>



</html>