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

<!--=============================
=            Sign Up            =
==============================-->

<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src={{asset("assetss/images/Login/sign-up.jpg")}} alt="desk-image" style="height: 688px">
					</div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="index.html"><img src={{asset("assetss/images/pedulidiri.png")}} alt=""></a>
						</div>
						<div class="title-text">
							<h3>Daftar Untuk Akun Baru</h3>
						</div>
						<form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <div class="input-group">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                        <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" placeholder="Telepon" required autocomplete="telp" autofocus>
                        @error('telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>    
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror   
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
                    </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                        {{ __('Daftar') }}
                    </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Sudah memiliki akun? <a href="/login" class="text-primary">Gabung</a>
                </div>
              </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sign Up  ====-->


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src={{asset("assetssplugins/jquery/jquery.min.js")}}></script>
  <script src={{asset("assetssplugins/bootstrap/bootstrap.min.js")}}></script>
  <script src={{asset("assetssplugins/slick/slick.min.js")}}></script>
  <script src={{asset("assetssplugins/fancybox/jquery.fancybox.min.js")}}></script>
  <script src={{asset("assetssplugins/syotimer/jquery.syotimer.min.js")}}></script>
  <script src={{asset("assetssplugins/aos/aos.js")}}></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="plugins/google-map/gmap.js"></script>
  
  <script src="js/script.js"></script>
</body>

</html>