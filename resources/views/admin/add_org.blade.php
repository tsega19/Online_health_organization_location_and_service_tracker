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
                      <a class="nav-link" href="{{'editorg'}}">Edit Profile</a>
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
      
      <div class="container" style="padding-top: 50px;">
        {{-- <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="logo.jpg" alt="" width="72" height="72">
          <h2>Registration Form Template</h2>
        </div>
       </div> --}}
       <h1 class="mb-6">Add Organization Information</h1>
       @if (session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">close</button>
            {{session()->get('message')}}
          </div>
       @endif
      <div class="container">
        <div class="row">
          <div class="col-md-12">

           {{-- {!! Form::open(['url' => 'foo/bar']) !!}   --}}
          {!! Form::open(['action' => 'AddController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
           
          @csrf
            <div class="form-group">
              {{Form::label('name', 'Organization Name')}}
              {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Organization Name'])}}
         
          </div>
           
          <div class="form-group">
            {{Form::label('email', 'Organization Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Organization email'])}}
       
        </div>
        
        <div class="form-group">
          {{Form::label('phone', 'Organization phone')}}
          {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Organization Name'])}}

       {{-- </div>
        <div class="form-group">
          <input type="text" class="form-control" id="address" required>
          
         <div class="col-md-14 mb-3"> --}}
            <div class="form-group">
          {{Form::label('orgtype', 'Organization Type')}}
          {{Form::text('orgtype', '', ['class' => 'form-control', 'placeholder' => 'Organization Type'])}}
        </div>
      </div>
      <h4 class="mb-3">Organization Address</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
              <div class="form-group">
                {{Form::label('country', 'Country')}}
                {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Country'])}}
              </div>
            </div>
            
            <div class="col-md-6 mb-3">
              <div class="form-group">
                {{Form::label('city', 'City')}}
                {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City'])}}
              </div>
              </div>
                
              </div>
        <h4 class="mb-3">Organization Location</h4>
        
        <div class="row">
          {{-- <label for="description"> Location  </label>
          <input type="text" name="location" class="form-control" id="location" placeholder="Select Location" value="{{ old('location') }}">
         
         
          <input type="hidden" name="lat" class="form-control" id="lat" value="{{ old('lat') }}">
          <input type="hidden" name="lng" class="form-control" id="lng" value={{ old('lng') }}>
          {!! $errors->first('location', '<small class="text-danger">:message </small>') !!} --}}
            <div class="col-md-6 mb-3">
              <div class="form-group">
                {{Form::label('lat', 'Latitude')}}
                {{Form::text('lat', '', ['class' => 'form-control', 'placeholder' => 'lat'])}}
              </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  {{Form::label('lng', 'Longtude')}}
                  {{Form::text('lng', '', ['class' => 'form-control', 'placeholder' => 'lng'])}}
                </div>
              </div>
            </div>
             <h4>Organization Social Media Account</h4>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                {{Form::label('facebook', 'Facebook')}}
                {{Form::text('facebook', '', ['class' => 'form-control', 'placeholder' => 'Facebook'])}}
              </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  {{Form::label('telegram', 'Telegram')}}
                  {{Form::text('telegram', '', ['class' => 'form-control', 'placeholder' => 'Telegram'])}}
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  {{Form::label('twitter', 'Twitter')}}
                  {{Form::text('twitter', '', ['class' => 'form-control', 'placeholder' => 'Twitter'])}}
                </div>
              </div>
            </div>
              <div class="col-md-16 mb-3">
                <div class="form-group">
                  {{Form::label('service', 'Services')}}
                  {{Form::textarea('service', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'List Services'])}} 
              </div>
              <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
              <script>
              CKEDITOR.replace( 'article-ckeditor' );
              </script>
              </div>
              <div class="col-md-16 mb-3">
                <div class="form-group">
                  {{Form::label('section', 'Description')}}
                  {{Form::textarea('section', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Write Addition Information About Your Organization'])}} 
              </div>
              <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
              <script>
              CKEDITOR.replace( 'summary-ckeditor' );
              </script>
              </div>
              <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
              {!! Form::close() !!}
              </div>
             
           
             
      
          </div>
        </div>

        {{-- javascript code --}}
   <script src="https://maps.google.com/maps/api/js?key=YOUR_KEY&libraries=places&callback=initAutocomplete" type="text/javascript"></script>

   <script>
       $(document).ready(function() {
            $("#lat_area").addClass("d-none");
            $("#long_area").addClass("d-none");
       });
   </script>

   <script>
       google.maps.event.addDomListener(window, 'load', initialize);

       function initialize() {
           var options = {
             componentRestrictions: {country: "IN"}
           };

           var input = document.getElementById('location');
           var autocomplete = new google.maps.places.Autocomplete(input, options);
           autocomplete.addListener('place_changed', function() {
               var place = autocomplete.getPlace();
               $('#latitude').val(place.geometry['location'].lat());
               $('#longitude').val(place.geometry['location'].lng());

            // --------- show lat and long ---------------
               $("#lat_area").removeClass("d-none");
               $("#long_area").removeClass("d-none");
           });
       }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
Drag and Drop File Upload in Laravel 6 Using Dropzone js

Recommended:  How to Use AJAX in Laravel 6 with ToDo Application

        <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">&copy; 2020-2021 Company Name</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
          </ul>
        </footer>
        </div>  


       
   @endsection