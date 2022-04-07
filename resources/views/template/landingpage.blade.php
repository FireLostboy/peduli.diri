<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Peduli Diri</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" href={{asset('assets/images/favicon.ico')}} />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href={{asset("assetss/plugins/bootstrap/bootstrap.min.css")}}>
  <link rel="stylesheet" href={{asset("assetss/plugins/themify-icons/themify-icons.css")}}>
  <link rel="stylesheet" href={{asset("assetss/plugins/slick/slick.css")}}>
  <link rel="stylesheet" href={{asset("assetss/plugins/slick/slick-theme.css")}}>
  <link rel="stylesheet" href={{asset("assetss/plugins/fancybox/jquery.fancybox.min.css")}}>
  <link rel="stylesheet" href={{asset("assetss/plugins/aos/aos.css")}}>

  <!-- CUSTOM CSS -->
  <link href={{asset("assetss/css/style.css")}} rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">Peduli Diri</h1>
				<p class="text-white mb-5">Selamat Datang di Peduli Diri. Di Web
					Ini Anda Bisa Mencatat Semua Perjalanan Anda .</p>
				<a href="/login" class="btn btn-main-md">Masuk</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src={{asset("assetss/images/Globalization-cuate.svg")}} alt="screenshot">
			</div>
		</div>
	</div>
  @yield('content')
</section>

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Peduli Diri</small class="text-secondary">
  </div>

	<div class="text-center bg-dark py-1">
   <small> <p>Distributed By <a href="https://themewagon.com/">Themewagon</a></p></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src={{asset("assetss/plugins/jquery/jquery.min.js")}}></script>
  <script src={{asset("assetss/plugins/bootstrap/bootstrap.min.js")}}></script>
  <script src={{asset("assetss/plugins/slick/slick.min.js")}}></script>
  <script src={{asset("assetss/plugins/fancybox/jquery.fancybox.min.js")}}></script>
  <script src={{asset("assetss/plugins/syotimer/jquery.syotimer.min.js")}}></script>
  <script src={{asset("assetss/plugins/aos/aos.js")}}></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src={{asset("assetss/plugins/google-map/gmap.js")}}></script>
  
  <script src={{asset("assetss/js/script.js")}}></script>
</body>

</html>