<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="home" id="home">
<br>
</section>
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>Mr V Food</a>

    <nav class="navbar">
        
        <a href="#about">about</a>
        <a href="#menu"class="active">menu</a>
        <a href="#order">order</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>



<!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>best food in the Srilanka</h3>
            <p>Since Sri Lanka is a multi cultural country, you cannot expect anything less when it comes to Sri Lankan food. Our country is filled with its regional flavours while the cuisine is known for a rich combination of rice specialities, spices, herbs, seafood, seasonal vegetables and fruits and of course, legumes.</p>
            <p>We aspire to be one of Sri Lanka's best food processing companies, industry renowned for stringent quality control. We develop and deliver high quality food to consumers across the world and in doing so we partner with farmers resulting in the creation of capabilities that are environmentally-sensitive and community-focused, thereby enabling sustainable development.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->
<?php include 'menu.php';?>
<!-- menu section ends -->

<!-- review section starts  -->

<!-- review section ends -->

<!-- order section starts  -->
<?php include 'order.php';?>
<!-- order section ends -->

<!-- footer section starts  -->
<?php include 'footer.php';?>
<!-- footer section ends -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>