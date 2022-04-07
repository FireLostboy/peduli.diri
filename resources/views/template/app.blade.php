<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Peduli Diri</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href={{asset('assets/images/favicon.ico')}} />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href={{asset("assets3/lib/owlcarousel/assets/owl.carousel.min.css")}} rel="stylesheet">
    <link href={{asset("assets3/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")}} rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{asset("assets3/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{asset("assets3/css/style.css")}} rel="stylesheet">
</head>

<body>
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Peduli Diri</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ Auth::user()->getFoto()}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->username}}</h6>
                        
                      <span>{{ Auth::user()->role}}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    @if(auth()->user()->role == 'admin')
                    <a href="/admin" class="nav-item nav-link"><i class="fa fa-user-circle"></i>Data User</a>
                    @endif
                    <a href="/perjalanan" class="nav-item nav-link"><i class="fa fa-user-circle"></i>Perjalanan</a> 
                    <a href="/home" class="nav-item nav-link"><i class="fa fa-user-circle"></i>MY Profile</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    </div>
                    <div class="nav-item dropdown">
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ Auth::user()->getFoto()}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->username}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="/home" class="dropdown-item">My Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <i class="ti-power-off text-primary"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
              @yield('content')
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; Peduli Diri, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{asset("assets3/lib/chart/chart.min.js")}}></script>
    <script src={{asset("assets3/lib/easing/easing.min.js")}}></script>
    <script src={{asset("assets3/lib/waypoints/waypoints.min.js")}}></script>
    <script src={{asset("assets3/lib/owlcarousel/owl.carousel.min.js")}}></script>
    <script src={{asset("assets3/lib/tempusdominus/js/moment.min.js")}}></script>
    <script src={{asset("assets3/lib/tempusdominus/js/moment-timezone.min.js")}}></script>
    <script src={{asset("assets3/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}></script>

    <!-- Template Javascript -->
    <script src={{asset("assets3/js/main.js")}}></script>
</body>

</html>