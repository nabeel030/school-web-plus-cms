<section class="home-slider owl-carousel">

  @foreach($slider as $slider)

  <div class="slider-item" style="background-image:url({{$slider->img}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-8 text-center ftco-animate">
        <h1 class="mb-4"><span>{{$slider->title}}</span></h1>
      </div>
    </div>
    </div>
  </div>

  @endforeach

</section>
