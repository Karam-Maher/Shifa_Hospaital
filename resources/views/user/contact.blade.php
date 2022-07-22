@extends('user.layouts.master')
@section('content')
<!-- Back to top button -->
<div class="back-to-top"></div>



<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Get in Touch</h1>

        <form class="contact-form mt-5" action="{{route('contactsub')}}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6 py-2 wow fadeInLeft">
                    <label for="fullName">Name</label>
                    <input type="text" name="name" id="fullName" class="form-control @error('name') is-invalid @enderror" required autocomplete="name"  placeholder="Full name.." >
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-sm-6 py-2 wow fadeInRight">
                    <label for="emailAddress">Email</label>
                    <input type="text" name="email" id="emailAddress" class="form-control @error('name') is-invalid @enderror" required autocomplete="name"  placeholder="Email address..">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control @error('name') is-invalid @enderror" required autocomplete="name"  placeholder="Enter subject..">
                    @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" rows="8" placeholder="Enter Message.."></textarea>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
        </form>
    </div>
</div>

@endsection