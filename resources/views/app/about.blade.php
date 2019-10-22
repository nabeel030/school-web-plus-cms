@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>	

    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container about_container">
          <div class="row">
            <div class="col-md-6">
            <p><img class ="about" src="images/course-1.jpg" alt="Pineapple">
          <b style="color: green; font-size: 25px">Mission</b> <br>
          To serve community by providing quality education and creating distinguish characteristics in students for the wellbeing of society.</p>
            </div>
            <div class="col-md-6">
          <p><img class ="about" src="images/course-1.jpg" alt="Pineapple">
          <b style="color: green; font-size: 25px">Vision</b> <br>
           To become market leader in educating underprivileged families.</p>
          </div>
        </div>
        </div>

        <hr style="border: 1px dotted green">

        <div class="container about_container">
          <div class="row">
          <p><img id="history" class ="about" src="images/course-1.jpg" alt="Pineapple">
          <b style="color: green; font-size: 25px">Backgound History</b> <br>
          GM Academy was formally known as Mohammad Ali Jinnah University Social Education Project. It was established in 2004 by great academician Prof. Dr. Abdul Wahab who was former Director of IBA and Vice Chancellor of University of Karachi. When he became the President of Mohammad Ali Jinnah University he felt the instant need of establishing a school in University premises after morning classes for poor families living in surrounding of university. The students were invited from the nearby underprivileged area who cannot afford education, they had been provided free of cost education for more than 12 years. 

From May 2017 it is no more associated with Mohammad Ali Jinnah University and working as an independent entity by the name of GM Academy. We are charging a very nominal fee considering the background of these students. To show the care for the humanity, GM Academy also offers free education to the orphan children.

GM Academy was started with 13 Students and 1 teacher in 2004, and now in 2019 it has 400 students and 22 well qualified and experienced teachers from Kindergarten Level to Matriculation. GM Academy does not only facilitate its school students but also facilitate passing out students in getting admission in different colleges

          </div>
        </div>

        <hr style="border: 1px dotted green">

        <div class="container about_container">
          <div class="row">
          <p><img class ="about" src="images/course-1.jpg" alt="Pineapple">
          <b style="color: green; font-size: 25px">Chairperson's Profile</b> <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.</p>
          </div>
        </div>

        <hr style="border: 1px dotted green">

    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
            <div class="text px-4 ftco-animate">
              <h2 class="mb-4">{{$about->title}}</h2>
              <p>{{$about->description}}</p>
            </div>
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

@endsection
