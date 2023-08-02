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
  <body>

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
        </div> <!-- .row -->
        </div>
        <!-- .container -->
        </div>
        <!-- .topbar -->

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
    </header>

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

    <!-- <div class="page-section">
        <div class="containerr">
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
                                    <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img">
                                                <img src="../assets/img/person/person_1.jpg" alt="">
                                            </div>
                                            <span>Roger Adams</span>
                                        </div>
                                        <span class="mai-time"></span> 1 week ago
                                    </div>
                                </div>
                            </div>
                        </div>

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

                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category">
                                        <a href="#">Covid19</a>
                                    </div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/blog/blog_3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">Shifting goalposts: Research in the time of the coronavirus</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img">
                                                <img src="../assets/img/person/person_3.jpg" alt="">
                                            </div>
                                            <span>Adams Collier</span>
                                        </div>
                                        <span class="mai-time"></span> 4 weeks ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category">
                                        <a href="#">Neurology</a>
                                    </div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/blog/blog_4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">What are the nonmedical factors most closely linked to death risk?</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img">
                                                <img src="../assets/img/person/person_1.jpg" alt="">
                                            </div>
                                            <span>Roger Adams</span>
                                        </div>
                                        <span class="mai-time"></span> 4 weeks ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category">
                                        <a href="#">Cardiology</a>
                                    </div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/blog/blog_5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">Do gut bacteria contribute to ethnic health disparities</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img">
                                                <img src="../assets/img/person/person_1.jpg" alt="">
                                            </div>
                                            <span>Roger Adams</span>
                                        </div>
                                        <span class="mai-time"></span> 4 weeks ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category">
                                        <a href="#">Patient Services</a>
                                    </div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/blog/blog_1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">The Recovery Room: News beyond the pandemic</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img">
                                                <img src="../assets/img/person/person_1.jpg" alt="">
                                            </div>
                                            <span>Roger Adams</span>
                                        </div>
                                        <span class="mai-time"></span> 1 month ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category">
                                        <a href="#">General Health</a>
                                    </div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/blog/blog_2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">Racism in mental healthcare: An invisible barrier</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img">
                                                <img src="../assets/img/person/person_1.jpg" alt="">
                                            </div>
                                            <span>Roger Adams</span>
                                        </div>
                                        <span class="mai-time"></span> 2 months ago
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category">
                                        <a href="#">Covid19</a>
                                    </div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/blog/blog_2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">COVID-19 live updates: Total number of cases passes 11.6 million</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img">
                                                <img src="../assets/img/person/person_2.jpg" alt="">
                                            </div>
                                            <span>Diego Simmons</span>
                                        </div>
                                        <span class="mai-time"></span> 4 weeks ago
                                    </div>
                                </div>
                            </div>
                        </div> -->
    <!-- <div class=" page-banner overlay-dark bg-image " style="background-image: url(../assets/img/banner-pattern.svg); ">
                            <div class="containerr py-5 py-lg-0 ">
                                <div class="row align-items-center ">
                                    <div class="col-lg-4 wow zoomIn ">
                                        <div class="img-banner d-none d-lg-block ">
                                            <img src="../assets/img/mobile_app.png " alt=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 wow fadeInRight ">
                                        <h1 class="font-weight-normal mb-3 ">Get easy access of all features using One Health Application</h1>
                                        <a href="# "><img src="../assets/img/google_play.svg " alt=" "></a>
                                        <a href="# " class="ml-2 "><img src="../assets/img/app_store.svg " alt=" "></a>
                                    </div>
                                </div>
                                 .row -->
    <!-- </div> -->
    <!-- .containerr -->
    <!-- </div>
                    <footer class="page-footer " style="position: relative; ">
                        <div class="containerr ">
                            <div class="row px-md-3 ">
                                <div class="col-sm-6 col-lg-3 py-3 ">
                                    <h5>Company</h5>
                                    <ul class="footer-menu ">
                                        <li><a href="# ">About Us</a></li>
                                        <li><a href="# ">Career</a></li>
                                        <li><a href="# ">Editorial Team</a></li>
                                        <li><a href="# ">Protection</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-lg-3 py-3 ">
                                    <h5>More</h5>
                                    <ul class="footer-menu ">
                                        <li><a href="# ">Terms & Condition</a></li>
                                        <li><a href="# ">Privacy</a></li>
                                        <li><a href="# ">Advertise</a></li>
                                        <li><a href="# ">Join as Doctors</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-lg-3 py-3 ">
                                    <h5>Our partner</h5>
                                    <ul class="footer-menu ">
                                        <li><a href="# ">One-Fitness</a></li>
                                        <li><a href="# ">One-Drugs</a></li>
                                        <li><a href="# ">One-Live</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-lg-3 py-3 ">
                                    <h5>Contact</h5>
                                    <p class="footer-link mt-2 ">351 Willow Street Franklin, MA 02038</p>
                                    <a href="# " class="footer-link ">701-573-7582</a>
                                    <a href="# " class="footer-link ">healthcare@temporary.net</a>

                                    <h5 class="mt-3 ">Social Media</h5>
                                    <div class="footer-sosmed mt-3 ">
                                        <a href="# " target="_blank "><span class="mai-logo-facebook-f "></span></a>
                                        <a href="# " target="_blank "><span class="mai-logo-twitter "></span></a>
                                        <a href="# " target="_blank "><span class="mai-logo-google-plus-g "></span></a>
                                        <a href="# " target="_blank "><span class="mai-logo-instagram "></span></a>
                                        <a href="# " target="_blank "><span class="mai-logo-linkedin "></span></a>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <p id="copyright ">Copyright &copy; 2020 <a href="https://macodeid.com/ " target="_blank ">MACode ID</a>. All right reserved</p>
                        </div>
                    </footer> -->

    <div class="containerrr">
        <div class="rg:pt-6 w-full md:w-4/12 px-4 text-center" data-aos="fade-left" data-aos-delay="1400">
            <!-- <style>
                /*!

=========================================================
* Tailwind Starter Kit by Creative Tim | Free TailwindCSS Kit Framework - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
                /*! tailwindcss v2.0.4 | MIT License | https://tailwindcss.com

*/
                /*! modern-normalize v1.0.0 | MIT License | https://github.com/sindresorhus/modern-normalize */
                
                *,
                *::before,
                *::after {
                    box-sizing: border-box;
                }
                
                 :root {
                    -moz-tab-size: 4;
                    -o-tab-size: 4;
                    tab-size: 4;
                }
                
                html {
                    line-height: 1.15;
                    -webkit-text-size-adjust: 100%;
                }
                
                body {
                    margin: 0;
                }
                
                body {
                    font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
                }
                
                hr {
                    height: 0;
                    color: inherit;
                }
                
                abbr[title] {
                    -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted;
                }
                
                b,
                strong {
                    font-weight: bolder;
                }
                
                code,
                kbd,
                samp,
                pre {
                    font-family: ui-monospace, SFMono-Regular, Consolas, "Liberation Mono", Menlo, monospace;
                    font-size: 1em;
                }
                
                small {
                    font-size: 80%;
                }
                
                sub,
                sup {
                    font-size: 75%;
                    line-height: 0;
                    position: relative;
                    vertical-align: baseline;
                }
                
                sub {
                    bottom: -0.25em;
                }
                
                sup {
                    top: -0.5em;
                }
                
                table {
                    text-indent: 0;
                    border-color: inherit;
                }
                
                button,
                input,
                optgroup,
                select,
                textarea {
                    font-family: inherit;
                    font-size: 100%;
                    line-height: 1.15;
                    margin: 0;
                }
                
                button,
                select {
                    text-transform: none;
                }
                
                button,
                [type="button"],
                [type="reset"],
                [type="submit"] {
                    -webkit-appearance: button;
                }
                
                legend {
                    padding: 0;
                }
                
                progress {
                    vertical-align: baseline;
                }
                
                [type="search"] {
                    -webkit-appearance: textfield;
                    outline-offset: -2px;
                }
                
                summary {
                    display: list-item;
                }
                
                blockquote,
                dl,
                dd,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                hr,
                figure,
                p,
                pre {
                    margin: 0;
                }
                
                button {
                    background-color: transparent;
                    background-image: none;
                }
                
                button:focus {
                    outline: 1px dotted;
                    outline: 5px auto -webkit-focus-ring-color;
                }
                
                fieldset {
                    margin: 0;
                    padding: 0;
                }
                
                ol,
                ul {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                }
                
                html {
                    font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                    line-height: 1.5;
                }
                
                body {
                    font-family: inherit;
                    line-height: inherit;
                }
                
                *,
                 ::before,
                 ::after {
                    box-sizing: border-box;
                    border-width: 0;
                    border-style: solid;
                    border-color: #e4e4e7;
                }
                
                hr {
                    border-top-width: 1px;
                }
                
                img {
                    border-style: solid;
                }
                
                textarea {
                    resize: vertical;
                }
                
                input::-moz-placeholder,
                textarea::-moz-placeholder {
                    opacity: 1;
                    color: #a1a1aa;
                }
                
                input:-ms-input-placeholder,
                textarea:-ms-input-placeholder {
                    opacity: 1;
                    color: #a1a1aa;
                }
                
                input::placeholder,
                textarea::placeholder {
                    opacity: 1;
                    color: #a1a1aa;
                }
                
                button,
                [role="button"] {
                    cursor: pointer;
                }
                
                table {
                    border-collapse: collapse;
                }
                
                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    font-size: inherit;
                    font-weight: inherit;
                }
                
                a {
                    color: inherit;
                    text-decoration: inherit;
                }
                
                button,
                input,
                optgroup,
                select,
                textarea {
                    padding: 0;
                    line-height: inherit;
                    color: inherit;
                }
                
                pre,
                code,
                kbd,
                samp {
                    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                }
                
                img,
                svg,
                video,
                canvas,
                audio,
                iframe,
                embed,
                object {
                    display: block;
                    vertical-align: middle;
                }
                
                img,
                video {
                    max-width: 100%;
                    height: auto;
                }
                
                [type="text"],
                [type="email"],
                [type="url"],
                [type="password"],
                [type="number"],
                [type="date"],
                [type="datetime-local"],
                [type="month"],
                [type="search"],
                [type="tel"],
                [type="time"],
                [type="week"],
                [multiple],
                textarea,
                select {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    background-color: #fff;
                    border-color: #71717a;
                    border-width: 1px;
                    border-radius: 0px;
                    padding-top: 0.5rem;
                    padding-right: 0.75rem;
                    padding-bottom: 0.5rem;
                    padding-left: 0.75rem;
                    font-size: 1rem;
                    line-height: 1.5rem;
                }
                
                [type="text"]:focus,
                [type="email"]:focus,
                [type="url"]:focus,
                [type="password"]:focus,
                [type="number"]:focus,
                [type="date"]:focus,
                [type="datetime-local"]:focus,
                [type="month"]:focus,
                [type="search"]:focus,
                [type="tel"]:focus,
                [type="time"]:focus,
                [type="week"]:focus,
                [multiple]:focus,
                textarea:focus,
                select:focus {
                    outline: 2px solid transparent;
                    outline-offset: 2px;
                    --tw-ring-inset: var(--tw-empty, /*!*/
                    /*!*/
                    );
                    --tw-ring-offset-width: 0px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-color: #2563eb;
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
                    border-color: #2563eb;
                }
                
                input::-moz-placeholder,
                textarea::-moz-placeholder {
                    color: #71717a;
                    opacity: 1;
                }
                
                input:-ms-input-placeholder,
                textarea:-ms-input-placeholder {
                    color: #71717a;
                    opacity: 1;
                }
                
                input::placeholder,
                textarea::placeholder {
                    color: #71717a;
                    opacity: 1;
                }
                
                select {
                    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%2371717a' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
                    background-position: right 0.5rem center;
                    background-repeat: no-repeat;
                    background-size: 1.5em 1.5em;
                    padding-right: 2.5rem;
                    -webkit-print-color-adjust: exact;
                    color-adjust: exact;
                }
                
                [multiple] {
                    background-image: initial;
                    background-position: initial;
                    background-repeat: unset;
                    background-size: initial;
                    padding-right: 0.75rem;
                    -webkit-print-color-adjust: unset;
                    color-adjust: unset;
                }
                
                [type="checkbox"],
                [type="radio"] {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    padding: 0;
                    -webkit-print-color-adjust: exact;
                    color-adjust: exact;
                    display: inline-block;
                    vertical-align: middle;
                    background-origin: border-box;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    flex-shrink: 0;
                    height: 1rem;
                    width: 1rem;
                    color: #2563eb;
                    background-color: #fff;
                    border-color: #71717a;
                    border-width: 1px;
                }
                
                [type="checkbox"] {
                    border-radius: 0px;
                }
                
                [type="radio"] {
                    border-radius: 100%;
                }
                
                [type="checkbox"]:focus,
                [type="radio"]:focus {
                    outline: 2px solid transparent;
                    outline-offset: 2px;
                    --tw-ring-inset: var(--tw-empty, /*!*/
                    /*!*/
                    );
                    --tw-ring-offset-width: 2px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-color: #2563eb;
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
                }
                
                [type="checkbox"]:checked,
                [type="radio"]:checked {
                    border-color: transparent;
                    background-color: currentColor;
                    background-size: 100% 100%;
                    background-position: center;
                    background-repeat: no-repeat;
                }
                
                [type="checkbox"]:checked {
                    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
                }
                
                [type="radio"]:checked {
                    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
                }
                
                [type="checkbox"]:checked:hover,
                [type="checkbox"]:checked:focus,
                [type="radio"]:checked:hover,
                [type="radio"]:checked:focus {
                    border-color: transparent;
                    background-color: currentColor;
                }
                
                [type="checkbox"]:indeterminate {
                    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
                    border-color: transparent;
                    background-color: currentColor;
                    background-size: 100% 100%;
                    background-position: center;
                    background-repeat: no-repeat;
                }
                
                [type="checkbox"]:indeterminate:hover,
                [type="checkbox"]:indeterminate:focus {
                    border-color: transparent;
                    background-color: currentColor;
                }
                
                [type="file"] {
                    background: unset;
                    border-color: inherit;
                    border-width: 0;
                    border-radius: 0;
                    padding: 0;
                    font-size: unset;
                    line-height: inherit;
                }
                
                [type="file"]:focus {
                    outline: 1px auto -webkit-focus-ring-color;
                }
                
                .containerr {
                    width: 100%;
                    align-items: center;
                    padding-left: 400px;
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                @media (min-width: 640px) {
                    .containerr {
                        max-width: 640px;
                    }
                }
                
                @media (min-width: 768px) {
                    .containerr {
                        max-width: 768px;
                    }
                }
                
                @media (min-width: 1024px) {
                    .containerr {
                        max-width: 1024px;
                    }
                }
                
                @media (min-width: 1280px) {
                    .containerr {
                        max-width: 1280px;
                    }
                }
                
                @media (min-width: 1536px) {
                    .containerr {
                        max-width: 1536px;
                    }
                }
                
                .space-y-reverse> :not([hidden])~ :not([hidden]) {
                    --tw-space-y-reverse: 1;
                }
                
                .space-x-reverse> :not([hidden])~ :not([hidden]) {
                    --tw-space-x-reverse: 1;
                }
                
                .divide-y> :not([hidden])~ :not([hidden]) {
                    --tw-divide-y-reverse: 0;
                    border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
                    border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
                }
                
                .divide-x> :not([hidden])~ :not([hidden]) {
                    --tw-divide-x-reverse: 0;
                    border-right-width: calc(1px * var(--tw-divide-x-reverse));
                    border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)));
                }
                
                .divide-y-reverse> :not([hidden])~ :not([hidden]) {
                    --tw-divide-y-reverse: 1;
                }
                
                .divide-x-reverse> :not([hidden])~ :not([hidden]) {
                    --tw-divide-x-reverse: 1;
                }
                
                .divide-solid> :not([hidden])~ :not([hidden]) {
                    border-style: solid;
                }
                
                .divide-dashed> :not([hidden])~ :not([hidden]) {
                    border-style: dashed;
                }
                
                .divide-dotted> :not([hidden])~ :not([hidden]) {
                    border-style: dotted;
                }
                
                .divide-double> :not([hidden])~ :not([hidden]) {
                    border-style: double;
                }
                
                .divide-none> :not([hidden])~ :not([hidden]) {
                    border-style: none;
                }
                
                .sr-only {
                    position: absolute;
                    width: 1px;
                    height: 1px;
                    padding: 0;
                    margin: -1px;
                    overflow: hidden;
                    clip: rect(0, 0, 0, 0);
                    white-space: nowrap;
                    border-width: 0;
                }
                
                .not-sr-only {
                    position: static;
                    width: auto;
                    height: auto;
                    padding: 0;
                    margin: 0;
                    overflow: visible;
                    clip: auto;
                    white-space: normal;
                }
                
                .appearance-none {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                }
                
                .bg-fixed {
                    background-attachment: fixed;
                }
                
                .bg-local {
                    background-attachment: local;
                }
                
                .bg-scroll {
                    background-attachment: scroll;
                }
                
                .bg-clip-border {
                    background-clip: border-box;
                }
                
                .bg-clip-padding {
                    background-clip: padding-box;
                }
                
                .bg-clip-content {
                    background-clip: content-box;
                }
                
                .bg-clip-text {
                    -webkit-background-clip: text;
                    background-clip: text;
                }
                
                .bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgba(0, 0, 0, var(--tw-bg-opacity));
                }
                
                .bg-white {
                    --tw-bg-opacity: 1;
                    background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
                }
                
                .bg-pink-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(252, 231, 243, var(--tw-bg-opacity));
                }
                
                .bg-pink-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(251, 207, 232, var(--tw-bg-opacity));
                }
                
                .bg-pink-300 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(249, 168, 212, var(--tw-bg-opacity));
                }
                
                .bg-pink-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(236, 72, 153, var(--tw-bg-opacity));
                }
                
                .bg-pink-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(219, 39, 119, var(--tw-bg-opacity));
                }
                
                .bg-purple-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(243, 232, 255, var(--tw-bg-opacity));
                }
                
                .bg-purple-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(233, 213, 255, var(--tw-bg-opacity));
                }
                
                .bg-purple-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(168, 85, 247, var(--tw-bg-opacity));
                }
                
                .bg-purple-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(147, 51, 234, var(--tw-bg-opacity));
                }
                
                .bg-indigo-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(224, 231, 255, var(--tw-bg-opacity));
                }
                
                .bg-indigo-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(199, 210, 254, var(--tw-bg-opacity));
                }
                
                .bg-indigo-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(99, 102, 241, var(--tw-bg-opacity));
                }
                
                .bg-indigo-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
                }
                
                .bg-blue-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(191, 219, 254, var(--tw-bg-opacity));
                }
                
                .bg-blue-400 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(96, 165, 250, var(--tw-bg-opacity));
                }
                
                .bg-blue-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(59, 130, 246, var(--tw-bg-opacity));
                }
                
                .bg-blue-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(37, 99, 235, var(--tw-bg-opacity));
                }
                
                .bg-lightBlue-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(224, 242, 254, var(--tw-bg-opacity));
                }
                
                .bg-lightBlue-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(186, 230, 253, var(--tw-bg-opacity));
                }
                
                .bg-lightBlue-400 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(56, 189, 248, var(--tw-bg-opacity));
                }
                
                .bg-lightBlue-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(14, 165, 233, var(--tw-bg-opacity));
                }
                
                .bg-lightBlue-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(2, 132, 199, var(--tw-bg-opacity));
                }
                
                .bg-teal-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(204, 251, 241, var(--tw-bg-opacity));
                }
                
                .bg-teal-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(153, 246, 228, var(--tw-bg-opacity));
                }
                
                .bg-teal-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(20, 184, 166, var(--tw-bg-opacity));
                }
                
                .bg-teal-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(13, 148, 136, var(--tw-bg-opacity));
                }
                
                .bg-emerald-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(209, 250, 229, var(--tw-bg-opacity));
                }
                
                .bg-emerald-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(167, 243, 208, var(--tw-bg-opacity));
                }
                
                .bg-emerald-400 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(52, 211, 153, var(--tw-bg-opacity));
                }
                
                .bg-emerald-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(16, 185, 129, var(--tw-bg-opacity));
                }
                
                .bg-emerald-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(5, 150, 105, var(--tw-bg-opacity));
                }
                
                .bg-green-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(187, 247, 208, var(--tw-bg-opacity));
                }
                
                .bg-green-400 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(74, 222, 128, var(--tw-bg-opacity));
                }
                
                .bg-green-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(34, 197, 94, var(--tw-bg-opacity));
                }
                
                .bg-amber-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(254, 243, 199, var(--tw-bg-opacity));
                }
                
                .bg-amber-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(253, 230, 138, var(--tw-bg-opacity));
                }
                
                .bg-amber-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(245, 158, 11, var(--tw-bg-opacity));
                }
                
                .bg-amber-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(217, 119, 6, var(--tw-bg-opacity));
                }
                
                .bg-orange-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(255, 237, 213, var(--tw-bg-opacity));
                }
                
                .bg-orange-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(254, 215, 170, var(--tw-bg-opacity));
                }
                
                .bg-orange-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(249, 115, 22, var(--tw-bg-opacity));
                }
                
                .bg-orange-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(234, 88, 12, var(--tw-bg-opacity));
                }
                
                .bg-red-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(254, 226, 226, var(--tw-bg-opacity));
                }
                
                .bg-red-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(254, 202, 202, var(--tw-bg-opacity));
                }
                
                .bg-red-400 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(248, 113, 113, var(--tw-bg-opacity));
                }
                
                .bg-red-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(239, 68, 68, var(--tw-bg-opacity));
                }
                
                .bg-red-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(220, 38, 38, var(--tw-bg-opacity));
                }
                
                .bg-gray-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(244, 244, 245, var(--tw-bg-opacity));
                }
                
                .bg-gray-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(228, 228, 231, var(--tw-bg-opacity));
                }
                
                .bg-gray-300 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(212, 212, 216, var(--tw-bg-opacity));
                }
                
                .bg-gray-700 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(63, 63, 70, var(--tw-bg-opacity));
                }
                
                .bg-gray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(39, 39, 42, var(--tw-bg-opacity));
                }
                
                .bg-gray-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(24, 24, 27, var(--tw-bg-opacity));
                }
                
                .bg-blueGray-50 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(248, 250, 252, var(--tw-bg-opacity));
                }
                
                .bg-blueGray-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(241, 245, 249, var(--tw-bg-opacity));
                }
                
                .bg-blueGray-200 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(226, 232, 240, var(--tw-bg-opacity));
                }
                
                .bg-blueGray-400 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(148, 163, 184, var(--tw-bg-opacity));
                }
                
                .bg-blueGray-500 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(100, 116, 139, var(--tw-bg-opacity));
                }
                
                .bg-blueGray-600 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(71, 85, 105, var(--tw-bg-opacity));
                }
                
                .bg-blueGray-700 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(51, 65, 85, var(--tw-bg-opacity));
                }
                
                .bg-blueGray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgba(30, 41, 59, var(--tw-bg-opacity));
                }
                
                .bg-transparent {
                    background-color: transparent;
                }
                
                .hover\:bg-pink-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(236, 72, 153, var(--tw-bg-opacity));
                }
                
                .hover\:bg-purple-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(168, 85, 247, var(--tw-bg-opacity));
                }
                
                .hover\:bg-indigo-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(99, 102, 241, var(--tw-bg-opacity));
                }
                
                .hover\:bg-lightBlue-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(14, 165, 233, var(--tw-bg-opacity));
                }
                
                .hover\:bg-teal-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(20, 184, 166, var(--tw-bg-opacity));
                }
                
                .hover\:bg-emerald-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(16, 185, 129, var(--tw-bg-opacity));
                }
                
                .hover\:bg-amber-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(245, 158, 11, var(--tw-bg-opacity));
                }
                
                .hover\:bg-orange-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(249, 115, 22, var(--tw-bg-opacity));
                }
                
                .hover\:bg-red-500:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(239, 68, 68, var(--tw-bg-opacity));
                }
                
                .hover\:bg-blueGray-400:hover {
                    --tw-bg-opacity: 1;
                    background-color: rgba(148, 163, 184, var(--tw-bg-opacity));
                }
                
                .active\:bg-pink-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(219, 39, 119, var(--tw-bg-opacity));
                }
                
                .active\:bg-pink-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(131, 24, 67, var(--tw-bg-opacity));
                }
                
                .active\:bg-purple-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(147, 51, 234, var(--tw-bg-opacity));
                }
                
                .active\:bg-purple-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(88, 28, 135, var(--tw-bg-opacity));
                }
                
                .active\:bg-indigo-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
                }
                
                .active\:bg-indigo-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(49, 46, 129, var(--tw-bg-opacity));
                }
                
                .active\:bg-lightBlue-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(2, 132, 199, var(--tw-bg-opacity));
                }
                
                .active\:bg-lightBlue-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(12, 74, 110, var(--tw-bg-opacity));
                }
                
                .active\:bg-teal-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(13, 148, 136, var(--tw-bg-opacity));
                }
                
                .active\:bg-teal-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(19, 78, 74, var(--tw-bg-opacity));
                }
                
                .active\:bg-emerald-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(5, 150, 105, var(--tw-bg-opacity));
                }
                
                .active\:bg-emerald-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(6, 78, 59, var(--tw-bg-opacity));
                }
                
                .active\:bg-green-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(22, 163, 74, var(--tw-bg-opacity));
                }
                
                .active\:bg-amber-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(217, 119, 6, var(--tw-bg-opacity));
                }
                
                .active\:bg-amber-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(120, 53, 15, var(--tw-bg-opacity));
                }
                
                .active\:bg-orange-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(234, 88, 12, var(--tw-bg-opacity));
                }
                
                .active\:bg-orange-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(124, 45, 18, var(--tw-bg-opacity));
                }
                
                .active\:bg-red-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(220, 38, 38, var(--tw-bg-opacity));
                }
                
                .active\:bg-red-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(127, 29, 29, var(--tw-bg-opacity));
                }
                
                .active\:bg-gray-100:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(244, 244, 245, var(--tw-bg-opacity));
                }
                
                .active\:bg-gray-700:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(63, 63, 70, var(--tw-bg-opacity));
                }
                
                .active\:bg-gray-900:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(24, 24, 27, var(--tw-bg-opacity));
                }
                
                .active\:bg-blueGray-50:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(248, 250, 252, var(--tw-bg-opacity));
                }
                
                .active\:bg-blueGray-500:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(100, 116, 139, var(--tw-bg-opacity));
                }
                
                .active\:bg-blueGray-600:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(71, 85, 105, var(--tw-bg-opacity));
                }
                
                .active\:bg-blueGray-800:active {
                    --tw-bg-opacity: 1;
                    background-color: rgba(30, 41, 59, var(--tw-bg-opacity));
                }
                
                .bg-center {
                    background-position: center;
                }
                
                .bg-repeat {
                    background-repeat: repeat;
                }
                
                .bg-no-repeat {
                    background-repeat: no-repeat;
                }
                
                .bg-repeat-x {
                    background-repeat: repeat-x;
                }
                
                .bg-repeat-y {
                    background-repeat: repeat-y;
                }
                
                .bg-repeat-round {
                    background-repeat: round;
                }
                
                .bg-repeat-space {
                    background-repeat: space;
                }
                
                .bg-cover {
                    background-size: cover;
                }
                
                .border-collapse {
                    border-collapse: collapse;
                }
                
                .border-separate {
                    border-collapse: separate;
                }
                
                .border-pink-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(251, 207, 232, var(--tw-border-opacity));
                }
                
                .border-pink-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(236, 72, 153, var(--tw-border-opacity));
                }
                
                .border-pink-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(219, 39, 119, var(--tw-border-opacity));
                }
                
                .border-purple-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(233, 213, 255, var(--tw-border-opacity));
                }
                
                .border-purple-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(168, 85, 247, var(--tw-border-opacity));
                }
                
                .border-purple-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(147, 51, 234, var(--tw-border-opacity));
                }
                
                .border-indigo-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(199, 210, 254, var(--tw-border-opacity));
                }
                
                .border-indigo-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(99, 102, 241, var(--tw-border-opacity));
                }
                
                .border-indigo-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(79, 70, 229, var(--tw-border-opacity));
                }
                
                .border-lightBlue-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(186, 230, 253, var(--tw-border-opacity));
                }
                
                .border-lightBlue-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(14, 165, 233, var(--tw-border-opacity));
                }
                
                .border-lightBlue-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(2, 132, 199, var(--tw-border-opacity));
                }
                
                .border-teal-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(153, 246, 228, var(--tw-border-opacity));
                }
                
                .border-teal-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(20, 184, 166, var(--tw-border-opacity));
                }
                
                .border-teal-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(13, 148, 136, var(--tw-border-opacity));
                }
                
                .border-emerald-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(167, 243, 208, var(--tw-border-opacity));
                }
                
                .border-emerald-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(16, 185, 129, var(--tw-border-opacity));
                }
                
                .border-emerald-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(5, 150, 105, var(--tw-border-opacity));
                }
                
                .border-amber-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(253, 230, 138, var(--tw-border-opacity));
                }
                
                .border-amber-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(245, 158, 11, var(--tw-border-opacity));
                }
                
                .border-amber-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(217, 119, 6, var(--tw-border-opacity));
                }
                
                .border-orange-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(254, 215, 170, var(--tw-border-opacity));
                }
                
                .border-orange-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(249, 115, 22, var(--tw-border-opacity));
                }
                
                .border-orange-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(234, 88, 12, var(--tw-border-opacity));
                }
                
                .border-red-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(254, 202, 202, var(--tw-border-opacity));
                }
                
                .border-red-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(239, 68, 68, var(--tw-border-opacity));
                }
                
                .border-red-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(220, 38, 38, var(--tw-border-opacity));
                }
                
                .border-gray-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(228, 228, 231, var(--tw-border-opacity));
                }
                
                .border-gray-300 {
                    --tw-border-opacity: 1;
                    border-color: rgba(212, 212, 216, var(--tw-border-opacity));
                }
                
                .border-gray-400 {
                    --tw-border-opacity: 1;
                    border-color: rgba(161, 161, 170, var(--tw-border-opacity));
                }
                
                .border-gray-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(82, 82, 91, var(--tw-border-opacity));
                }
                
                .border-gray-700 {
                    --tw-border-opacity: 1;
                    border-color: rgba(63, 63, 70, var(--tw-border-opacity));
                }
                
                .border-gray-900 {
                    --tw-border-opacity: 1;
                    border-color: rgba(24, 24, 27, var(--tw-border-opacity));
                }
                
                .border-blueGray-100 {
                    --tw-border-opacity: 1;
                    border-color: rgba(241, 245, 249, var(--tw-border-opacity));
                }
                
                .border-blueGray-200 {
                    --tw-border-opacity: 1;
                    border-color: rgba(226, 232, 240, var(--tw-border-opacity));
                }
                
                .border-blueGray-300 {
                    --tw-border-opacity: 1;
                    border-color: rgba(203, 213, 225, var(--tw-border-opacity));
                }
                
                .border-blueGray-400 {
                    --tw-border-opacity: 1;
                    border-color: rgba(148, 163, 184, var(--tw-border-opacity));
                }
                
                .border-blueGray-500 {
                    --tw-border-opacity: 1;
                    border-color: rgba(100, 116, 139, var(--tw-border-opacity));
                }
                
                .border-blueGray-600 {
                    --tw-border-opacity: 1;
                    border-color: rgba(71, 85, 105, var(--tw-border-opacity));
                }
                
                .border-blueGray-800 {
                    --tw-border-opacity: 1;
                    border-color: rgba(30, 41, 59, var(--tw-border-opacity));
                }
                
                .border-transparent {
                    border-color: transparent;
                }
                
                .rounded-sm {
                    border-radius: 0.125rem;
                }
                
                .rounded {
                    border-radius: 0.25rem;
                }
                
                .rounded-lg {
                    border-radius: 0.5rem;
                }
                
                .rounded-full {
                    border-radius: 9999px;
                }
                
                .rounded-r-none {
                    border-top-right-radius: 0px;
                    border-bottom-right-radius: 0px;
                }
                
                .rounded-l-none {
                    border-top-left-radius: 0px;
                    border-bottom-left-radius: 0px;
                }
                
                .rounded-t {
                    border-top-left-radius: 0.25rem;
                    border-top-right-radius: 0.25rem;
                }
                
                .rounded-r {
                    border-top-right-radius: 0.25rem;
                    border-bottom-right-radius: 0.25rem;
                }
                
                .rounded-b {
                    border-bottom-right-radius: 0.25rem;
                    border-bottom-left-radius: 0.25rem;
                }
                
                .rounded-l {
                    border-top-left-radius: 0.25rem;
                    border-bottom-left-radius: 0.25rem;
                }
                
                .rounded-t-lg {
                    border-top-left-radius: 0.5rem;
                    border-top-right-radius: 0.5rem;
                }
                
                .rounded-tl {
                    border-top-left-radius: 0.25rem;
                }
                
                .rounded-tr {
                    border-top-right-radius: 0.25rem;
                }
                
                .rounded-br {
                    border-bottom-right-radius: 0.25rem;
                }
                
                .rounded-bl {
                    border-bottom-left-radius: 0.25rem;
                }
                
                .border-solid {
                    border-style: solid;
                }
                
                .border-dashed {
                    border-style: dashed;
                }
                
                .border-dotted {
                    border-style: dotted;
                }
                
                .border-double {
                    border-style: double;
                }
                
                .border-none {
                    border-style: none;
                }
                
                .border-0 {
                    border-width: 0px;
                }
                
                .border {
                    border-width: 1px;
                }
                
                .border-t-0 {
                    border-top-width: 0px;
                }
                
                .border-r-0 {
                    border-right-width: 0px;
                }
                
                .border-l-0 {
                    border-left-width: 0px;
                }
                
                .border-l-2 {
                    border-left-width: 2px;
                }
                
                .border-t {
                    border-top-width: 1px;
                }
                
                .border-r {
                    border-right-width: 1px;
                }
                
                .border-b {
                    border-bottom-width: 1px;
                }
                
                .border-l {
                    border-left-width: 1px;
                }
                
                .box-border {
                    box-sizing: border-box;
                }
                
                .box-content {
                    box-sizing: content-box;
                }
                
                .cursor-pointer {
                    cursor: pointer;
                }
                
                .cursor-not-allowed {
                    cursor: not-allowed;
                }
                
                .block {
                    display: block;
                }
                
                .inline-block {
                    display: inline-block;
                }
                
                .inline {
                    display: inline;
                }
                
                .flex {
                    display: flex;
                }
                
                .inline-flex {
                    display: inline-flex;
                }
                
                .table {
                    display: table;
                }
                
                .table-caption {
                    display: table-caption;
                }
                
                .table-cell {
                    display: table-cell;
                }
                
                .table-column {
                    display: table-column;
                }
                
                .table-column-group {
                    display: table-column-group;
                }
                
                .table-footer-group {
                    display: table-footer-group;
                }
                
                .table-header-group {
                    display: table-header-group;
                }
                
                .table-row-group {
                    display: table-row-group;
                }
                
                .table-row {
                    display: table-row;
                }
                
                .flow-root {
                    display: flow-root;
                }
                
                .grid {
                    display: grid;
                }
                
                .inline-grid {
                    display: inline-grid;
                }
                
                .contents {
                    display: contents;
                }
                
                .hidden {
                    display: none;
                }
                
                .group:hover .group-hover\:block {
                    display: block;
                }
                
                .flex-row {
                    flex-direction: row;
                }
                
                .flex-row-reverse {
                    flex-direction: row-reverse;
                }
                
                .flex-col {
                    flex-direction: column;
                }
                
                .flex-col-reverse {
                    flex-direction: column-reverse;
                }
                
                .flex-wrap {
                    flex-wrap: wrap;
                }
                
                .flex-wrap-reverse {
                    flex-wrap: wrap-reverse;
                }
                
                .flex-nowrap {
                    flex-wrap: nowrap;
                }
                
                .place-items-auto {
                    place-items: auto;
                }
                
                .place-items-start {
                    place-items: start;
                }
                
                .place-items-end {
                    place-items: end;
                }
                
                .place-items-center {
                    place-items: center;
                }
                
                .place-items-stretch {
                    place-items: stretch;
                }
                
                .place-content-center {
                    place-content: center;
                }
                
                .place-content-start {
                    place-content: start;
                }
                
                .place-content-end {
                    place-content: end;
                }
                
                .place-content-between {
                    place-content: space-between;
                }
                
                .place-content-around {
                    place-content: space-around;
                }
                
                .place-content-evenly {
                    place-content: space-evenly;
                }
                
                .place-content-stretch {
                    place-content: stretch;
                }
                
                .place-self-auto {
                    place-self: auto;
                }
                
                .place-self-start {
                    place-self: start;
                }
                
                .place-self-end {
                    place-self: end;
                }
                
                .place-self-center {
                    place-self: center;
                }
                
                .place-self-stretch {
                    place-self: stretch;
                }
                
                .items-start {
                    align-items: flex-start;
                }
                
                .items-end {
                    align-items: flex-end;
                }
                
                .items-center {
                    align-items: center;
                }
                
                .items-baseline {
                    align-items: baseline;
                }
                
                .items-stretch {
                    align-items: stretch;
                }
                
                .content-center {
                    align-content: center;
                }
                
                .content-start {
                    align-content: flex-start;
                }
                
                .content-end {
                    align-content: flex-end;
                }
                
                .content-between {
                    align-content: space-between;
                }
                
                .content-around {
                    align-content: space-around;
                }
                
                .content-evenly {
                    align-content: space-evenly;
                }
                
                .self-auto {
                    align-self: auto;
                }
                
                .self-start {
                    align-self: flex-start;
                }
                
                .self-end {
                    align-self: flex-end;
                }
                
                .self-center {
                    align-self: center;
                }
                
                .self-stretch {
                    align-self: stretch;
                }
                
                .justify-items-auto {
                    justify-items: auto;
                }
                
                .justify-items-start {
                    justify-items: start;
                }
                
                .justify-items-end {
                    justify-items: end;
                }
                
                .justify-items-center {
                    justify-items: center;
                }
                
                .justify-items-stretch {
                    justify-items: stretch;
                }
                
                .justify-start {
                    justify-content: flex-start;
                }
                
                .justify-end {
                    justify-content: flex-end;
                }
                
                .justify-center {
                    justify-content: center;
                }
                
                .justify-between {
                    justify-content: space-between;
                }
                
                .justify-around {
                    justify-content: space-around;
                }
                
                .justify-evenly {
                    justify-content: space-evenly;
                }
                
                .justify-self-auto {
                    justify-self: auto;
                }
                
                .justify-self-start {
                    justify-self: start;
                }
                
                .justify-self-end {
                    justify-self: end;
                }
                
                .justify-self-center {
                    justify-self: center;
                }
                
                .justify-self-stretch {
                    justify-self: stretch;
                }
                
                .flex-1 {
                    flex: 1 1 0%;
                }
                
                .flex-auto {
                    flex: 1 1 auto;
                }
                
                .flex-initial {
                    flex: 0 1 auto;
                }
                
                .flex-grow {
                    flex-grow: 1;
                }
                
                .flex-shrink {
                    flex-shrink: 1;
                }
                
                .float-right {
                    float: right;
                }
                
                .float-left {
                    float: left;
                }
                
                .float-none {
                    float: none;
                }
                
                .clear-left {
                    clear: left;
                }
                
                .clear-right {
                    clear: right;
                }
                
                .clear-both {
                    clear: both;
                }
                
                .clear-none {
                    clear: none;
                }
                
                .font-light {
                    font-weight: 300;
                }
                
                .font-normal {
                    font-weight: 400;
                }
                
                .font-medium {
                    font-weight: 500;
                }
                
                .font-semibold {
                    font-weight: 600;
                }
                
                .font-bold {
                    font-weight: 700;
                }
                
                .h-0 {
                    height: 0px;
                }
                
                .h-1 {
                    height: 0.25rem;
                }
                
                .h-2 {
                    height: 0.5rem;
                }
                
                .h-5 {
                    height: 1.25rem;
                }
                
                .h-6 {
                    height: 1.5rem;
                }
                
                .h-8 {
                    height: 2rem;
                }
                
                .h-10 {
                    height: 2.5rem;
                }
                
                .h-12 {
                    height: 3rem;
                }
                
                .h-16 {
                    height: 4rem;
                }
                
                .h-auto {
                    height: auto;
                }
                
                .h-px {
                    height: 1px;
                }
                
                .h-full {
                    height: 100%;
                }
                
                .h-screen {
                    height: 100vh;
                }
                
                .text-xs {
                    font-size: 0.75rem;
                    line-height: 1rem;
                }
                
                .text-sm {
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                }
                
                .text-base {
                    font-size: 1rem;
                    line-height: 1.5rem;
                }
                
                .text-lg {
                    font-size: 1.125rem;
                    line-height: 1.75rem;
                }
                
                .text-xl {
                    font-size: 1.25rem;
                    line-height: 1.75rem;
                }
                
                .text-2xl {
                    font-size: 1.5rem;
                    line-height: 2rem;
                }
                
                .text-3xl {
                    font-size: 1.875rem;
                    line-height: 2.25rem;
                }
                
                .text-4xl {
                    font-size: 2.25rem;
                    line-height: 2.5rem;
                }
                
                .text-5xl {
                    font-size: 3rem;
                    line-height: 1;
                }
                
                .text-6xl {
                    font-size: 3.75rem;
                    line-height: 1;
                }
                
                .leading-none {
                    line-height: 1;
                }
                
                .leading-tight {
                    line-height: 1.25;
                }
                
                .leading-snug {
                    line-height: 1.375;
                }
                
                .leading-normal {
                    line-height: 1.5;
                }
                
                .leading-relaxed {
                    line-height: 1.625;
                }
                
                .list-inside {
                    list-style-position: inside;
                }
                
                .list-outside {
                    list-style-position: outside;
                }
                
                .list-none {
                    list-style-type: none;
                }
                
                .list-disc {
                    list-style-type: disc;
                }
                
                .list-decimal {
                    list-style-type: decimal;
                }
                
                .m-1 {
                    margin: 0.25rem;
                }
                
                .m-2 {
                    margin: 0.5rem;
                }
                
                .m-3 {
                    margin: 0.75rem;
                }
                
                .m-4 {
                    margin: 1rem;
                }
                
                .m-8 {
                    margin: 2rem;
                }
                
                .m-14 {
                    margin: 3.5rem;
                }
                
                .m-16 {
                    margin: 4rem;
                }
                
                .-m-16 {
                    margin: -4rem;
                }
                
                .-m-24 {
                    margin: -6rem;
                }
                
                .mx-1 {
                    margin-left: 0.25rem;
                    margin-right: 0.25rem;
                }
                
                .my-2 {
                    margin-top: 0.5rem;
                    margin-bottom: 0.5rem;
                }
                
                .my-4 {
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                }
                
                .mx-4 {
                    margin-left: 1rem;
                    margin-right: 1rem;
                }
                
                .my-6 {
                    margin-top: 1.5rem;
                    margin-bottom: 1.5rem;
                }
                
                .my-8 {
                    margin-top: 2rem;
                    margin-bottom: 2rem;
                }
                
                .mx-auto {
                    margin-left: auto;
                    margin-right: auto;
                }
                
                .mt-0 {
                    margin-top: 0px;
                }
                
                .mr-0 {
                    margin-right: 0px;
                }
                
                .mb-0 {
                    margin-bottom: 0px;
                }
                
                .mt-1 {
                    margin-top: 0.25rem;
                }
                
                .mr-1 {
                    margin-right: 0.25rem;
                }
                
                .mb-1 {
                    margin-bottom: 0.25rem;
                }
                
                .ml-1 {
                    margin-left: 0.25rem;
                }
                
                .mt-2 {
                    margin-top: 0.5rem;
                }
                
                .mr-2 {
                    margin-right: 0.5rem;
                }
                
                .mb-2 {
                    margin-bottom: 0.5rem;
                }
                
                .ml-2 {
                    margin-left: 0.5rem;
                }
                
                .mt-3 {
                    margin-top: 0.75rem;
                }
                
                .mr-3 {
                    margin-right: 0.75rem;
                }
                
                .mb-3 {
                    margin-bottom: 0.75rem;
                }
                
                .ml-3 {
                    margin-left: 0.75rem;
                }
                
                .mt-4 {
                    margin-top: 1rem;
                }
                
                .mr-4 {
                    margin-right: 1rem;
                }
                
                .mb-4 {
                    margin-bottom: 1rem;
                }
                
                .ml-4 {
                    margin-left: 1rem;
                }
                
                .mt-5 {
                    margin-top: 1.25rem;
                }
                
                .mr-5 {
                    margin-right: 1.25rem;
                }
                
                .mb-5 {
                    margin-bottom: 1.25rem;
                }
                
                .mt-6 {
                    margin-top: 1.5rem;
                }
                
                .mr-6 {
                    margin-right: 1.5rem;
                }
                
                .mb-6 {
                    margin-bottom: 1.5rem;
                }
                
                .mt-8 {
                    margin-top: 2rem;
                }
                
                .mr-8 {
                    margin-right: 2rem;
                }
                
                .mb-8 {
                    margin-bottom: 2rem;
                }
                
                .ml-8 {
                    margin-left: 2rem;
                }
                
                .mt-10 {
                    margin-top: 2.5rem;
                }
                
                .mt-12 {
                    margin-top: 3rem;
                }
                
                .mb-12 {
                    margin-bottom: 3rem;
                }
                
                .mt-16 {
                    margin-top: 4rem;
                }
                
                .mt-24 {
                    margin-top: 6rem;
                }
                
                .mb-24 {
                    margin-bottom: 6rem;
                }
                
                .mt-32 {
                    margin-top: 8rem;
                }
                
                .mt-40 {
                    margin-top: 10rem;
                }
                
                .mt-48 {
                    margin-top: 12rem;
                }
                
                .mr-auto {
                    margin-right: auto;
                }
                
                .ml-auto {
                    margin-left: auto;
                }
                
                .-mt-20 {
                    margin-top: -5rem;
                }
                
                .-ml-20 {
                    margin-left: -5rem;
                }
                
                .-mt-24 {
                    margin-top: -6rem;
                }
                
                .-mt-32 {
                    margin-top: -8rem;
                }
                
                .-mt-48 {
                    margin-top: -12rem;
                }
                
                .-mt-64 {
                    margin-top: -16rem;
                }
                
                .-mr-px {
                    margin-right: -1px;
                }
                
                .-mb-px {
                    margin-bottom: -1px;
                }
                
                .-ml-px {
                    margin-left: -1px;
                }
                
                .first\:ml-0:first-child {
                    margin-left: 0px;
                }
                
                .last\:mr-0:last-child {
                    margin-right: 0px;
                }
                
                .hover\:-mt-4:hover {
                    margin-top: -1rem;
                }
                
                .max-w-xs {
                    max-width: 20rem;
                }
                
                .max-w-sm {
                    max-width: 24rem;
                }
                
                .max-w-3xl {
                    max-width: 48rem;
                }
                
                .max-w-6xl {
                    max-width: 72rem;
                }
                
                .max-w-full {
                    max-width: 100%;
                }
                
                .min-w-0 {
                    min-width: 0px;
                }
                
                .object-contain {
                    -o-object-fit: contain;
                    object-fit: contain;
                }
                
                .object-cover {
                    -o-object-fit: cover;
                    object-fit: cover;
                }
                
                .object-fill {
                    -o-object-fit: fill;
                    object-fit: fill;
                }
                
                .object-none {
                    -o-object-fit: none;
                    object-fit: none;
                }
                
                .object-scale-down {
                    -o-object-fit: scale-down;
                    object-fit: scale-down;
                }
                
                .opacity-5 {
                    opacity: 0.05;
                }
                
                .opacity-25 {
                    opacity: 0.25;
                }
                
                .opacity-50 {
                    opacity: 0.5;
                }
                
                .opacity-75 {
                    opacity: 0.75;
                }
                
                .hover\:opacity-75:hover {
                    opacity: 0.75;
                }
                
                .outline-none {
                    outline: 2px solid transparent;
                    outline-offset: 2px;
                }
                
                .focus\:outline-none:focus {
                    outline: 2px solid transparent;
                    outline-offset: 2px;
                }
                
                .overflow-auto {
                    overflow: auto;
                }
                
                .overflow-hidden {
                    overflow: hidden;
                }
                
                .overflow-visible {
                    overflow: visible;
                }
                
                .overflow-scroll {
                    overflow: scroll;
                }
                
                .overflow-x-auto {
                    overflow-x: auto;
                }
                
                .overflow-y-auto {
                    overflow-y: auto;
                }
                
                .overflow-x-hidden {
                    overflow-x: hidden;
                }
                
                .overflow-y-hidden {
                    overflow-y: hidden;
                }
                
                .overflow-x-visible {
                    overflow-x: visible;
                }
                
                .overflow-y-visible {
                    overflow-y: visible;
                }
                
                .overflow-x-scroll {
                    overflow-x: scroll;
                }
                
                .overflow-y-scroll {
                    overflow-y: scroll;
                }
                
                .overscroll-auto {
                    -ms-scroll-chaining: chained;
                    overscroll-behavior: auto;
                }
                
                .overscroll-contain {
                    -ms-scroll-chaining: none;
                    overscroll-behavior: contain;
                }
                
                .overscroll-none {
                    -ms-scroll-chaining: none;
                    overscroll-behavior: none;
                }
                
                .overscroll-y-auto {
                    overscroll-behavior-y: auto;
                }
                
                .overscroll-y-contain {
                    overscroll-behavior-y: contain;
                }
                
                .overscroll-y-none {
                    overscroll-behavior-y: none;
                }
                
                .overscroll-x-auto {
                    overscroll-behavior-x: auto;
                }
                
                .overscroll-x-contain {
                    overscroll-behavior-x: contain;
                }
                
                .overscroll-x-none {
                    overscroll-behavior-x: none;
                }
                
                .p-0 {
                    padding: 0px;
                }
                
                .p-1 {
                    padding: 0.25rem;
                }
                
                .p-2 {
                    padding: 0.5rem;
                }
                
                .p-3 {
                    padding: 0.75rem;
                }
                
                .p-4 {
                    padding: 1rem;
                }
                
                .p-5 {
                    padding: 1.25rem;
                }
                
                .p-6 {
                    padding: 1.5rem;
                }
                
                .p-8 {
                    padding: 2rem;
                }
                
                .px-0 {
                    padding-left: 0px;
                    padding-right: 0px;
                }
                
                .py-1 {
                    padding-top: 0.25rem;
                    padding-bottom: 0.25rem;
                }
                
                .py-2 {
                    padding-top: 0.5rem;
                    padding-bottom: 0.5rem;
                }
                
                .px-2 {
                    padding-left: 0.5rem;
                    padding-right: 0.5rem;
                }
                
                .py-3 {
                    padding-top: 0.75rem;
                    padding-bottom: 0.75rem;
                }
                
                .px-3 {
                    padding-left: 0.75rem;
                    padding-right: 0.75rem;
                }
                
                .py-4 {
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                }
                
                .px-4 {
                    padding-left: 400px;
                    padding-right: 1rem;
                }
                
                .py-5 {
                    padding-top: 1.25rem;
                    padding-bottom: 1.25rem;
                }
                
                .px-5 {
                    padding-left: 1.25rem;
                    padding-right: 1.25rem;
                }
                
                .py-6 {
                    padding-top: 1.5rem;
                    padding-bottom: 1.5rem;
                }
                
                .px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                }
                
                .px-8 {
                    padding-left: 2rem;
                    padding-right: 2rem;
                }
                
                .py-10 {
                    padding-top: 2.5rem;
                    padding-bottom: 2.5rem;
                }
                
                .px-12 {
                    padding-left: 3rem;
                    padding-right: 3rem;
                }
                
                .py-16 {
                    padding-top: 4rem;
                    padding-bottom: 4rem;
                }
                
                .py-20 {
                    padding-top: 5rem;
                    padding-bottom: 5rem;
                }
                
                .py-24 {
                    padding-top: 6rem;
                    padding-bottom: 6rem;
                }
                
                .pt-0 {
                    padding-top: 0px;
                }
                
                .pl-0 {
                    padding-left: 0px;
                }
                
                .pt-1 {
                    padding-top: 0.25rem;
                }
                
                .pl-1 {
                    padding-left: 0.25rem;
                }
                
                .pr-2 {
                    padding-right: 0.5rem;
                }
                
                .pb-2 {
                    padding-bottom: 0.5rem;
                }
                
                .pl-2 {
                    padding-left: 0.5rem;
                }
                
                .pt-3 {
                    padding-top: 0.75rem;
                }
                
                .pr-3 {
                    padding-right: 0.75rem;
                }
                
                .pl-3 {
                    padding-left: 0.75rem;
                }
                
                .pr-4 {
                    padding-right: 1rem;
                }
                
                .pb-4 {
                    padding-bottom: 1rem;
                }
                
                .pl-4 {
                    padding-left: 1rem;
                }
                
                .pt-6 {
                    padding-top: 1.5rem;
                    padding-left: 400px;
                }
                
                .pb-6 {
                    padding-bottom: 1.5rem;
                }
                
                .pt-8 {
                    padding-top: 2rem;
                }
                
                .pr-10 {
                    padding-right: 2.5rem;
                }
                
                .pl-10 {
                    padding-left: 2.5rem;
                }
                
                .pt-12 {
                    padding-top: 3rem;
                }
                
                .pr-12 {
                    padding-right: 3rem;
                }
                
                .pt-16 {
                    padding-top: 4rem;
                }
                
                .pb-16 {
                    padding-bottom: 4rem;
                }
                
                .pt-20 {
                    padding-top: 5rem;
                }
                
                .pb-20 {
                    padding-bottom: 5rem;
                }
                
                .pt-24 {
                    padding-top: 6rem;
                }
                
                .pt-32 {
                    padding-top: 8rem;
                }
                
                .pb-32 {
                    padding-bottom: 8rem;
                }
                
                .pb-40 {
                    padding-bottom: 10rem;
                }
                
                .pt-48 {
                    padding-top: 12rem;
                }
                
                .pb-48 {
                    padding-bottom: 12rem;
                }
                
                .pb-64 {
                    padding-bottom: 16rem;
                }
                
                .placeholder-pink-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(249, 168, 212, var(--tw-placeholder-opacity));
                }
                
                .placeholder-pink-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(249, 168, 212, var(--tw-placeholder-opacity));
                }
                
                .placeholder-pink-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(249, 168, 212, var(--tw-placeholder-opacity));
                }
                
                .placeholder-pink-500::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(236, 72, 153, var(--tw-placeholder-opacity));
                }
                
                .placeholder-pink-500:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(236, 72, 153, var(--tw-placeholder-opacity));
                }
                
                .placeholder-pink-500::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(236, 72, 153, var(--tw-placeholder-opacity));
                }
                
                .placeholder-purple-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(216, 180, 254, var(--tw-placeholder-opacity));
                }
                
                .placeholder-purple-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(216, 180, 254, var(--tw-placeholder-opacity));
                }
                
                .placeholder-purple-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(216, 180, 254, var(--tw-placeholder-opacity));
                }
                
                .placeholder-indigo-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(165, 180, 252, var(--tw-placeholder-opacity));
                }
                
                .placeholder-indigo-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(165, 180, 252, var(--tw-placeholder-opacity));
                }
                
                .placeholder-indigo-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(165, 180, 252, var(--tw-placeholder-opacity));
                }
                
                .placeholder-lightBlue-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(125, 211, 252, var(--tw-placeholder-opacity));
                }
                
                .placeholder-lightBlue-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(125, 211, 252, var(--tw-placeholder-opacity));
                }
                
                .placeholder-lightBlue-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(125, 211, 252, var(--tw-placeholder-opacity));
                }
                
                .placeholder-teal-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(94, 234, 212, var(--tw-placeholder-opacity));
                }
                
                .placeholder-teal-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(94, 234, 212, var(--tw-placeholder-opacity));
                }
                
                .placeholder-teal-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(94, 234, 212, var(--tw-placeholder-opacity));
                }
                
                .placeholder-emerald-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(110, 231, 183, var(--tw-placeholder-opacity));
                }
                
                .placeholder-emerald-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(110, 231, 183, var(--tw-placeholder-opacity));
                }
                
                .placeholder-emerald-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(110, 231, 183, var(--tw-placeholder-opacity));
                }
                
                .placeholder-amber-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(252, 211, 77, var(--tw-placeholder-opacity));
                }
                
                .placeholder-amber-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(252, 211, 77, var(--tw-placeholder-opacity));
                }
                
                .placeholder-amber-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(252, 211, 77, var(--tw-placeholder-opacity));
                }
                
                .placeholder-orange-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(253, 186, 116, var(--tw-placeholder-opacity));
                }
                
                .placeholder-orange-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(253, 186, 116, var(--tw-placeholder-opacity));
                }
                
                .placeholder-orange-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(253, 186, 116, var(--tw-placeholder-opacity));
                }
                
                .placeholder-red-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(252, 165, 165, var(--tw-placeholder-opacity));
                }
                
                .placeholder-red-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(252, 165, 165, var(--tw-placeholder-opacity));
                }
                
                .placeholder-red-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(252, 165, 165, var(--tw-placeholder-opacity));
                }
                
                .placeholder-gray-400::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(161, 161, 170, var(--tw-placeholder-opacity));
                }
                
                .placeholder-gray-400:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(161, 161, 170, var(--tw-placeholder-opacity));
                }
                
                .placeholder-gray-400::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(161, 161, 170, var(--tw-placeholder-opacity));
                }
                
                .placeholder-blueGray-200::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(226, 232, 240, var(--tw-placeholder-opacity));
                }
                
                .placeholder-blueGray-200:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(226, 232, 240, var(--tw-placeholder-opacity));
                }
                
                .placeholder-blueGray-200::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(226, 232, 240, var(--tw-placeholder-opacity));
                }
                
                .placeholder-blueGray-300::-moz-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(203, 213, 225, var(--tw-placeholder-opacity));
                }
                
                .placeholder-blueGray-300:-ms-input-placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(203, 213, 225, var(--tw-placeholder-opacity));
                }
                
                .placeholder-blueGray-300::placeholder {
                    --tw-placeholder-opacity: 1;
                    color: rgba(203, 213, 225, var(--tw-placeholder-opacity));
                }
                
                .pointer-events-none {
                    pointer-events: none;
                }
                
                .pointer-events-auto {
                    pointer-events: auto;
                }
                
                .static {
                    position: static;
                }
                
                .fixed {
                    position: fixed;
                }
                
                .absolute {
                    position: absolute;
                }
                
                .relative {
                    position: relative;
                }
                
                .sticky {
                    position: sticky;
                }
                
                .inset-0 {
                    top: 0px;
                    right: 0px;
                    bottom: 0px;
                    left: 0px;
                }
                
                .top-0 {
                    top: 0px;
                }
                
                .right-0 {
                    right: 0px;
                }
                
                .bottom-0 {
                    bottom: 0px;
                }
                
                .left-0 {
                    left: 0px;
                }
                
                .top-auto {
                    top: auto;
                }
                
                .bottom-auto {
                    bottom: auto;
                }
                
                .resize-none {
                    resize: none;
                }
                
                .resize-y {
                    resize: vertical;
                }
                
                .resize-x {
                    resize: horizontal;
                }
                
                .resize {
                    resize: both;
                }
                
                * {
                    --tw-shadow: 0 0 #0000;
                }
                
                .shadow-sm {
                    --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                .shadow {
                    --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                .shadow-md {
                    --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                .shadow-lg {
                    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                .shadow-xl {
                    --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                .shadow-2xl {
                    --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                .shadow-none {
                    --tw-shadow: 0 0 #0000;
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                .hover\:shadow-md:hover {
                    --tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                .hover\:shadow-lg:hover {
                    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                }
                
                * {
                    --tw-ring-inset: var(--tw-empty, /*!*/
                    /*!*/
                    );
                    --tw-ring-offset-width: 0px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-color: rgba(59, 130, 246, 0.5);
                    --tw-ring-offset-shadow: 0 0 #0000;
                    --tw-ring-shadow: 0 0 #0000;
                }
                
                .ring {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
                }
                
                .ring-inset {
                    --tw-ring-inset: inset;
                }
                
                .focus\:ring:focus {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0));
                }
                
                .fill-current {
                    fill: currentColor;
                }
                
                .table-auto {
                    table-layout: auto;
                }
                
                .table-fixed {
                    table-layout: fixed;
                }
                
                .text-left {
                    text-align: left;
                }
                
                .text-center {
                    text-align: center;
                }
                
                .text-right {
                    text-align: right;
                }
                
                .text-justify {
                    text-align: justify;
                }
                
                .text-black {
                    --tw-text-opacity: 1;
                    color: rgba(0, 0, 0, var(--tw-text-opacity));
                }
                
                .text-white {
                    --tw-text-opacity: 1;
                    color: rgba(255, 255, 255, var(--tw-text-opacity));
                }
                
                .text-pink-400 {
                    --tw-text-opacity: 1;
                    color: rgba(244, 114, 182, var(--tw-text-opacity));
                }
                
                .text-pink-500 {
                    --tw-text-opacity: 1;
                    color: rgba(236, 72, 153, var(--tw-text-opacity));
                }
                
                .text-pink-600 {
                    --tw-text-opacity: 1;
                    color: rgba(219, 39, 119, var(--tw-text-opacity));
                }
                
                .text-pink-700 {
                    --tw-text-opacity: 1;
                    color: rgba(190, 24, 93, var(--tw-text-opacity));
                }
                
                .text-pink-800 {
                    --tw-text-opacity: 1;
                    color: rgba(157, 23, 77, var(--tw-text-opacity));
                }
                
                .text-purple-500 {
                    --tw-text-opacity: 1;
                    color: rgba(168, 85, 247, var(--tw-text-opacity));
                }
                
                .text-purple-600 {
                    --tw-text-opacity: 1;
                    color: rgba(147, 51, 234, var(--tw-text-opacity));
                }
                
                .text-purple-700 {
                    --tw-text-opacity: 1;
                    color: rgba(126, 34, 206, var(--tw-text-opacity));
                }
                
                .text-purple-800 {
                    --tw-text-opacity: 1;
                    color: rgba(107, 33, 168, var(--tw-text-opacity));
                }
                
                .text-indigo-500 {
                    --tw-text-opacity: 1;
                    color: rgba(99, 102, 241, var(--tw-text-opacity));
                }
                
                .text-indigo-600 {
                    --tw-text-opacity: 1;
                    color: rgba(79, 70, 229, var(--tw-text-opacity));
                }
                
                .text-indigo-700 {
                    --tw-text-opacity: 1;
                    color: rgba(67, 56, 202, var(--tw-text-opacity));
                }
                
                .text-indigo-800 {
                    --tw-text-opacity: 1;
                    color: rgba(55, 48, 163, var(--tw-text-opacity));
                }
                
                .text-blue-400 {
                    --tw-text-opacity: 1;
                    color: rgba(96, 165, 250, var(--tw-text-opacity));
                }
                
                .text-blue-500 {
                    --tw-text-opacity: 1;
                    color: rgba(59, 130, 246, var(--tw-text-opacity));
                }
                
                .text-blue-600 {
                    --tw-text-opacity: 1;
                    color: rgba(37, 99, 235, var(--tw-text-opacity));
                }
                
                .text-lightBlue-400 {
                    --tw-text-opacity: 1;
                    color: rgba(56, 189, 248, var(--tw-text-opacity));
                }
                
                .text-lightBlue-500 {
                    --tw-text-opacity: 1;
                    color: rgba(14, 165, 233, var(--tw-text-opacity));
                }
                
                .text-lightBlue-600 {
                    --tw-text-opacity: 1;
                    color: rgba(2, 132, 199, var(--tw-text-opacity));
                }
                
                .text-lightBlue-700 {
                    --tw-text-opacity: 1;
                    color: rgba(3, 105, 161, var(--tw-text-opacity));
                }
                
                .text-lightBlue-800 {
                    --tw-text-opacity: 1;
                    color: rgba(7, 89, 133, var(--tw-text-opacity));
                }
                
                .text-teal-500 {
                    --tw-text-opacity: 1;
                    color: rgba(20, 184, 166, var(--tw-text-opacity));
                }
                
                .text-teal-600 {
                    --tw-text-opacity: 1;
                    color: rgba(13, 148, 136, var(--tw-text-opacity));
                }
                
                .text-teal-700 {
                    --tw-text-opacity: 1;
                    color: rgba(15, 118, 110, var(--tw-text-opacity));
                }
                
                .text-teal-800 {
                    --tw-text-opacity: 1;
                    color: rgba(17, 94, 89, var(--tw-text-opacity));
                }
                
                .text-emerald-500 {
                    --tw-text-opacity: 1;
                    color: rgba(16, 185, 129, var(--tw-text-opacity));
                }
                
                .text-emerald-600 {
                    --tw-text-opacity: 1;
                    color: rgba(5, 150, 105, var(--tw-text-opacity));
                }
                
                .text-emerald-700 {
                    --tw-text-opacity: 1;
                    color: rgba(4, 120, 87, var(--tw-text-opacity));
                }
                
                .text-emerald-800 {
                    --tw-text-opacity: 1;
                    color: rgba(6, 95, 70, var(--tw-text-opacity));
                }
                
                .text-green-500 {
                    --tw-text-opacity: 1;
                    color: rgba(34, 197, 94, var(--tw-text-opacity));
                }
                
                .text-amber-500 {
                    --tw-text-opacity: 1;
                    color: rgba(245, 158, 11, var(--tw-text-opacity));
                }
                
                .text-amber-600 {
                    --tw-text-opacity: 1;
                    color: rgba(217, 119, 6, var(--tw-text-opacity));
                }
                
                .text-amber-700 {
                    --tw-text-opacity: 1;
                    color: rgba(180, 83, 9, var(--tw-text-opacity));
                }
                
                .text-amber-800 {
                    --tw-text-opacity: 1;
                    color: rgba(146, 64, 14, var(--tw-text-opacity));
                }
                
                .text-orange-500 {
                    --tw-text-opacity: 1;
                    color: rgba(249, 115, 22, var(--tw-text-opacity));
                }
                
                .text-orange-600 {
                    --tw-text-opacity: 1;
                    color: rgba(234, 88, 12, var(--tw-text-opacity));
                }
                
                .text-orange-700 {
                    --tw-text-opacity: 1;
                    color: rgba(194, 65, 12, var(--tw-text-opacity));
                }
                
                .text-orange-800 {
                    --tw-text-opacity: 1;
                    color: rgba(154, 52, 18, var(--tw-text-opacity));
                }
                
                .text-red-300 {
                    --tw-text-opacity: 1;
                    color: rgba(252, 165, 165, var(--tw-text-opacity));
                }
                
                .text-red-500 {
                    --tw-text-opacity: 1;
                    color: rgba(239, 68, 68, var(--tw-text-opacity));
                }
                
                .text-red-600 {
                    --tw-text-opacity: 1;
                    color: rgba(220, 38, 38, var(--tw-text-opacity));
                }
                
                .text-red-700 {
                    --tw-text-opacity: 1;
                    color: rgba(185, 28, 28, var(--tw-text-opacity));
                }
                
                .text-red-800 {
                    --tw-text-opacity: 1;
                    color: rgba(153, 27, 27, var(--tw-text-opacity));
                }
                
                .text-gray-100 {
                    --tw-text-opacity: 1;
                    color: rgba(244, 244, 245, var(--tw-text-opacity));
                }
                
                .text-gray-200 {
                    --tw-text-opacity: 1;
                    color: rgba(228, 228, 231, var(--tw-text-opacity));
                }
                
                .text-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgba(212, 212, 216, var(--tw-text-opacity));
                }
                
                .text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgba(161, 161, 170, var(--tw-text-opacity));
                }
                
                .text-gray-500 {
                    --tw-text-opacity: 1;
                    color: rgba(113, 113, 122, var(--tw-text-opacity));
                }
                
                .text-gray-600 {
                    --tw-text-opacity: 1;
                    color: rgba(82, 82, 91, var(--tw-text-opacity));
                }
                
                .text-gray-700 {
                    --tw-text-opacity: 1;
                    color: rgba(63, 63, 70, var(--tw-text-opacity));
                }
                
                .text-gray-800 {
                    --tw-text-opacity: 1;
                    color: rgba(39, 39, 42, var(--tw-text-opacity));
                }
                
                .text-gray-900 {
                    --tw-text-opacity: 1;
                    color: rgba(24, 24, 27, var(--tw-text-opacity));
                }
                
                .text-blueGray-50 {
                    --tw-text-opacity: 1;
                    color: rgba(248, 250, 252, var(--tw-text-opacity));
                }
                
                .text-blueGray-100 {
                    --tw-text-opacity: 1;
                    color: rgba(241, 245, 249, var(--tw-text-opacity));
                }
                
                .text-blueGray-200 {
                    --tw-text-opacity: 1;
                    color: rgba(226, 232, 240, var(--tw-text-opacity));
                }
                
                .text-blueGray-300 {
                    --tw-text-opacity: 1;
                    color: rgba(203, 213, 225, var(--tw-text-opacity));
                }
                
                .text-blueGray-400 {
                    --tw-text-opacity: 1;
                    color: rgba(148, 163, 184, var(--tw-text-opacity));
                }
                
                .text-blueGray-500 {
                    --tw-text-opacity: 1;
                    color: rgba(100, 116, 139, var(--tw-text-opacity));
                }
                
                .text-blueGray-600 {
                    --tw-text-opacity: 1;
                    color: rgba(71, 85, 105, var(--tw-text-opacity));
                }
                
                .text-blueGray-700 {
                    --tw-text-opacity: 1;
                    color: rgba(51, 65, 85, var(--tw-text-opacity));
                }
                
                .text-blueGray-800 {
                    --tw-text-opacity: 1;
                    color: rgba(30, 41, 59, var(--tw-text-opacity));
                }
                
                .hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgba(255, 255, 255, var(--tw-text-opacity));
                }
                
                .hover\:text-pink-600:hover {
                    --tw-text-opacity: 1;
                    color: rgba(219, 39, 119, var(--tw-text-opacity));
                }
                
                .hover\:text-gray-400:hover {
                    --tw-text-opacity: 1;
                    color: rgba(161, 161, 170, var(--tw-text-opacity));
                }
                
                .hover\:text-gray-600:hover {
                    --tw-text-opacity: 1;
                    color: rgba(82, 82, 91, var(--tw-text-opacity));
                }
                
                .hover\:text-gray-800:hover {
                    --tw-text-opacity: 1;
                    color: rgba(39, 39, 42, var(--tw-text-opacity));
                }
                
                .hover\:text-gray-900:hover {
                    --tw-text-opacity: 1;
                    color: rgba(24, 24, 27, var(--tw-text-opacity));
                }
                
                .hover\:text-blueGray-300:hover {
                    --tw-text-opacity: 1;
                    color: rgba(203, 213, 225, var(--tw-text-opacity));
                }
                
                .hover\:text-blueGray-500:hover {
                    --tw-text-opacity: 1;
                    color: rgba(100, 116, 139, var(--tw-text-opacity));
                }
                
                .hover\:text-blueGray-700:hover {
                    --tw-text-opacity: 1;
                    color: rgba(51, 65, 85, var(--tw-text-opacity));
                }
                
                .hover\:text-blueGray-800:hover {
                    --tw-text-opacity: 1;
                    color: rgba(30, 41, 59, var(--tw-text-opacity));
                }
                
                .truncate {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }
                
                .overflow-ellipsis {
                    text-overflow: ellipsis;
                }
                
                .overflow-clip {
                    text-overflow: clip;
                }
                
                .italic {
                    font-style: italic;
                }
                
                .not-italic {
                    font-style: normal;
                }
                
                .uppercase {
                    text-transform: uppercase;
                }
                
                .lowercase {
                    text-transform: lowercase;
                }
                
                .capitalize {
                    text-transform: capitalize;
                }
                
                .normal-case {
                    text-transform: none;
                }
                
                .underline {
                    text-decoration: underline;
                }
                
                .line-through {
                    text-decoration: line-through;
                }
                
                .no-underline {
                    text-decoration: none;
                }
                
                .antialiased {
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                }
                
                .subpixel-antialiased {
                    -webkit-font-smoothing: auto;
                    -moz-osx-font-smoothing: auto;
                }
                
                .ordinal,
                .slashed-zero,
                .lining-nums,
                .oldstyle-nums,
                .proportional-nums,
                .tabular-nums,
                .diagonal-fractions,
                .stacked-fractions {
                    --tw-ordinal: var(--tw-empty, /*!*/
                    /*!*/
                    );
                    --tw-slashed-zero: var(--tw-empty, /*!*/
                    /*!*/
                    );
                    --tw-numeric-figure: var(--tw-empty, /*!*/
                    /*!*/
                    );
                    --tw-numeric-spacing: var(--tw-empty, /*!*/
                    /*!*/
                    );
                    --tw-numeric-fraction: var(--tw-empty, /*!*/
                    /*!*/
                    );
                    font-variant-numeric: var(--tw-ordinal) var(--tw-slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-numeric-fraction);
                }
                
                .normal-nums {
                    font-variant-numeric: normal;
                }
                
                .ordinal {
                    --tw-ordinal: ordinal;
                }
                
                .slashed-zero {
                    --tw-slashed-zero: slashed-zero;
                }
                
                .lining-nums {
                    --tw-numeric-figure: lining-nums;
                }
                
                .oldstyle-nums {
                    --tw-numeric-figure: oldstyle-nums;
                }
                
                .proportional-nums {
                    --tw-numeric-spacing: proportional-nums;
                }
                
                .tabular-nums {
                    --tw-numeric-spacing: tabular-nums;
                }
                
                .diagonal-fractions {
                    --tw-numeric-fraction: diagonal-fractions;
                }
                
                .stacked-fractions {
                    --tw-numeric-fraction: stacked-fractions;
                }
                
                .tracking-wide {
                    letter-spacing: 0.025em;
                }
                
                .select-none {
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }
                
                .select-text {
                    -webkit-user-select: text;
                    -moz-user-select: text;
                    -ms-user-select: text;
                    user-select: text;
                }
                
                .select-all {
                    -webkit-user-select: all;
                    -moz-user-select: all;
                    user-select: all;
                }
                
                .select-auto {
                    -webkit-user-select: auto;
                    -moz-user-select: auto;
                    -ms-user-select: auto;
                    user-select: auto;
                }
                
                .align-baseline {
                    vertical-align: baseline;
                }
                
                .align-top {
                    vertical-align: top;
                }
                
                .align-middle {
                    vertical-align: middle;
                }
                
                .align-bottom {
                    vertical-align: bottom;
                }
                
                .align-text-top {
                    vertical-align: text-top;
                }
                
                .align-text-bottom {
                    vertical-align: text-bottom;
                }
                
                .visible {
                    visibility: visible;
                }
                
                .invisible {
                    visibility: hidden;
                }
                
                .whitespace-normal {
                    white-space: normal;
                }
                
                .whitespace-nowrap {
                    white-space: nowrap;
                }
                
                .whitespace-pre {
                    white-space: pre;
                }
                
                .whitespace-pre-line {
                    white-space: pre-line;
                }
                
                .whitespace-pre-wrap {
                    white-space: pre-wrap;
                }
                
                .break-normal {
                    overflow-wrap: normal;
                    word-break: normal;
                }
                
                .break-words {
                    overflow-wrap: break-word;
                }
                
                .break-all {
                    word-break: break-all;
                }
                
                .w-1 {
                    width: 0.25rem;
                }
                
                .w-5 {
                    width: 1.25rem;
                }
                
                .w-6 {
                    width: 1.5rem;
                }
                
                .w-8 {
                    width: 2rem;
                }
                
                .w-12 {
                    width: 3rem;
                }
                
                .w-16 {
                    width: 4rem;
                }
                
                .w-auto {
                    width: auto;
                }
                
                .w-1\/2 {
                    width: 50%;
                }
                
                .w-6\/12 {
                    width: 50%;
                }
                
                .w-10\/12 {
                    width: 83.333333%;
                }
                
                .w-full {
                    width: 100%;
                    align-self: right;
                    /*padding-left: 400px;*/
                }
                
                .w-screen {
                    width: 100vw;
                }
                
                .z-10 {
                    z-index: 10;
                }
                
                .z-40 {
                    z-index: 40;
                }
                
                .z-50 {
                    z-index: 50;
                }
                
                .grid-flow-row {
                    grid-auto-flow: row;
                }
                
                .grid-flow-col {
                    grid-auto-flow: column;
                }
                
                .grid-flow-row-dense {
                    grid-auto-flow: row dense;
                }
                
                .grid-flow-col-dense {
                    grid-auto-flow: column dense;
                }
                
                .transform {
                    --tw-translate-x: 0;
                    --tw-translate-y: 0;
                    --tw-rotate: 0;
                    --tw-skew-x: 0;
                    --tw-skew-y: 0;
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }
                
                .transform-gpu {
                    --tw-translate-x: 0;
                    --tw-translate-y: 0;
                    --tw-rotate: 0;
                    --tw-skew-x: 0;
                    --tw-skew-y: 0;
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    transform: translate3d(var(--tw-translate-x), var(--tw-translate-y), 0) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }
                
                .transform-none {
                    transform: none;
                }
                
                .rotate-90 {
                    --tw-rotate: 90deg;
                }
                
                .rotate-180 {
                    --tw-rotate: 180deg;
                }
                
                .transition-all {
                    transition-property: all;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }
                
                .transition {
                    transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms;
                }
                
                .ease-linear {
                    transition-timing-function: linear;
                }
                
                .ease-in {
                    transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
                }
                
                .ease-out {
                    transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
                }
                
                .ease-in-out {
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                }
                
                .duration-150 {
                    transition-duration: 150ms;
                }
                
                @-webkit-keyframes spin {
                    to {
                        transform: rotate(360deg);
                    }
                }
                
                @keyframes spin {
                    to {
                        transform: rotate(360deg);
                    }
                }
                
                @-webkit-keyframes ping {
                    75%,
                    100% {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
                
                @keyframes ping {
                    75%,
                    100% {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
                
                @-webkit-keyframes pulse {
                    50% {
                        opacity: 0.5;
                    }
                }
                
                @keyframes pulse {
                    50% {
                        opacity: 0.5;
                    }
                }
                
                @-webkit-keyframes bounce {
                    0%,
                    100% {
                        transform: translateY(-25%);
                        -webkit-animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
                        animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
                    }
                    50% {
                        transform: none;
                        -webkit-animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
                        animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
                    }
                }
                
                @keyframes bounce {
                    0%,
                    100% {
                        transform: translateY(-25%);
                        -webkit-animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
                        animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
                    }
                    50% {
                        transform: none;
                        -webkit-animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
                        animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
                    }
                }
                
                @media (min-width: 640px) {
                    .sm\:block {
                        display: block;
                    }
                    .sm\:mt-0 {
                        margin-top: 0px;
                    }
                    .sm\:ml-1 {
                        margin-left: 0.25rem;
                    }
                    .sm\:mr-2 {
                        margin-right: 0.5rem;
                    }
                    .sm\:pt-0 {
                        padding-top: 0px;
                    }
                    .sm\:pr-10 {
                        padding-right: 2.5rem;
                    }
                    .sm\:left-auto {
                        left: auto;
                    }
                    .sm\:w-3\/12 {
                        width: 25%;
                    }
                    .sm\:w-4\/12 {
                        width: 33.333333%;
                    }
                    .sm\:w-6\/12 {
                        width: 50%;
                    }
                    .sm\:w-7\/12 {
                        width: 58.333333%;
                    }
                    .sm\:w-9\/12 {
                        width: 75%;
                    }
                }
                
                @media (min-width: 768px) {
                    .md\:block {
                        display: block;
                    }
                    .md\:flex {
                        display: flex;
                    }
                    .md\:hidden {
                        display: none;
                    }
                    .md\:flex-row {
                        flex-direction: row;
                    }
                    .md\:flex-col {
                        flex-direction: column;
                    }
                    .md\:flex-nowrap {
                        flex-wrap: nowrap;
                    }
                    .md\:items-stretch {
                        align-items: stretch;
                    }
                    .md\:justify-start {
                        justify-content: flex-start;
                    }
                    .md\:justify-end {
                        justify-content: flex-end;
                    }
                    .md\:justify-between {
                        justify-content: space-between;
                    }
                    .md\:mt-0 {
                        margin-top: 0px;
                    }
                    .md\:mt-4 {
                        margin-top: 1rem;
                    }
                    .md\:mb-4 {
                        margin-bottom: 1rem;
                    }
                    .md\:mt-64 {
                        margin-top: 16rem;
                    }
                    .md\:ml-64 {
                        margin-left: 16rem;
                    }
                    .md\:mr-auto {
                        margin-right: auto;
                    }
                    .md\:ml-auto {
                        margin-left: auto;
                    }
                    .md\:min-h-full {
                        min-height: 100%;
                    }
                    .md\:min-w-full {
                        min-width: 100%;
                    }
                    .md\:opacity-100 {
                        opacity: 1;
                    }
                    .md\:overflow-hidden {
                        overflow: hidden;
                    }
                    .md\:overflow-y-auto {
                        overflow-y: auto;
                    }
                    .md\:px-4 {
                        padding-left: 1rem;
                        padding-right: 1rem;
                    }
                    .md\:px-10 {
                        padding-left: 2.5rem;
                        padding-right: 2.5rem;
                    }
                    .md\:pt-0 {
                        padding-top: 0px;
                    }
                    .md\:pb-2 {
                        padding-bottom: 0.5rem;
                    }
                    .md\:pr-12 {
                        padding-right: 3rem;
                    }
                    .md\:pt-32 {
                        padding-top: 8rem;
                    }
                    .md\:fixed {
                        position: fixed;
                    }
                    .md\:relative {
                        position: relative;
                    }
                    .md\:top-0 {
                        top: 0px;
                    }
                    .md\:bottom-0 {
                        bottom: 0px;
                    }
                    .md\:left-0 {
                        left: 0px;
                    }
                    .md\:shadow-none {
                        --tw-shadow: 0 0 #0000;
                        box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                    }
                    .md\:w-64 {
                        width: 16rem;
                    }
                    .md\:w-2\/12 {
                        width: 16.666667%;
                    }
                    .md\:w-4\/12 {
                        width: 33.333333%;
                    }
                    .md\:w-5\/12 {
                        width: 41.666667%;
                    }
                    .md\:w-6\/12 {
                        width: 50%;
                    }
                    .md\:w-8\/12 {
                        width: 66.666667%;
                    }
                }
                
                @media (min-width: 1024px) {
                    .lg\:bg-transparent {
                        background-color: transparent;
                    }
                    .lg\:block {
                        display: block;
                    }
                    .lg\:inline-block {
                        display: inline-block;
                    }
                    .lg\:flex {
                        display: flex;
                    }
                    .lg\:hidden {
                        display: none;
                    }
                    .lg\:flex-row {
                        flex-direction: row;
                    }
                    .lg\:self-center {
                        align-self: center;
                    }
                    .lg\:justify-start {
                        justify-content: flex-start;
                    }
                    .lg\:flex-grow {
                        flex-grow: 1;
                    }
                    .lg\:order-1 {
                        order: 1;
                    }
                    .lg\:order-2 {
                        order: 2;
                    }
                    .lg\:order-3 {
                        order: 3;
                    }
                    .lg\:mb-0 {
                        margin-bottom: 0px;
                    }
                    .lg\:mr-1 {
                        margin-right: 0.25rem;
                    }
                    .lg\:mr-4 {
                        margin-right: 1rem;
                    }
                    .lg\:mt-16 {
                        margin-top: 4rem;
                    }
                    .lg\:ml-auto {
                        margin-left: auto;
                    }
                    .lg\:-ml-16 {
                        margin-left: -4rem;
                    }
                    .lg\:-mt-64 {
                        margin-top: -16rem;
                    }
                    .lg\:p-10 {
                        padding: 2.5rem;
                    }
                    .lg\:py-2 {
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem;
                    }
                    .lg\:px-10 {
                        padding-left: 2.5rem;
                        padding-right: 2.5rem;
                    }
                    .lg\:pt-0 {
                        padding-top: 0px;
                    }
                    .lg\:pt-4 {
                        padding-top: 1rem;
                    }
                    .lg\:pr-4 {
                        padding-right: 1rem;
                    }
                    .lg\:pt-12 {
                        padding-top: 3rem;
                    }
                    .lg\:pt-24 {
                        padding-top: 6rem;
                    }
                    .lg\:pb-64 {
                        padding-bottom: 16rem;
                    }
                    .lg\:static {
                        position: static;
                    }
                    .lg\:shadow-none {
                        --tw-shadow: 0 0 #0000;
                        box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
                    }
                    .lg\:text-right {
                        text-align: right;
                    }
                    .lg\:text-white {
                        --tw-text-opacity: 1;
                        color: rgba(255, 255, 255, var(--tw-text-opacity));
                    }
                    .lg\:text-gray-300 {
                        --tw-text-opacity: 1;
                        color: rgba(212, 212, 216, var(--tw-text-opacity));
                    }
                    .lg\:text-blueGray-200 {
                        --tw-text-opacity: 1;
                        color: rgba(226, 232, 240, var(--tw-text-opacity));
                    }
                    .lg\:hover\:text-gray-300:hover {
                        --tw-text-opacity: 1;
                        color: rgba(212, 212, 216, var(--tw-text-opacity));
                    }
                    .lg\:hover\:text-blueGray-200:hover {
                        --tw-text-opacity: 1;
                        color: rgba(226, 232, 240, var(--tw-text-opacity));
                    }
                    .lg\:w-auto {
                        width: auto;
                    }
                    .lg\:w-2\/12 {
                        width: 16.666667%;
                    }
                    .lg\:w-3\/12 {
                        width: 25%;
                    }
                    .lg\:w-4\/12 {
                        width: 33.333333%;
                    }
                    .lg\:w-6\/12 {
                        width: 50%;
                    }
                    .lg\:w-8\/12 {
                        width: 66.666667%;
                    }
                    .lg\:w-9\/12 {
                        width: 75%;
                    }
                }
                
                @media (min-width: 1280px) {
                    .xl\:mb-0 {
                        margin-bottom: 0px;
                    }
                    .xl\:w-3\/12 {
                        width: 25%;
                    }
                    .xl\:w-4\/12 {
                        width: 33.333333%;
                    }
                    .xl\:w-6\/12 {
                        width: 50%;
                    }
                    .xl\:w-8\/12 {
                        width: 66.666667%;
                    }
                }
            </style>

 -->
            <!-- <div class="lg">
                <div class="px-4 py-5 flex-auto">
                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                        < Icon -->
                        <!-- <i class="fas fa-bolt"></i> -->
                    <!-- </div> -->
                    <!-- Text Box -->
                    <!-- <h5 class="text-x1 font-bold">Wollega University</h5>
                    <h6 class="text-xl font-semibold">Vision</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                        Wollega University aspires to be a center of excellence in producing competent citizens and high-level professionals and researchers that could play a critical leadership role, generate new knowledge and adapt relevant knowledge to national development.
                    </p>
                </div>
            </div>
        </div>
    </div> --> 

    <div class="lg">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                    <!-- Icon -->
                    <i class="fas fa-robot"></i>
                </div>
                <!-- Text Box -->
                <h5 class="text-x1 font-bold">Wollega University</h5>
                <h6 class="text-xl font-semibold">Mission</h6>
                <p class="mt-2 mb-4 text-gray-600">
                    Mission of Wollega University is to achieve excellence in producing competent professionals in various disciplines and be a model in research and consultancy service through practical based, lifelong learning, and promote democratic culture to contribute
                    to the national development of the country.
                </p>
            </div>
        </div>
    </div>



    <div class="lg">
        <div class=" relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg ">
            <div class="px-4 py-5 flex-auto ">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400 ">
                                        <!-- <i class="fas fa-robot "></i> -->
                </div>                <!-- Text Box -->
                <h5 class="text-x1 font-bold ">Wollega University</h5>
                <h6 class="text-xl font-semibold ">Mission</h6>
                <p class="mt-2 mb-4 text-gray-600 ">
                    Mission of Wollega University is to achieve excellence in producing competent professionals in various disciplines and be a model in research and consultancy service through practical based, lifelong learning, and promote democratic culture to contribute
                    to the national development of the country.
                </p>
            </div>
        </div>
    </div>



    <div class="lg">
        <div class=" relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg ">
            <div class="px-4 py-5 flex-auto ">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400 ">
                    <!-- Icon -->
                    <!-- <i class="fas fa-robot "></i> -->
                </div>
                <!-- Text Box -->
                <h5 class="text-x1 font-bold ">Wollega University</h5>
                <h6 class="text-xl font-semibold ">Mission</h6>
                <p class="mt-2 mb-4 text-gray-600 ">
                    Mission of Wollega University is to achieve excellence in producing competent professionals in various disciplines and be a model in research and consultancy service through practical based, lifelong learning, and promote democratic culture to contribute
                    to the national development of the country.
                </p>
            </div>
        </div>
    </div>



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