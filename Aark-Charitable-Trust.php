<?php

function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}
if(isset($_POST['submit'])){
$name = clean_text($_POST['name']);
$email = clean_text($_POST['email']);
$subject = clean_text($_POST['subject']);

$to = "festechsolutions@gmail.com";
$headers = "MIME-VERSION: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";
$headers = "From : <$email> \r\n "; 

$message = "Received Email from: $name\n\n";
$message .= clean_text($_POST['message']);
$message .= "\n\nTo send a reply, please click here -> $email";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aark Charitable Trust - Coming Soon</title>
  <meta content="Aark Group assists in Buying, Selling or Leasing of Hotels, Resorts and Restaurants on a Pan India basis. Assuring you of the best and quick deals. Aark Group also assists stand alone properties for a brand tie-up with reputed National/International Group Hotels." name="description">
  <meta content="hospitality, consultancy, hotels, resorts, restaurants, catering" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Sweet Alert Files -->
  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    @media only screen and (min-width: 400px) {
      .img-fluid {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    }
  </style>
</head>

<body>

 <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="https://theaarkgroup.com">Aark Group</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index#about">About Us</a></li>
              <li><a href="Founder">Founder</a></li>
              <li><a href="Co-Founder">CEO and Co-Founder</a></li>
            </ul>
          </li> 
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Aark Group</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Aark-Hotels-And-Resorts">Aark Hotels and Resorts</a></li>
              <li><a href="Aark-Realty">Aark Realty</a></li>
              <li><a href="#">Aark Charitable Trust</a></li>
            </ul>
          </li> 
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index">Home</a></li>
          <li>Aark Charitable Trust</li>
        </ol>
        <h2>Aark Charitable Trust</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Coming Soon Section ======= -->
    <section id="coming-soon" class="coming-soon">
      <div class="container">
        
        <div class="row">
          <div class="span">
            <img class="img-fluid" src="assets/img/coming-soon.jpg" alt="Coming-Soon"/>
            </div>
        </div>

      </div>
    </section><!-- End Coming Soon Section -->
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Feel free to contact us anytime</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><a href="#">102 Shravanthi Residency, Plot No 86A,MLA Colony, Road No.12, Banjara Hills,Hyderabad – 500004.</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><a href="mailto:aarkgroup@gmail.com">aarkgroup@gmail.com</a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><a href="tel:+91 78938 49994">+91 78938 49994</a></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
      
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.070235838642!2d78.4273844148766!3d17.40841668806605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDI0JzMwLjMiTiA3OMKwMjUnNDYuNSJF!5e0!3m2!1sen!2sin!4v1627049277011!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div><br>
              <div class="text-center"><input type="submit" name="submit" value="Send Message"></div>
              <?php
                if (isset ($_POST['submit']))
                {
                  if(mail($to,$subject,$message,$headers))
                  {
                    echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { swal("Hurray!","Your response has been recorded, Relax and sit back we will contact you soon.","success");';
                    echo '}, 1000);</script>';
                  }
                  else{
                    echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { swal("Oops","There is an error, We are working on the issue. Apologies for the Inconvenience caused","error");';
                    echo '}, 1000);</script>';
                  }
                }
              ?>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Aark Group, Formerly Purple Hospitality Services</span></strong>. All Rights Reserved
      
      <div class="credits">
        Developed by <a href="https://festech.in">Festech Solutions</a> in association with <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>