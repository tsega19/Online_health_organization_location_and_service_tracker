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
        <a class="navbar-brand" href="{{'/'}}"><span class="text-primary">ethio</span>-Health</a>

       

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
                          
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
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
    </nav>


   ----------------------------------------------------------------
   <div class="page-banner overlay-dark bg-image">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.525189854675!2d38.72689485001852!3d9.015761593498313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b84f65e61bdcd%3A0x5e123c563edd1e53!2z4Yqg4Yia4YqVIOGKoOGMoOGJg-GIi-GLrSDhiIbhiLXhjZLhibPhiI0!5e0!3m2!1sam!2set!4v1656828438513!5m2!1sam!2set"
        width="1582" height="300" padding-left="20px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="banner-section">
        <div class="containerr text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <!-- <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2"> -->
                <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
                <!-- <li class="breadcrumb-item active" aria-current="page">Articles</li> -->
                <!-- </ol> -->
            </nav>
            <!-- <h1 class="font-weight-normal">Articles</h1> -->
        </div>
        <!-- .containerr -->
    </div>
    <!-- .banner-section -->
</div>
<!-- .page-banner -->
{{-- ----------------------------------------------------------------------------------------------------------------------------

<div class='well'> 
  <div class="row">
     
 <h3></h3> --}}
     
     {{-- {{$org->lat}}
     {{$org->lng}}
     --}}
     {{-- {{$org->service}} --}}
     
{{-- <div class="col-md-4 col-sm-4">
      
    <small>written on {{$org->created_at}}</small>
     </div>
 </div> --}}
{{-- </div> --}}



<div class="lg">

<div class="rg:pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-left" data-aos-delay="1400" padding-left="400px">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <!-- Icon -->
                                <i class="fas fa-bolt"></i>
                            </div>
                            <!-- Text Box -->
                            <h5 class="text-x1 font-bold">{{$org->name}}</h5>
                            <h6 class="text-xl font-semibold">{{$org->orgtype}}</h6>
                            
                            <p class="mt-2 mb-4 text-gray-600">
                              {{$org->section}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="lg">

<div class="rg:pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-left" data-aos-delay="1400" padding-left="400px">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <!-- Icon -->
                                <i class="fas fa-bolt"></i>
                            </div>
                            <!-- Text Box -->
                            <h5 class="text-x1 font-bold">Address</h5>
                           <h6 class="text-xl font-semibold">{{$org->city}}</h6> 
                           <h6 class="text-xl font-semibold">{{$org->country}}</h6>
                            <h6 class="text-xl font-semibold">{{$org->email}}</h6>
                            <h6 class="text-xl font-semibold">{{$org->phone}}</h6>
                            <h6 class="text-xl font-semibold">{{$org->facebook}}</h6>
                            <h6 class="text-xl font-semibold">{{$org->telegram}}</h6>
                            <h6 class="text-xl font-semibold">{{$org->twitter}}</h6>
                            
                           
                             
                            <p class="mt-2 mb-4 text-gray-600">
                               
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="lg">

<div class="rg:pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-left" data-aos-delay="1400" padding-left="400px">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <!-- Icon -->
                                <i class="fas fa-bolt"></i>
                            </div>
                            <!-- Text Box -->
                            <h5 class="text-x1 font-bold">Services</h5>
                            <h6 class="text-xl font-semibold">{{$org->service}}</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                {{-- Wollega University aspires to be a center of excellence in producing competent citizens and high-level professionals and researchers that could play a critical leadership role, generate new knowledge and adapt relevant knowledge to national development. --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="lg1">

<div class="rg:pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-left" data-aos-delay="1400" padding-left="400px">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <!-- Icon -->
                                <i class="fas fa-bolt"></i>
                            </div>
                            <!-- Text Box -->
                            <div class="col-md-4 col-sm-4">
                              <img style="width 50%" src="/storage/cover_images/{{$org->image}}" > 
                           </div>  
                          <div class="col-md col-sm-8">
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{'/'}}" class="btn btn-default" style="position center"> Go Back </a>

<script src="../assets/js/jquery-3.5.1.min.js "></script>

<script src="../assets/js/bootstrap.bundle.min.js "></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js "></script>

<script src="../assets/vendor/wow/wow.min.js "></script>

<script src="../assets/js/google-maps.js "></script>

<script src="../assets/js/theme.js "></script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap "></script>
-->
</body>
</html>

    
@endsection