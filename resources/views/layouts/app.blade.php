{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                {{-- </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body> --}}
{{-- </html> --}} 

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Home || FAM</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gold Stone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- Custom-Files -->
    <!-- Bootstrap-Core-Css -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- Testimonials-Css -->
    <link href="{{asset('css/mislider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/mislider-custom.css')}}" rel="stylesheet" type="text/css" />
    <!-- Style-Css -->
    <link href="{{asset('css/style.css')}}" media="all" rel="stylesheet" type="text/css" />
    <!-- Font-Awesome-Icons-Css -->
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet" />
    <link href="{{asset('css/preload.css')}}" rel="stylesheet" />
    <link href="{{asset('css/head.css')}}" rel="stylesheet" />
    <!-- //Custom-Files -->
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" />
    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- header -->
    <div class="beko" id="animationWindow">
        <div class="bookshelf_wrapper">
            <ul class="books_list">
                <li class="book_item first"></li>
                <li class="book_item second"></li>
                <li class="book_item third"></li>
                <li class="book_item fourth"></li>
                <li class="book_item fifth"></li>
                <li class="book_item sixth"></li>
            </ul>

            <div class="shelf"></div>
        </div>

        <div class="container" id="co"><canvas id="c"></canvas>

            <h1>Welcome To FAM Team</h1>
        </div>
    </div>

    <header>
        <!-- top header -->
        <!-- //top header -->
        <!-- middle header -->
        <div class="middle-w3ls-nav py-2 fixed-header" style="background-color:#27466f">
            <div class="container">
                <div class="row"><a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="index.html">FAM Group</a>

                    <div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
                        <div class="row">
                            <div class="col-sm-4 nav-middle">
                                <div class="agile-addresmk">
                                    <p><span class="font-weight-bold text-dark">Mail Us</span> <a href="mailto:info@fam.co.tz">info@fam.co.tz</a></p>
                                </div>
                            </div>

                            <div class="col-sm-4 col-6 nav-middle mt-sm-0 mt-2">
                                <div class="agile-addresmk">
                                    <p><span class="font-weight-bold text-dark">Call Us</span> +255743373993</p>
                                </div>
                            </div>

                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            
                            <li ><a href="{{url('admin_receive')}}">Receiving</a></li>
                            <li ><a href="{{url('admin_2')}}">Form 2</a></li>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 
                            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest

                            {{-- <div class="col-sm-4 col-6 top-login-butt text-right mt-sm-2"><a class="button-head-mow3 text-white" href="login.html">Login</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //middle header -->
    </header>
    <!-- //header -->


  <main class="py-4">
    @yield('content')
</main>
    
    <!-- //footer -->
    <script src="{{asset('js/head.js')}}"></script>
    <script src="{{asset('js/load.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(window).load(function() {
                setTimeout(function() {
                    $('#animationWindow').fadeOut('slow', function() {});
                }, 500);

            });
        });
    </script>
    <!-- Js files -->
    <!-- JavaScript -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->
    <script src="js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- banner slider -->
    <script src="js/slider.js"></script>
    <!-- //banner slider -->
    <!-- testimonial-plugin -->
    <script src="js/mislider.js"></script>
    <script>
        jQuery(function($) {
            var slider = $('.mis-stage').miSlider({
                //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                stageHeight: 320,
                //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                slidesOnStage: false,
                //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                slidePosition: 'center',
                //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                slideStart: 'mid',
                //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                slideScaling: 150,
                //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                offsetV: -5,
                //  Center slide contents vertically - Boolean. Default: false
                centerV: true,
                //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                navButtonsOpacity: 1,
            });
        });
    </script>
    {{-- <!-- //testimonial-plugin -->
    <!-- numscroller-js-file -->
    <script src="{{asset('js/numscroller-1.0.js')}}"></script>
    <!-- //numscroller-js-file -->
    <!-- smooth scrolling -->
    <script src="{{asset('js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth scrolling -->
    <!-- move-top -->
    <script src="{{asset('js/move-top.js')}}"></script>
    <!-- easing -->
    <script src="{{asset('js/easing.js')}}"></script>
    <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <!-- Default-JavaScript-File -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- //Js files --> --}}
</body>

</html>
