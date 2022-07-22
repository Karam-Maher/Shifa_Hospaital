
@extends('user.layouts.master')

@section('content')


  <!-- Back to top button -->
  <div class="back-to-top"></div>



  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('news')}}">New /</a></li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
       @foreach ($posts as $post )
       <article class="blog-details">
        <div class="post-thumb">
          <img height="700px" src="{{asset('uploads/news/' . $post->image)}}" alt="">
        </div>
        <div class="post-meta">
         
        </div>
        <h2 class="post-title h1">{{$post->name}}</h2>
        <div class="post-content">
            <p>{{$post->content}}</p>
        </div>
        
      </article> <!-- .blog-details -->
       @endforeach

        </div>
        <div class="col-lg-4">
          <div class="sidebar">


            <div class="sidebar-block">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="categories">
                @foreach($categries as $category)
                <li><a href="#">{{$category->name}} </a></li>
                @endforeach
              </ul>
            </div>



          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  @endsection
