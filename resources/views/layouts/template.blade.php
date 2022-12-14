<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul') - PT Mitratani Dua Tujuh</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/tema/img/logoo.png')}}" rel="icon">
  <link href="{{asset('tema/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="tema/vendor/aos/aos.css" rel="stylesheet">
  <link href="tema/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="tema/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="tema/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="tema/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="tema/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="tema/css/style.css" rel="stylesheet">
  
 
  <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="(url('/'));" class="logo d-flex align-items-center">
        <img src="tema/img/logo utama.png" alt="">
        <span></span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#profil">Profil</a></li>
          <li><a class="nav-link scrollto" href="#produk">Produk</a></li>
          <li class="dropdown"><a href="#team"><span>Team</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/komisaris">Komisaris</a></li>
              <li><a href="/direksi">Direksi</a></li>
              <li><a href="/gm">General Manager</a></li>
              <li><a href="/kadiv">Kepala Divisi</a></li>
            </ul>
          </li>
          <li><a href="/informasi">Informasi</a></li>
          <li><a href="/media">Media</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="#buku tamu">Buku Tamu</a></li>

          @if(Auth::check())
          <li><a class="nav-link scrollto" href="#dashboard">Dasboard</a></li>
          <li><a class="getstarted scrollto btn-danger" href="/" style="background: #FF0000 !important;">Logout</a></li>
          @else
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
          @endif

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ID
              </a>              
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">ID</a></li>
                <li><a class="dropdown-item" href="#">EN</a></li>                
            </ul>
          </li>                              
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('hero')

  <main id="main">

  @yield('main')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="(url('/'));" class="logo d-flex align-items-center">
              <img src="tema/img/logoo.png" alt="">
              <span>PT Mitratani Dua Tujuh</span>
            </a>
            <p>"Menjadi produsen sayuran beku dan olahannya yang terdepan,
               berkualitas tinggi dan beorientasi pada standar makanan sehat".</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/mitratani_27" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/mitratani27.jember" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/mitrataniduatujuh/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Product</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Edamame</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Okra</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Sweet Potato</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Jusme</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Mix Vegetables</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Jl. Brawijaya No. 83, Wonosari, Mangli,  <br>
              Kec. Kaliwates, Kabupaten Jember,<br>
              Jawa Timur 68131 <br><br>
              <strong>Phone:</strong> +62-331 422222, +62-331 488881<br>
              <strong>Email:</strong> mitratani27@mitratani27.co.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PT Mitratani Dua Tujuh</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="tema/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="tema/vendor/aos/aos.js"></script>
  <script src="tema/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="tema/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="tema/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="tema/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="tema/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="tema/js/main.js"></script>

  @yield('extrajs')

</body>

</html>