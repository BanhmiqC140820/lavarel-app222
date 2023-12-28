<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nhat Quang Manager Group 7</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
   <!-- bootstrap -->
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <!-- Favicons -->

  <link href="{{asset('assets1')}}/img/favicon.png" rel="icon">
  <link href="{{asset('assets1')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets1')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('assets1')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets1')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets1')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('assets1')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('assets1')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('assets1')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets1') }}/css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php 
     $userId = Session::get('user'); 
        $userKey = 'giohang_' . $userId['id'];
        $giohang = Session::get($userKey,[]);
    $giohangCount = count($giohang);
        ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a class="text-center" href="{{route('user.home')}}">E-Commerce <br><span class="ms-5 " style="color: #47b2e4">Store</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('user.home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('user.home')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('user.home')}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{route('user.home')}}">Products</a></li>
          <li><a class="nav-link scrollto" href="{{route('user.home')}}">Team</a></li>          
          <li><a class="nav-link scrollto" href="{{route('user.home')}}">Contact</a></li>
          <li ><a class="nav-link scrollto badge" href="{{route('shoppingcart')}}">Shopping Cart
            @if(isset($giohang))
            <span class="badge bg-success rounded-pill mb-3">
                {{ $giohangCount }}
            </span>
            @else
                <span class="badge bg-danger rounded-pill mb-3">
                    0
                </span>
            @endif  
          </a></li>
          <li><a class="getstarted scrollto" href="{{route('user.home')}}">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>E-commerce and Online Presence</h1>
          <h2>Enhance your online presence and e-commerce capabilities.<br>
            Optimize your website for a better user experience.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=c0FNHW-q80Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="../assets1/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>
  <h1 class="text-center mt-5">Product Detail</h1>
  <div class="container my-3 mx-auto" s>
    <div class="row">
        <div class="col-4">
            <img src="{{asset('images/'.$products1->img)}}" alt="">
        </div>
        <div class="col-8"style="padding-top:80px">
            <div>
                <div class="d-flex">
                    <div class="me-2">
                        <div><span class="fw-bold">Product name: </span></div>
                        <div><span class="fw-bold">Price: </span></div>
                        <div><span class="fw-bold">Quantity: </span></div>
                        <div><span class="fw-bold">Origin: </span></div>
                        <div><span class="fw-bold">Description: </span></div>
                    </div>
                    <div class="">
                        <div>{{$products1->name}}</div>
                        <div>{{$formattedAmount = number_format($products1->price, 0, ',', '.').' VNĐ'}}</div>
                        <div>{{$products1->quantity}}</div>
                        <div>{{$products1->origin}}</div>
                        <div>{{$products1->description}}</div>
                    </div>
                </div>
                <a href="{{ route('shoppingcart', ['mh' => $products1->id, 'th' => $products1->name, 'gia' => $products1->price, 'img' => $products1->img]) }}" class="mt-2 btn btn-success" >
                    Add to cart
                </a>
            </div>
           
           
        </div>
      </div>
  </div>
  
  <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets1')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('assets1')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets1')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('assets1')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('assets1')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('assets1')}}/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('assets1')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets1')}}/js/main.js"></script>

</body>

</html>