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

  <title>Welcome to Aark Group</title>
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
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="Founder">Founder</a></li>
              <li><a href="Co-Founder">CEO and Co-Founder</a></li>
            </ul>
          </li> 
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Aark Group</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Aark-Hotels-And-Resorts">Aark Hotels and Resorts</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to Aark Group</h1>
      <h2 style="text-align: justify;">The AARK Group is a professionally well experienced company that spreads over three different verticals namely Aark Reality, Aark Hotels and Resorts, Aark Charitable Trust. It's a group of companies with expertise from different fields put together for providing tailored fit, custom made services specifically designed according to your needs.</h2>
      <center><a href="#about" class="btn-get-started scrollto">Get Started</a></center>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container"><br>
        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Aark Group of companies</h3>
            <p style="text-align: justify;">
              AARK Group is a conglomerate of hospitality and realty industries. A group that is micromanaged by experts with extensive experience of having worked for various verticals in the business. Which now offers you a plethora of services custom made to serve all your hospitality, reality, infrastructural needs.
            </p>
            <p style="text-align: justify;">  
              AARK group houses of a team of young and professionally qualified creative team members that work under guidance of experienced and dynamic leaders. AARK Group was established with the goal of giving every event an excellent taste, experience, and identity along with excellent services.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Company Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
             <a href="Aark-Realty"> 
              <span>01</span>
              <h4>Aark Realty</h4>
              <p style="text-align: justify;">Aark Realty is fully focused on dealing with real estate services. We buy, sell and lease. Land, plots or buildings for any purpose. It functions on reality thereby providing you with a smooth experience.</p><br>
              <span><u>Get Started</u></span>
             </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
             <a href="Aark-Hotels-And-Resorts"> 
              <span>02</span>
              <h4>Aark Hotels and Resorts</h4>
              <p style="text-align: justify;">Aark Hotels and Resorts specifically manages the finest of properties related to hotels and resorts. We are here to help you buy, sell, lease or sublet Hotels and Resorts based on the requirements conveyed.</p><br>
              <span><u>Get Started</u></span>
             </a> 
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
             <a href="Aark-Charitable-Trust">
              <span>03</span>
              <h4>Aark Charitable Trust</h4>
              <p style="text-align: justify;">Aark Charitable Trust was started with a pure heart and sole intent of eliminating social problems. We strive to help and find solutions for society. As, we at Aark believe that we rise only by lifting others.</p><br>
              <span><u>Get Started</u></span>
             </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Company Section -->

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
              <h4><a href="javascript:void(0)">Buy, Sell and Lease</a></h4>
              <p style="text-align: justify;">We are here to assist you in buying, selling and leasing. Be it lands, buildings or plots.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="javascript:void(0)">Hospitality Consultancy </a></h4>
              <p style="text-align: justify;">We help you with any services needed in managing your restaurant or hotels. Consulting is the best way to go.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-male"></i><i class="bx bx-female"></i></div>
              <h4><a href="javascript:void(0)">Infrastructure Development</a></h4>
              <p style="text-align: justify;">It’s important to always find the right people for the right job. Here to help you hire the  best as teamwork is dreamwork.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-store"></i></div>
              <h4><a href="javascript:void(0)">Hospitality Applications</a></h4>
              <p style="text-align: justify;">Want to climb up the technical ladder? We are here with the best in class software applications that will allow you to proceed as you need.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-check-shield"></i></div>
              <h4><a href="javascript:void(0)">Aark Consultation Services</a></h4>
              <p style="text-align: justify;">You are a beginner in the industry, don’t feel alone. Reach out to us and we will help you set up your Restaurants, Hotels and manage them.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="javascript:void(0)">Funding Co-ordination</a></h4>
              <p style="text-align: justify;">For any kind of outdoor orders, we provide the best in class catering services. As, food is the life of any party.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Contact us for any services needed.</p>
          <a class="cta-btn" href="#contact">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

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

  <div class="sticky">
    FORMERLY PURPLE HOSPITALITY SERVICES<i class="fa fa-times" aria-hidden="true"></i>
  </div>

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