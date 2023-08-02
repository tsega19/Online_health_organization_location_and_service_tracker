


@extends('layouts.app')
@section('content')
</header>
<div id="app">
 <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
     <div class="container">
       <a class="navbar-brand" href="{{ url('/home') }}"><span class="text-primary">ethio</span>-Health</a>
       
         {{-- {{ config('app.name', 'heinfo') }} --}}
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{'home'}}">Home</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{'add_org'}}">Add Organization</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{'post'}}">Post News</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{'edit'}}">Edit News</a>
                  </li>
           
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
   </nav>
<!-- .page-banner -->


<div class="header">
    {{-- <h2>Post News</h2>
  </div>
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">News</h1>
        </div>
        <!-- .container -->
    </div>
    <!-- .banner-section -->
</div> --}}
<!-- .page-banner -->
@if (session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">close</button>
            {{session()->get('message')}}
          </div>
       @endif

       <h1>Post News</h1>
       {!! Form::open(['action'=>'PostController@store','method'=>'POST', 'enctype' => 'multipart/form-data'])!!} 
       <div class="col-md-6 mb-3">
       <div class="form-group">
          <h2> {{Form::label('title', 'Title')}}</h2>
           {{Form::text('title','', ['class'=>'form-control','placeholder'=>'Title'])}}
       </div>
    </div>
    <div class="col-md-6 mb-3">
       <div class="form-group">
          <h2> {{Form::label('body', 'Body')}}</h2>
           {{Form::textarea('body','', ['id'=>'article-ckeditor', 'class'=>'form-control','placeholder'=>'Body'])}}
       </div>
       </div>
       <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
              <script>
              CKEDITOR.replace( 'article-ckeditor' );
              </script>
       <div class="form-group">
           {{Form::file('cover_image')}}
       </div>
       {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
         {!! Form::close() !!}
   
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
    
@endsection