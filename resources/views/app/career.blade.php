@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Career</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Career <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container" class="form_container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="form-group" action="{{route('career.cv')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label for="cv">Upload CV</label><br>
                    <input type="file" name="cv"><br>
                    <p>@include('includes.validate')</p>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-outline-success">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@stop