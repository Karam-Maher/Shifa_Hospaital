<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="">

    <title>Shifa Hospaital</title>

    <link rel="stylesheet" href="{{asset('front-assets/css/maicons.css')}}">

    <link rel="stylesheet" href="{{asset('front-assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('front-assets/vendor/owl-carousel/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('front-assets/vendor/animate/animate.css')}}">

    <link rel="stylesheet" href="{{asset('front-assets/css/theme.css')}}">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href=""><span class="mai-call text-primary"></span>+972592590546</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span>shifa-hospaital@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">Shifa</span>-Hospaital</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('home') ? 'active': ''}}" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('about') ? 'active': ''}}" href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('doctors') ? 'active': ''}}" href="{{route('doctors')}}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('news') ? 'active': ''}}" href="{{route('news')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('contact') ? 'active': ''}}" href="{{route('contact')}}">Contact</a>
                        </li>
                        @if(Route::has('login'))

                        @auth

                        <li class="nav-item">
                            <a class="nav-link" style="background-color: greenyellow" href="{{route('myappointment')}}">My Appointment</a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">

                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                        </li>
                        @endauth
                        @endif

                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    @yield('content')

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Hospaital-Al Aqsa</a></li>
                        <li><a href="#">Hospaital-European</a></li>
                        <li><a href="#">Hospaital-Nasir</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">Shifa Hospaital-Gaza</p>
                    <a href="#" class="footer-link">+972592590546</a>
                    <a href="#" class="footer-link">shifa-hospaital@gmail.com</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2022. All right reserved</p>
        </div>
    </footer>

    <script src="{{asset('front-assets/js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('front-assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('front-assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('front-assets/vendor/wow/wow.min.js')}}"></script>

    <script src="{{asset('front-assets/js/theme.js')}}"></script>

</body>

</html>
