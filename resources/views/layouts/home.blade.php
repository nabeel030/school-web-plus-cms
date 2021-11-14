<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{$sitesetting->title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="turbolinks-cache-control" content="no-preview">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

      @livewireStyles
    <style>
      .about {
        float: left;
        width: 200px;
        height: 200px;
        margin-right: 30px;
      }

      .about_container{
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 35px;
      }

      #history{
        height: 360px;
        width: 300px;
      }
    </style>
  </head>
  <body>
	  <div class="py-2" style="background-color: #16A085" >
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">{{$sitesetting->address}}</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">{{$sitesetting->email}}</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">{{$sitesetting->phone}}</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="{{route('index')}}" style="color: #F3823E">{{$sitesetting->title}}</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="{{route('index')}}" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="{{route('teachers')}}" class="nav-link">Teacher</a></li>
	        	<li class="nav-item"><a href="{{route('classes')}}" class="nav-link">Classes</a></li>
            <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
	        	<li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="{{route('career')}}" class="nav-link">Career</a></li>
	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Column 2</h2>
                <img src="{{$sitesetting->logo}}" alt="img" height="100px" width="100px">
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">{{$sitesetting->address}}</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$sitesetting->phone}}</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$sitesetting->email}}</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="{{$sitesetting->twitter}}"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="{{$sitesetting->facebook}}"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('js/google-map.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

  <script src="{{asset('js/toastr.min.js')}}"></script>
  <script>
  @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
  @endif
  </script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

      @livewireScripts
  </body>
</html>
