<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- custom css link-->
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<!--Header section-->
  <section class="header">

    <a href="home.php" class="logo">travel</a>

    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>

  <!--Home section-->

  <section class="home">

    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(first.jpeg) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(discover-new-places.jpg) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(make-your-tour-worth.jpg) no-repeat;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>Make your tour worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>

  </section>

<!--services section-->
  <section class="services">

    <h1 class="heading-title"> our services</h1>

    <div class="box-container">

        <div class="box">
        <img src="Screenshot_2024-01-04_092035-removebg-preview.png" alt="">
        <h3>Adventure</h3>
        </div>

        <div class="box">
          <img src="Screenshot_2024-01-04_134617-removebg-preview.png" alt="">
          <h3>tour guide</h3>
        </div>

        <div class="box">
        <img src="Screenshot_2024-01-04_134338-removebg-preview.png" alt="">
          <h3>trekking</h3>
        </div>

        <div class="box">
        <img src="HD_White_Bonfire_Campfire_Firewood_Icon_PNG-removebg-preview.png" alt="">
          <h3>camp fire</h3>
        </div>

        <div class="box">
        <img src="Screenshot_2024-01-04_133801-removebg-preview.png" alt="">
          <h3>road trip</h3>
        </div>

    </div>

</section>

<!--Home About section starts-->
<section class="home-about">
  <div class="image">
    <img src="about-us.jpg" alt="">
  </div>

  <div class="content">
    <h3>about us</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti inventore quod error nam autem eos fuga neque molestias consectetur soluta non perferendis numquam pariatur fugit doloribus ab ullam, est cumque.</p>
    <a href="about.php" class="btn">Read More</a>  
  </div>
</section>

<!--Package section-->

<section class="home-package">
  <h1 class="heading-title">Our Packages</h1>
  <div class="box-container">
    <div class="box">
      <div class="image">
        <img src="home1.jpeg" alt="">
      </div>
      <div class="content">
        <h3>Adventure & Tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, assumenda.</p>
        <a href="book.php" class="btn">Book Now</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
      <img src="home2.jpeg" alt="">
      </div>
      <div class="content">
        <h3>Adventure & Tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, assumenda.</p>
        <a href="book.php" class="btn">Book Now</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="home3.jpeg" alt="">
      </div>
      <div class="content">
        <h3>Adventure & Tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, assumenda.</p>
        <a href="book.php" class="btn">Book Now</a>
      </div>
    </div>
  </div>

  <div class="load-more">
    <a href="Package.php" class="btn">Load More</a>
  </div>
</section>

<!--Offer section-->
<section class="home-offer">
  <div class="content">
    <h3>Upto 50% offer</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ea quidem rem! Voluptatem commodi tempore assumenda similique quos inventore quasi?</p>
    <a href="book.php" class="btn">Book Now</a>
  </div>
</section>
<!--Footer section-->
  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
        <h3>extract links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> teerms of use</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +91-0123456789 </a>
        <a href="#"> <i class="fas fa-phone"></i> +91-0130968489 </a>
        <a href="#"> <i class="fas fa-envelope"></i> letstravel@gmail.com </a>
        <a href="#"> <i class="fas fa-map"></i> Delhi, India - 423494 </a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
      </div>

    </div>
    
    <div class="credit"> created by <span>Let's Travel</span> | all rights reserved!</div>

  </section>

  <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- custom js link-->
  <script src="script.js"></script>
</body>
</html>