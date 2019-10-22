@extends('layouts.home')

@section('content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog Single</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="ion-ios-arrow-forward"></i></a></span>
               <span>Category <i class="ion-ios-arrow-forward"></i></span>
               <span>{{$name}} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">#{{$post->id}}&nbsp;{{$post->title}}</h2>
            <p>
              <img src="{{$post->image}}" alt="" class="img-fluid">
              <div class="text-right">
                <span style="color: blue">Posted at:&nbsp;&nbsp;</span><span style="color: orange">{{$post->created_at->diffForHumans()}}</span>
              </div>
            </p>
            <p>{!!$post->content!!}</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                @foreach($post->tags as $tags)
                <?php
                    $name = $tags->tag;
                    $name = Str::lower($name);
                 ?>
                  <a href="{{route('tag.page', ['id' => $tags->id, 'name' => $name])}}" class="w-tags-item" style="color: #3498DB">{{$tags->tag}}</a>
                @endforeach
              </div>
            </div>

            <div class="fb-comments" data-href="{{Request::url()}}" data-width="100%" data-numposts="10"></div>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
            	<h3>Category</h3>
              <ul class="categories">
                @foreach($categories as $category)
                <?php
                    $name = $category->name;
                    $name = Str::lower($name);
                 ?>
                <li><a href="{{route('category.page', ['id' => $category->id, 'name' => $name])}}">{{$category->name}} <span style="color: orange">{{$category->posts()->count()}}</span></a></li>
                @endforeach
              </ul>
            </div>

            @if($relatedposts->count() > 1)
            <div class="sidebar-box ftco-animate">
              <h3>Related Posts</h3>
              @foreach($relatedposts as $posts)
              <div class="block-21 mb-4 d-flex">
                <a href="{{route('single.post', ['name' => Str::lower($posts->category->name),'slug' => $posts->slug])}}" class="blog-img mr-4" style="background-image: url({{$posts->image}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{route('single.post', ['name' => $name,'slug' => $posts->slug])}}">{{$posts->title}}</a></h3>
                  <div class="meta">
                    <div><span class="icon-calendar"></span> {{$posts->created_at->toFormattedDateString()}}</div>
                    <div><span class="icon-person"></span> admin</div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            @endif



            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <ul class="tagcloud m-0 p-0">
                @foreach($blogTags as $tags)
                <?php
                    $name = $tags->tag;
                    $name = Str::lower($name);
                 ?>
                  <a href="{{route('tag.page', ['id' => $tags->id, 'name' => $name])}}" class="w-tags-item" style="color: #3498DB">{{$tags->tag}} &nbsp;|&nbsp;<span style="color: orange">{{$tags->posts()->count()}}</span></a>
                @endforeach
              </ul>
            </div>

          </div><!-- END COL -->
        </div>
			</div>
		</section>


@stop
