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

  <title>Aark Hotels And Resorts</title>
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
              <li><a href="#">Aark Hotels and Resorts</a></li>
              <li><a href="Aark-Realty">Aark Realty</a></li>
              <li><a href="Aark-Charitable-Trust">Aark Charitable Trust</a></li>
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
          <li>Aark Hotels and Resorts</li>
        </ol>
        <h2>Aark Hotels and Resorts</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row col-md-12">        
          <div class="col-xs-12 col-sm-6" >
            <span class="float-left">
              <div class="portfolio-details-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                  <img src="assets/img/hotel.jpg" alt="Hotels And Resorts">
                </div>
              </div>
            </span>
          </div>
          <div class="col-xs-12 col-sm-6 col-centered">
            <p style="text-align: justify; padding-top: 30px;">
              AARK Hotels and resorts is a professionally managed entity that offers a wide range of services. A company that is micro-managed by experts with extensive experience of having worked for various hospitality verticals. Which now offers you a plethora of services custom made to serve all your hospitality needs. From setting up new hotels and resorts to staffing and maintenance we are here for all your needs.<br><br>
              We provide the services that are listed below:
            </p>
          </div>           
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
  
   <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-truck"></i></div>
              <h4><a href="">Mystery audits for hotels, malls, and retail spaces</a></h4>
              <p style="text-align: justify;">Mystery audits play a very crucial role in reviews of the services, we help you with mystery audits of your hotels, malls.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Kitchen design, planning, and implementation</a></h4>
              <p style="text-align: justify;">We assist you in designing the kitchen in your hotels or restaurants to ensure it serves with utmost efficiency.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-male"></i><i class="bx bx-female"></i></div>
              <h4><a href="">Hospitality Consultant</a></h4>
              <p style="text-align: justify;">We help you with any services needed in managing your restaurant or hotels. Consulting is the best way to go.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-store"></i></div>
              <h4><a href="">Buying selling and leasing of hotels and resorts</a></h4>
              <p style="text-align: justify;">We are here to assist you in buying, selling and leasing. Be it hotels, restaurants, or resorts.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-check-shield"></i></div>
              <h4><a href="">Funding co-ordination of hotel projects</a></h4>
              <p style="text-align: justify;">We help you with co-ordination of funding required for the projects.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Management of hotels and resorts</a></h4>
              <p style="text-align: justify;">We are a team of qualified professionals in hospitality industry for 30+ years. We help you in setting up and managing your hotel, resort or restaurant.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
  
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