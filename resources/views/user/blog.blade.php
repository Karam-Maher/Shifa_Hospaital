@extends('user.layouts.master')

@section('content')


<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

            @foreach ($posts as $post )
            <div class="col-sm-6 py-3">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-category">
                                    <a href="#">{{$post->name}}</a>
                                </div>
                                <a href="{{route('news-details', $post->slug)}}" class="post-thumb">
                                    <img src="{{asset('uploads/news/' . $post->image)}}" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a href="blog-details.html">{{$post->content}}</a></h5>

                            </div>
                        </div>
                    </div>

            @endforeach

                    <div class="col-12 my-5">
                        <nav aria-label="Page Navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> <!-- .row -->
            </div>
            <div class="col-lg-4">
                <div class="sidebar">

                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="categories">
                            @foreach ($categries as $categroy )
                            <li><a href="#">{{$categroy->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Recent Blog</h3>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="front-assets/img/blog/blog_1.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="front-assets/img/blog/blog_2.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="front-assets/img/blog/blog_3.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .page-section -->



@endsection
