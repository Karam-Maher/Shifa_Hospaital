@extends('user.layouts.master')
@section('content')

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Welcome to Your Shifa Hospaital</h1>
          <div class="text-lg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur.</p>
            <p>Expedita iusto sunt beatae esse id nihil voluptates magni, excepturi distinctio impedit illo, incidunt iure facilis atque, inventore reprehenderit quidem aliquid recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quod ad sequi atque accusamus deleniti placeat dignissimos illum nulla voluptatibus vel optio, molestiae dolore velit iste maxime, nobis odio molestias!</p>
          </div>
        </div>
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
          <div class="row justify-content-center">
              @foreach ($doctors as $doctor)
              <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img height="350px" src="{{asset('uploads/doctors/' . $doctor->image)}}" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">{{$doctor->name}}</p>
                  <span class="text-sm text-grey">{{$doctor->category->name}}</span>
                </div>
              </div>
            </div>
              @endforeach



          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
