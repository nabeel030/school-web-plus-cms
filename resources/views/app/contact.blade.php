@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-4 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Address</h3>
	            <p>{{$sitesetting->address}}</p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">{{$sitesetting->phone}}</a></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="{{$sitesetting->email}}">{{$sitesetting->email}}</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
    <h2 class="text-center"> <span style="color: orange">Have A Question?</span><span style="color: blue"> Ask Us</span></h2>
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light offset-md-3">
						<form action="{{route('contact.form')}}" method="post">

              @csrf

              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
                <div style="color: red">{{$errors->first('name')}}</div>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
                <div style="color: red">{{$errors->first('email')}}</div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
                <div style="color: red">{{$errors->first('subject')}}</div>
              </div>
              <div class="form-group">
                <textarea name="mailmessage" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                <div style="color: red">{{$errors->first('message')}}</div>
              </div>
              <div class="form-group text-center">
                <input type="submit" value="Send Message" class="btn btn-outline-success py-3 px-5">
              </div>
            </form>
					</div>
				</div>
			</div>
		</section>

@endsection
