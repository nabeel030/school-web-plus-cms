@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Gallery</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <br><br>

    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">

          @foreach($gallery as $gallery)

          <div class="col-md-3 ftco-animate">
            <a href="{{$gallery->img}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{$gallery->img}});">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>

          @endforeach

        </div>
      </div>
    </section>
<br><br>
@endsection
