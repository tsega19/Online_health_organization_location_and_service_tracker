@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>OLST</title>

 
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
    
      </div> <!-- .coqqntainer --> 
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{'news'}}"><span class="text-primary">ethio</span>-Health</a>

       

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="{{'/'}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'news'}}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'about'}}">About</a>
        </li>
            <li class="nav-item">
              <li class="nav-item">
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a  class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
              </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav><br>
  </header>
  <form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
  </form>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
            @if($posts->isNotEmpty())
    @foreach ($posts as $post)
        <div class="post-list">
            <p>{{ $post->title }}</p>
            <img src="{{ $post->image }}">
        </div>
    @endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif
            <h1 class="font-weight-normal">News</h1>
        </div>
        <!-- .container -->
    </div>
    <!-- .banner-section -->
</div>
<!-- .page-banner -->

<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-6 py-3">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-category">
                                    <a href="#">Covid19</a>
                                </div>
                                <a href="blog-details" class="post-thumb">
                                    <img src="../assets/img/blog/blog_1.jpg" alt="">
                                </a>
                            </div>
                            <div class="body">
                               
                            </div>
                        </div>
                    </div>
                    @if(count($posts) > 0)
        @foreach($posts as $post)
         <h5 class="post-title"><a href="/post/{{$post->id}}">{{$post->title}}</a></h5>
                                <div class="site-info">
                                    <div class="avatar mr-2">
                                        <div class="avatar-img">
                                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"/>
                                        </div>
                                        <span> <small>Written on {{$post->created_at}} </small></span>
                                    </div>
                                    <span class="mai-time"></span> 1 week ago
                                </div>
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col sm-4">
                       
                    </div>
                    <div class="col-md-8 col sm-8">
                        {{-- <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3> --}}
                       
                    </div>
                </div>
                
            </div>
        @endforeach
        {{-- {{$posts->links()}} --}}
    @else
        <p>No posts found</p>
    @endif 

               <div class="col-sm-6 py-3">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-category">
                                    <a href="#">Dental</a>
                                </div>
                                <a href="blog-details" class="post-thumb">
                                    <img src="../assets/img/blog/blog_3.jpg" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
                                <div class="site-info">
                                    <div class="avatar mr-2">
                                        <div class="avatar-img">
                                            <img src="../assets/img/person/person_4.jpg" alt="">
                                        </div>
                                        <span>Wizdom Jack</span>
                                    </div>
                                    <span class="mai-time"></span> 2 weeks ago
                                </div>
                            </div>
                        </div>
                    </div>

                           
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
                    </div> -
                </div>
               
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .page-section -->

    </div>
    <!-- .container -->
</div>
<!-- .banner-home -->


  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as for advertise</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">wollega university</a></li>
            
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">Wollega, Nekemte</p>
          <a href="#" class="footer-link">+251-938-9275-35</a>
          <a href="#" class="footer-link">eemifike@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="http://www.facebook.com" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="http://www.twitter.com" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="http://www.google.com" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="http://www.instagram.com" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="http://www.linkedin.com" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://facebook.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
    
@endsection