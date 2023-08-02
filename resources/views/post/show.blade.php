

@extends('layouts.app')

@section('content')
<div class="back-to-top"></div>

<header>

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
  
  
    <!-- Back to top button -->
    <div class="back-to-top"></div>
  
    <header>
     
</header>

 <!-- Back to top button -->
 <div class="back-to-top"></div>

 <header>
     <div class="topbar">
         <!-- <div class="container">
             <div class="row">
                 <div class="col-sm-8 text-sm">
                     <div class="site-info">
                         <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                         <span class="divider">|</span>
                         <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                     </div>
                 </div>
                 <div class="col-sm-4 text-right text-sm">
                     <div class="social-mini-button">
                         <a href="#"><span class="mai-logo-facebook-f"></span></a>
                         <a href="#"><span class="mai-logo-twitter"></span></a>
                         <a href="#"><span class="mai-logo-dribbble"></span></a>
                         <a href="#"><span class="mai-logo-instagram"></span></a>
                     </div>
                 </div>
             </div>
             <!.row -->
        
     <!-- .topbar -->

    
 </header>



<section id="article">
     <div class="container">
         <div class="page-container">
             <article class="card">
                 <h1 class='l-heading'>{{$post->title}}</h1>
                 <img src="/storage/cover_images/{{$post->cover_image}}" alt="article">
                
                 <div class="meta">
                     <small>
           {{-- <i class="fas fa-user"></i>Written by João José. September 13, 2019
         </small> --}}
                     <div class="category category-ent">Entertainment</div>
                 </div>
                 {{$post->body}}
             </article>

         </div>
     </div>
 </section>
 </div> 
         <!-- .container -->
     </div>
<!-- .page-banner -->



{{-- <h1></h1><br>
<img style="width: 50%" src="/storage/cover_images/{{$post->cover_image}}" > 
<div> --}}


    {{-- {{$post->body}} --}}
    
{{-- </div>
<img style="width: 50%" src="/storage/cover_images/{{$post->cover_image}}" > 
<hr>
<small>written on {{$post->created_at}}</small>
<hr> --}}

{{-- <a href="/post/{{$post->id}}/edit" class="btn btn-default">edit</a> --}}

{{-- {!! Form::open(['action'=>['PostController@destroy', $post->id],'class'=>'pull-right'])!!} 
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
<div> --}}
<a href="{{'/'}}" class="btn btn-default"> Go Back </a>
</div>
{{-- 
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">edit</a>

{!! Form::open(['action'=>['PostController@destroy', $post->id],'class'=>'pull-right'])!!} 
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!!Form::close()!!} --}}
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
                    <li><a href="#">Join as Doctors</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Our partner</h5>
                <ul class="footer-menu">
                    <li><a href="#">One-Fitness</a></li>
                    <li><a href="#">One-Drugs</a></li>
                    <li><a href="#">One-Live</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Contact</h5>
                <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                <a href="#" class="footer-link">701-573-7582</a>
                <a href="#" class="footer-link">healthcare@temporary.net</a>

                <h5 class="mt-3">Social Media</h5>
                <div class="footer-sosmed mt-3">
                    <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                </div>
            </div>
        </div>

        <hr>

        <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
    <!-- .container -->
</footer>
<!-- .page-footer -->

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
@endsection
        