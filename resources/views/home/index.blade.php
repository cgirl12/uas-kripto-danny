<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>QR Code</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid header position-relative overflow-hidden p-0">
            @if (Route::has('login'))
                <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">
                    <a href="index.html" class="navbar-brand p-0">
                        <h1 class="display-6 text-primary m-0">
                            <img src="{{ asset('image/logo-danny.png') }}" alt="Logo" class="me-2" style="height: 50px; border-radius: 50px;">
                            Danny
                        </h1>
                    </a>                
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="feature.html" class="dropdown-item">Features</a>
                                    <a href="pricing.html" class="dropdown-item">Pricing</a>
                                    <a href="blog.html" class="dropdown-item">Blog</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                        </div>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Log In</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary rounded-pill text-white py-2 px-4">Sign Up</a>
                            @endif
                        @endauth
                    </div>
                </nav>
            @endif
        
            <!-- Hero Header Start -->
            <div class="hero-header overflow-hidden px-5">
                <div class="rotate-img">
                    <img src="img/sty-1.png" class="img-fluid w-100" alt="">
                    <div class="rotate-sty-2"></div>
                </div>
                <div class="row gy-5 align-items-center d-flex justify-content-between">
                    <!-- Bagian Teks -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">
                            Welcome to <br> QR Code Generator
                        </h1>
                        <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                            Generato your text or URL easily with high quality QR Code.
                        </p>
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.7s">Get Started</a>
                    </div>
            
                    <!-- Card QR Code -->
                    <div class="col-lg-4 wow fadeInRight ms-auto" data-wow-delay="0.2s">
                        <div class="bg-white p-4 w-100 rounded-lg custom-shadow text-center" style="border-radius: 5px;">
                            <h2 class="font-bold text-purple-700">QR Code</h2>
                            <p class="text-green-900">(https://example.com)</p>
                            <div class="result">
                                @if(isset($qrCode))
                                    {!! $qrCode !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hero Header End -->
        </div>
        
        <!-- Navbar & Hero End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-2">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start text-white">
                        <img src="{{ asset('image/logo-danny.png')}}" alt="Logo Danny" style="height: 40px; border-radius: 50px;">
                    </div>                    
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Danny Firmansyah</a>, All right reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>