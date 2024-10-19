<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite.com</title>
    <!-- website-icon -->
     <link rel="icon" type="image/png" href="../images/bird.jpg">
    <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

     <!-- swipper css link  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

     <!-- custom css file link -->
      <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- header section start -->    
    
    <section class="header">
        <div style="display: flex; align-items: center; ">
            <img src="../images/bird.jpg" alt="Elite Logo" style="margin-right: 10px; height: 4rem; height: 4rem;" />
            <span style="font-size: 2.5rem; color: #72BF78; display: block; font-weight: bold; ">Elite </span>
        </div>
    <!-- <a class="im" href="#"><img src="../images/bird.jpg " width="50" height="50" class="img-fluid"></a>    
    <a href="home.php" class="logo"><b>Elite</b></a> -->
    
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="experts.php">Experts</a>
        <a href="fit_finder.php">Fit Finder</a>
        <a href="study_track.php">Study Pathways</a>
        <a href="Login.php">Login/Register</a>
        <a href="Reviews.php">Reviews</a>
        <a href="Contact.php">Contact</a>
    </nav>

         <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends --> 
     
    <!-- <div class="heading" style = "background:url(images/) no-repeat">
        <h1>about us</h1>
    </div>
    <div class="heading" style = "background:url(images/) no-repeat">
        <h1>experts</h1>
    </div> -->

    <!-- Home section starts -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url('../images/slide-1.jpeg') no-repeat">
                <div class="content">
                   <span>Explore, Learn, Achieve</span>
                   <h3>Navigate the World of Skills</h3>
                   <a href="study_track.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide" style="background: url('../images/slide-2.jpg') no-repeat">
                <div class="content">
                   <span>Discover, Create, Grow</span>
                   <h3>Grow Your Knowledge Base</h3>
                   <a href="study_track.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide" style="background: url('../images/slide-3.jpg') no-repeat">
                <div class="content">
                   <span>Dream, Build, Achieve</span>
                   <h3>Craft Your Future Path</h3>
                   <a href="study_track.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

    <!-- Home section ends -->

    <!-- Services section starts -->

<section class="services">
    <h2 class="heading-title">Our Services</h2>
    <div class="box-container">
        <div class="box">
            <img src="../images/course-icon.png" alt="">
            <h3>courses</h3>
        </div>
        <div class="box">
            <img src="../images/tutorial-icon.png" alt="">
            <h3>tutorials</h3>
        </div>
        <div class="box">
            <img src="../images/expert_talk.png" alt="">
            <h3>Doubt Clearing</h3>
        </div>
        <div class="box">
            <img src="../images/interest_test.png" alt="">
            <h3>interest test</h3>
        </div>
        <div class="box">
            <img src="../images/path.png" alt="">
            <h3>Career Path</h3>
        </div>
        <div class="box">
            <img src="../images/chat.png" alt="">
            <h3>Chat Service</h3>
        </div>
    </div>
</section>
    
    <!-- Services section ends -->
     <!-- Home about section starts -->

<section class="home-about">
    <div class="image">
        <img src="../images/logo.png" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
<p>Welcome to Career Navigator, your personalized guide to finding the perfect career path based on your unique interests and aspirations. 
    Whether you're passionate about technology, arts, sports, or any other field, our platform 
    provides tailored career recommendations and a clear, step-by-step roadmap to help you achieve your dreams. Discover the most suitable 
    educational paths, necessary skills, and opportunities, all in one place. Your future starts here!</p>
<a href="about.php" class="btn">read more</a>
    </div>
</section>

     <!-- Home about section ends -->
      <!-- home career path section starts  -->

<section class="home-study_track">
    <h1 class="heading-title"> study pathways</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="../images/1.png" alt="">
            </div>
            <div class="content">
                <h3>adventures and tours</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam ut nam similique ullam velit nisi!</p>
                <a href="study_track.php" class="btn">Explore</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="../images/2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventures and tours</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam ut nam similique ullam velit nisi!</p>
                <a href="study_track.php" class="btn">Explore</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="../images/3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventures and tours</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam ut nam similique ullam velit nisi!</p>
                <a href="study_track.php" class="btn">Explore</a>
            </div>
        </div>
    </div>
    <div class="learn">
            <a href="courses.php" class="btn">learn more</a>
        </div>
</section>
      <!-- home career path section ends -->

      <!-- home offer section starts  -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, tempore enim! Fugit voluptate cumque quaerat.</p>
        <a href="study_track.php" class="btn">Explore</a>
    </div>
</section>

      <!-- home offer section ends  -->
     
    <!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="fit_finder.php"><i class="fas fa-angle-right"></i> Fit Finder</a>
            <a href="study_track.php"><i class="fas fa-angle-right"></i> Study Pathways</a>
            <a href="Login.php"><i class="fas fa-angle-right"></i> Login/Register</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i> simakutemate@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> amravati, india - 444701</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>

<div class="credit">created by <span>ms. web developer</span> | all rights reserved!</div>

</section>

    <!-- footer section ends -->
     
       <!-- swiper js link  -->
       <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
     <script src="script.js"></script>

</body>
</html>