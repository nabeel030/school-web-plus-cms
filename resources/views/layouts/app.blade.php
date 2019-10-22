<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    @yield('styles')

    <style media="screen">

    body{
      background-color: #9B59B6;
    }

    .sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1C2833;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #F0F3F4;
  display: block;
}

.sidenav a:hover {
  color: #000080;
  background-color: #58D68D;
}

.sidenav a:active {
  background-color: #9B59B6;
}



.main {
  margin-left: 250; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


hr{
  height: 1px;
  color: #58D68D;
  background-color: #58D68D;
  border: none;
}

#rightalign {
  float: right;
  background-color: #1C2833;
  color: #F0F3F4;
  font-size: 20px;
}

#lefttalign {
  float: left;
  background-color: #1C2833;
  color: #F0F3F4;
  font-size: 20px;
}

#table_head {
  background-color: #58D68D;
  color: #000080;
}

#table_background {
  background-color: #ECC4FC;
  color: #000000;
}


    </style>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
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
                               
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('setting') }}">
                                      Site Setting
                                    </a>

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
<br>

<div class="container">
          <div class="row">

            @if(Auth::check())
              <div class="col-lg-3">

                    <div class=sidenav>
                        <h1 style="text-align: center; color: #9B59B6">WEB CMS</h1>
                        <hr>
                        <a href="{{route('slider.index')}} ">Slider</a>
                        <a href="{{route('brochure.index')}} ">Brochure</a>
                        <a href="{{route('news.index')}} ">News</a>
                        <a href="{{route('services.index')}}">Services</a>
                        <a href="{{route('about.edit')}}">About</a>
                        <a href="{{route('teacher.index')}}" >Teachers</a>
                        <a href="{{route('parent.index')}}" >Parents' Reviews</a>
                        <a href="{{route('gallery.index')}}">Gallery</a>
                        <a href="{{route('course.index')}}" >Classes</a>
                        <a href="{{route('home')}} ">Blog</a>
                    </div>

            </div>

            @endif

            <div class="col-lg-9">
              @yield('content')
            </div>
          </div>
        </div>
    </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{asset('js/toastr.min.js')}}"></script>
  <script>
  @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
  @endif

  @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}")
  @endif

  </script>

  @yield('scripts')

</body>
</html>
