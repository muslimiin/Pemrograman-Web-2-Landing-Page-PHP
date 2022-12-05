<!doctype html>
<html lang="en">
  <head>
    <title>Warung Sate  Gule &mdash; Pak Hirin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   <?php include('header.php') ?>
    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_utama3.png);" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">          
          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
            <h1 class="text-uppercase" data-aos="fade-up">Sate Gule Pak Hirin</h1>
            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Opening: 10:00 AM &mdash;
          Closing: 9:00 PM</p>
            <div data-aos="fade-up" data-aos-delay="100">
              <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Get In Touch</a>
            </div>
          </div>
        </div>
      </div>
      <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>

      <?php 
        require 'config.php';
        require 'functions.php';
          $ip      = ip_user();
          $browser = browser_user();
          $os      = os_user();
            if (! isset($_COOKIE['VISITOR'])) {
                $duration = time()+60*60*24;
                setcookie('VISITOR',$browser,$duration);
                $sql = "INSERT INTO statistik (ip, os, browser) VALUES ('$ip', '$os', '$browser')";
                $query = $koneksi->query($sql);
              }
      ?>
      
    </div>  
      <?php include('about.php') ?>
      <?php include('product.php') ?>
      <?php include('testimoni.php') ?>
      <?php include('contact.php') ?>
      <?php include('footer.php') ?>
  </div> <!-- .site-wrap -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>