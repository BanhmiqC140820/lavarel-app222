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
  <link href="{{asset('assets1')}}/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    *{
    padding: 0;
    margin: 0;
   box-sizing: border-box;
}
body{
	background-color: #f8f8f8; 
}

.container1{
	width: 80%;
	
	min-height: 700px;
	display: flex;
	margin: 120px auto 20px auto;
}
.container_left{
	width: 70%;
	margin-right: 10px;
	height: -webkit-fill-available;
	overflow-y: auto;
}



.left_top{
	display: flex;
	align-items: center;
	justify-content: space-between;
	background-color: white;
}
.cbox{
	
	display: flex;
	align-items: center;
}
.cbox a{
	text-decoration: none;
}
.cbox span{
	font-size: 18px;
	font-weight: 600;
	color: black;
}
.cbox :hover{
	text-decoration: none;
}
.inputcbox{
	width: 16px;
	height: 16px;
	margin: 0 10px;
}
.xoatatca button{
	border: none;
	outline: none;
    background-color: white;
    padding: 4px 22px;
}
.xoatatca button span,
.xoatatca button i{
	font-size: 18px;
}
.left_bottom{
	display: flex;
	align-items: center;
	margin: 10px 0;
	background-color: white;
}
.info{
	width:50% ;
	display: block;
	display: flex;
	align-items: center;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}

.info span{
	margin-left: 10px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}

.info img{
	width: 80px;
	height: 80px;
	box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}

.price_count{
	flex: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.price{
	width: 65%;
	text-align: center;
}
.price span{
	display: block;
	color: red;
	font-weight: 600;
	font-size: 18px;
}
.price i{
	color: black;
}
.form_count .inputsl{
	width: 60px;
	
}
.form_count .submit{
	font-size: 18px;
	
	color: black;
}

.count input{
	width: 60px;
	height: 24px;
}
.count form{
	display: flex;
	align-items: center;
	
}
.count a:hover{
	text-decoration: none;
}
.count a span{
	font-size: 18px;
	padding: 4px;
	color: black;
}




.container_right{
	flex: 1;
	background-color: white;
}

.container_right h4{
	font-size: 20px;
	text-align: center;
	
}
.container_right .wrap{
	width: 100%;
	display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 20px 0;
    padding: 0 10px;
}
.wrap span{
	font-size: 18px;
}
.container_right a button{
	width: 100%;
	height: 40px;
	background-color: #A50A06;
	color: white;
	border: none;
	font-size: 18px;
}
.ght{
	width: 100%;
	display: block  !important;
}

 .tt {
	padding: 4px 8px;
	background-color: #A50A06;
	
	display: inline-block;
	margin: 10px 0;
}
 .tt a {
	text-decoration: none;
	color: white;
}
 .tt a span{
	font-size: 18px;
}
.giohangtrong{
	width: 100%;
	
}
.giohangtrong img{
	width: 100%;
	height: 100%;
}




  </style>
</head>

<body>
  <?php 
    $giohang = Session::get('giohang', []);
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
          <li ><a class="nav-link scrollto badge" href="#ShoppingCart">Shopping Cart
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

<div class="container1">
        
        @if($giohang!=null)
            <div class="container_left">
                <div class="left_top">
                    <div class="cbox">
                        
                        <a href="{{route('deleteall')}}"><span>Xóa tất Cả </span></a>
                    </div>
                    
                    
                </div>
                
                 @foreach($giohang as $g)
                <div class="left_bottom">
                    <div class="info">
                        
                        <img alt="" src="{{asset("images/".$g['img'])}}">
                        <span>{{$g['tenhang']}}</span>
                    </div>
                    <div class="price_count">
                        <div class="price">
                            <span>{{$formattedAmount = number_format($g['gia'], 0, ',', '.').' VNĐ'}}</span>
                            
                        </div>
                        <div class="count mx-3">
                            <form class="form_count" method="post" action="{{route('update',['mh' => $g['mahang']])}}">
                              @csrf
                              {{--de tranh tấn công bảo mật
                                Laravel sẽ tự động tạo ra một trường ẩn chứa CSRF như sau:
                                <input type="hidden" name="_token" value="csrf-token-value">
                                --}}
                                    <input class="inputsl" type="number" name="inputsl" value="{{$g['soluongmua']}}">
                                    <input class="submit" type="submit" value="Sửa">
                            </form>
                        </div>
                        <div class="count btn btn-danger">
                          <a class="text-decoration-none " style="color: white" href="{{route('delete',['mh' => $g['mahang']])}}"><i class="fa-solid fa-trash-can"></i>Xóa</a>	
                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="tt">
                    <a href="{{route('user.home')}}">
                        <span>Tiếp tục mua hàng</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            
            </div>
            <div class="container_right">
                <h4>Thông tin đơn hàng</h4>
                <div class="wrap">
                    
             
                    <span>Tổng cộng</span>
                    <span>
                      @php
                          $sum = 0;
                          foreach($giohang as $g)
                              $sum += $g['soluongmua'] * $g['gia'];
                          echo $formattedAmount = number_format($sum, 0, ',', '.').' VNĐ';
                      @endphp
                  </span>
                </div>
                <a href="{{route('acceptshoppingcart')}}">
                    <button>
                        Xác nhận giỏ hàng 
                    </button>
                </a>
            </div>
            @else
            <div class="ght">
                <div class="giohangtrong">
                <img alt="" src="https://maytot.com.vn/upload/image/cart.png">
                
                </div>
                <div class="tt">
                        <a href="htsanphamController">
                            <span>Tiếp tục mua hàng</span>
                            <i class="fa-solid fa-caret-right"></i>
                        </a>
                </div>
            </div>
            
         
        @endif    
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