@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Certified Teachers</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Teachers <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Certified</span> Teachers</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row">

          @foreach($teachers as $teacher)

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{$teacher->img}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>{{$teacher->name}}</h3>
                <span class="position mb-2">{{$teacher->subject}}</span>
                <div class="faded">
                  <p>{{$teacher->review}}</p>
                  <ul class="ftco-social text-center">
                    <p class="ftco-animate" style="color: orange">{{$teacher->qualification}}</p>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          @endforeach

        </div>
      </div>
    </section>

    @endsection
