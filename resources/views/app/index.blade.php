@extends('layouts.home')

@section('content')

@include('includes.slider')

@foreach($brochure as $brochure)

@if($brochure->active)

<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
            <div class="modal-body">
            <button style="color: red; font-size: 40px" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				      <img src="{{$brochure->image}}" alt="image" width="100%">
            </div>
    </div>
</div>
@endif
@endforeach

<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
      <div class="row no-gutters">
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-teacher"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Certified Teachers</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-reading"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Special Education</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-books"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Book &amp; Library</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-diploma"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Certification</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('includes.about')

  <section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
      <div class="row">
        <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
          <div class="text px-4 ftco-animate">
            <h2 class="mb-4">{{$about->title}}</h2>
            <p>{{$about->description}}</p>
          </div><hr>
          @if($news->count()>0)
          <div class="col-md-9 offset-md-1">
            <h5><b>News and Updates</b></h5><hr>
           
              <p><marquee style="color: red;" behavior="scroll" direction="up" scrollamount="2">
              @foreach($news as $news)
               > {{$news->news}}
               <br>
              @endforeach  
            </marquee></p>
          </div>
          @endif

        </div>
        <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          <h2 class="mb-4">What We Offer</h2>
          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
          <div class="row mt-5">
            @foreach($services as $service)
            <div class="col-lg-6">
              <div class="services-2 d-flex">
                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                <div class="text">
                  <h3>{{$service->title}}</h3>
                  <p>{{$service->description}}.</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
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
                  <p class="ftco-animate">{{$teacher->qualification}}</p>
                </ul>
              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Our</span> Classes</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row">

        @foreach($courses as $class)

        <div class="col-md-6 course d-lg-flex ftco-animate">
          <div class="img" style="background-image: url({{$class->img}});"></div>
          <div class="text bg-light p-4">
            <h3><a href="#">{{$class->title}}</a></h3>
            <p>{{$class->description}}</p>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </section>

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
          <h2 class="mb-4"><span>{{$about->experience}} Years of</span> Experience</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
        <div class="col-lg-10">
          <div class="row d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="{{$teacher->count()}}">0</strong>
                  <span>Certified Teachers</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="{{$about->stdcount}}">0</strong>
                  <span>Strength of Students</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="{{$about->success}}">0</strong>
                  <span>Success Ratio</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>What Parents</span> Says About Us</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">

            @foreach($parents as $parent)

            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url({{$parent->img}})">
                </div>
                <div class="text ml-2 bg-light">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>{{$parent->review}}</p>
                  <p class="name">{{$parent->name}}</p>
                  <span class="position">{{$parent->relation}}</span>
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>

  @if($posts->count() > 0)
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Recent</span> Blog</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row">
        @foreach($posts as $post)
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <?php
                $name = $post->category->name;
                $name = Str::lower($name);
             ?>
            <a href="{{route('single.post', ['name' => $name,'slug' => $post->slug])}}" class="block-20 d-flex align-items-end" style="background-image: url('{{$post->image}}');">
              <div class="meta-date text-center p-2">
                <span class="day">{{$post->created_at->toFormattedDateString()}}</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading">{{$post->title}}</h3>
              <div class="d-flex align-items-center mt-4">
                <p class="ml-auto mb-0">
                  Posted by: <a class="mr-2 text-left" style="color: blue">Admin</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

@endif

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

@endsection
