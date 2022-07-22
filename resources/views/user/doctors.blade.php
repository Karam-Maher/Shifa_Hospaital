@extends('user.layouts.master')
@section('content')

<div class="page-section">
    <div class="container">

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctors as $doctor)
            <div class="item">
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

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" action="{{route('subappointment')}}" method="POST">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" placeholder="Full name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" placeholder="Email address..">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" required autocomplete="date">
                    @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">
                        <option>select doctor</option>
                        @foreach ($doctors as $doctor)
                        <option value="{{$doctor->name}}">{{$doctor->name}} --speciality-- {{$doctor->category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" required autocomplete="phone" placeholder="Number..">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" required autocomplete="message" rows="6" placeholder="Enter message.."></textarea>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div> <!-- .container -->
</div> <!-- .page-section -->

@endsection
