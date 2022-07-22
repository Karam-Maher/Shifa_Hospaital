@extends('user.layouts.master')

@section('content')

  <!-- Back to top button -->
  <div class="back-to-top"></div>


<div class="page-hero bg-image overlay-dark" style="background-image: url(front-assets/img/bg_image_1.jpg);">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">Let's make your life happier</span>
      <h1 class="display-4">Healthy Living</h1>
      <a href="#" class="btn btn-primary">Let's Consult</a>
    </div>
  </div>
</div>


<div class="bg-light">
  <div class="page-section py-3 mt-md-n5 custom-index">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Chat</span> with a doctors</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span></span>AlShifa- Protection</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>AlShifa</span>- Pharmacy</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->


</div> <!-- .bg-light -->

<div class="page-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="row">
    @foreach ($categries as $categroy )
    <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
            <div class="card-doctor">
              <div class="header">
                <img height="350px" src="{{asset('uploads/categories/' . $categroy->image)}}" alt="">
                <div class="meta">
                  <a href="#"><span class="mai-call"></span></a>
                  <a href="#"><span class="mai-logo-whatsapp"></span></a>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0">{{$categroy->name}}</p>
                <span class="text-sm text-grey"></span>
              </div>
            </div>
          </div>
    @endforeach





        </div>

      </div>
    </div>
  </div> <!-- .container -->
</div> <!-- .page-section -->


@endsection
