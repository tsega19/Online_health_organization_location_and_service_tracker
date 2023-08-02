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
  <div class="back-to-top" style="background-color: rgb(43, 193, 248)"></div>

  <header>
    <div class="topbar" style="background-color: rgb(43, 193, 248)">
    
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
    
    <form >
          <div class="input-group input-navbar", class="col-md-4 col-sm-6 ...">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="search by name.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

  <div class="col-6 col-sm-3 py-1 wow fadeInRight" data-wow-delay="150ms">
            <select name="Category" id="Category" class="custom-select">
              <option >Select Organization type</option>
              <option value="general hospital">General Hospital</option>
              <option value="Speciality Hospital">Speciality Hospital</option>
              <option value="Tertiory Hospital">Tertiory Hospital</option>
              <option value="Community Hospital">Community Hospital</option>
              <option value="Health Center">Health Center</option>
              <option value="First Clinic">First Clinic</option>
              <option value="Medium Clinic">Medium Clinic</option>
              <option value="Higher Clinic">Higher Clinic</option>
              <option value="health Kela">health Kela</option>
              <option value="Blood Bank">Blood Bank</option>
              <option value="Pharmacy">Pharmacy</option>
          </select>
          </div>
          <div class="col-6 col-sm-3 py-1 wow fadeInRight" data-wow-delay="150ms">
            <select name="Services" id="Services" class="custom-select">
              <option value="general hospital">Select Services</option>
              <option value="cardiology">Sergary </option>
              <option value="dental">radiology</option>
              <option value="neurology">Dental</option>
              <option value="orthopaedics">VIP servies</option>
              
         
          </div>
          
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
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
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">The Ministry of Health (MoH) (Amharic: ጤና ሚኒስቴር) is a federal government ministry ofEthiopia, responsible for public healthconcerns. Its head office is on Sudan Street inAddis Ababa.As of 2020 Amir Aman is the director.Lia Tadesse has been the head of the ministry since 2019. The organization is a cabinet level organization which has authority over the Public Health Institute.</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
------------------------------------------------------------------
  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp"> Health Organizations</h1>

      {{-- @if (count($orgs) >1)
    @foreach ($orgs as $org )
        <div class='well'>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                   <img style="width 50%" src="/storage/cover_images/{{$orgs->image}}" > 
                </div>  
                <div class="col-md col-sm-8">
            <h3>
                <a href="/admin/{{$org->id}}">{{$org->name}}</h3>
                  <a href="/admin/{{$org->id}}">{{$org->email}}
                    <a href="/admin/{{$org->id}}">{{$org->phone}}
                      <a href="/admin/{{$org->id}}">{{$org->orgtype}}
                        <a href="/admin/{{$org->id}}">{{$org->country}}
                          <a href="/admin/{{$org->id}}">{{$org->city}}
                            <a href="/admin/{{$org->id}}">{{$org->lat}}
                              <a href="/admin/{{$org->id}}">{{$org->lng}}
                                <a href="/admin/{{$org->id}}">{{$org->facebook}}
                                  <a href="/admin/{{$org->id}}">{{$org->telegram}}
                                    <a href="/admin/{{$org->id}}">{{$org->twitter}}
                                      <a href="/admin/{{$org->id}}">{{$org->service}}
                                        <a href="/admin/{{$org->id}}">{{$org->section}}
   {{-- <div class="col-md-4 col-sm-4">
                     <img style="width 50%" src="/storage/cover_images/{{$org->image}}" > 
                  </div>  
               <small>written on {{$org->created_at}}</small>
                </div>
            </div>
        </div>
    @endforeach
    {{$posts->links()}}
@else 
    <p>No posts found </p>
@endif

      
                
               
                  {{-- <div class="col-md col-sm-8">
              <h3>
                  {{-- <a href="/posts/{{$org->id}}">{{$post->title}}</h3>
              
                  <small>written on {{$post->created_at}}</small>
                  </div> --}}
           
      {{-- <img style="width: 50%" src="/storage/cover_images/{{$org->image}}" > 
   --}}
{{-- <div>
<a href="/pages" class="btn btn-default"> Go Back </a>
</div> --}}



{{-- {!! Form::open(['action'=>['AdminController@destroy', $org->id],'class'=>'pull-right'])!!} 
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
       --}}
       
      </div>
    </div>
  </div>
--------------------------------------------------------------------------------------------
  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">polio disease</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_1.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">new global estimates find dangerous stangnation of global vaccination ratedue to conflict,inequality,and complancency</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span>Roitors</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">corona virus</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_2.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Regional office of aftica: first case of covid- 19 comfirmed in ethiopia</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span>bbc world</span>
                </div>
                <span class="mai-time"></span> 4 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Tedros Adhanom </a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_3.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">health policy watch: Germany champions Tedtos for re-election as WHO director </a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_2.jpg" alt="">
                  </div>
                  <span>newyork times</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="blog.html" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <!--
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
      -->
  </div> <!-- .page-section -->
  <div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
  </div>

  <!-- <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
     
          <h1 class="font-weight-normal mb-3">Get easy access of all features using this website www.myhealth.com</h1>
      
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
          -->
        <!-- </div> -->
     <!--  </div> -->
    <!-- </div> -->
  <!-- </div> --> <!-- -->  <!-- .banner-home -->

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