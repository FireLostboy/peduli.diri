<!-- 
THEME: Small Apps | Bootstrap App Landing Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/small-apps-free-app-landing-page-template/
DEMO: https://demo.themefisher.com/small-apps/
GITHUB: https://github.com/themefisher/Small-Apps-Bootstrap-App-Landing-Template

Get HUGO Version : https://themefisher.com/products/small-apps-hugo-app-landing-theme/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

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


<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src={{asset("assetss/images/Login/front-desk-sign-in.jpg")}}
							alt="desk-image" style="height: 531px;"></div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="index.html"><img src={{asset("assetss/images/pedulidiri.png")}} alt=""></a>
						</div>
						<div class="title-text">
							<h3>Masuk Ke Akun Anda</h3>
						</div>
						<form method="POST" action="{{ route('login')}}">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>

                <div class="form-group">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" value="{{ old('password') }}" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    {{ __('Login') }}
                </button>
                    
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Tidak punya akun?  <a href="/register" class="text-primary">Membuat</a>
                </div>
              </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


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
  <script src="plugins/google-map/gmap.js"></script>
  
  <script src="js/script.js"></script>
</body>

</html>