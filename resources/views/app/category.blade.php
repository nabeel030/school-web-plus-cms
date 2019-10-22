@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_2.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span>
              <span>Category <i class="ion-ios-arrow-forward"></i></span>
              <span>{{$name}} <i class="ion-ios-arrow-forward"></i> POSTS</span>
            </p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          @if($posts->count() == 0)
          <h4 class="text-center">Sorry! No Posts For This Category Yet <a href="{{route('blog')}}">Back to Blog</a></h4>
          @else
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
                    <a class="mr-2 text-left" style="color: orange">Posted by: </a><a class="mr-2 text-left" style="color: blue">Admin</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
			</div>
		</section>

@endsection
