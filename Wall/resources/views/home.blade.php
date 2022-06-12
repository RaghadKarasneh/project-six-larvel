@extends('master')
{{-- To add home title --}}
@section('title','Home')
{{-- To add home css file --}}
@section('css','home.css')
 {{-- To add home body --}}
@section('content')
{{-- main section --}}
    <main>
        <div class="container-fluied">
            {{-- Start hero section --}}
            <div class="hero">
                {{-- <img src="https://th.bing.com/th/id/R.707e418…?rik=UDJyESVUvJenWA&riu=http%3a%2f%2fcdn.wallpapersafari.com%2f94%2f83%2fbyDR0A.jpg&ehk=JVxYYgod1KPIBAOc4NY3LXp7vy99FcoEs%2bI%2bSGlBUVc%3d&risl=&pid=ImgRaw&r=0"  alt="" srcset=""> --}}
                {{-- <div class="hero-content">
                    <h1 class="text-center">Because painting is by nature a <span class="red-concept">luminous</span> language</h1>
                    <a href="" class="btn">SIGN UP</a>
                    <a href="" class="btn">SIGN IN</a>
                </div> --}}
                <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
                    <!-- 
                  - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
                  WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                  <source src="/images/hero.mp4" type="video/mp4">
                  <source src="/images/hero.mp4" type="video/mp4">
                  
                  </video>
                  <div id="polina">
                    <h1 class="text-center">Because painting is by nature a <span class="red-concept">luminous</span> language</h1>
                  
                    <a href="" class="btn">SIGN UP</a>
                    <a href="" class="btn">SIGN IN</a>
                  </div>
            </div>
            {{-- End hero section --}}
        </div>
        <div class="clearfix"></div>

            {{-- Start why us section --}}
        
		<div class="container why-us">
			<div class="why-us">
                <div class="row justify-content-center text-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="header-section">
                            <h2 class="title">Why <span>W(ALL)</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Single Service -->
                    <div class="col-md-6 col-lg-6">
                        <div class="single-feature text-center">
                            <i class="fa fa-house-chimney fa-4x"></i>
                            <h3>We have painted over 500 organizations, homes, and walls</h3>	
                        </div>
                    </div>
                    <!-- / End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-6 col-lg-6">
                        <div class="single-feature text-center">
                                <i class="fa-solid fa-clock fa-4x"></i>
                                <h3>We are ready to serve you 24 hours a week</h3>
                        </div>
                    </div>
                    <!-- / End Single Service -->
                </div>
                <div class="row">
                    <!-- Start Single Service -->
                    <div class="col-md-6 col-lg-6">
                        <div class="single-feature text-center">
                            <i class="fa-solid fa-file-pen fa-4x"></i>
                                <h3>Color consultant to help in color selection</h3>
                        </div>
                    </div>
                    <!-- / End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-6 col-lg-6">
                        <div class="single-feature text-center">
                                <i class="fa-solid fa-magnifying-glass fa-4x"></i>
                                <h3>Home diagnostic process for determining whether or not painting is needed</h3>
                        </div>
                    </div>
                    <!-- / End Single Service -->
                </div>
            </div>
            {{-- End why us section --}}
            <div class="clearfix"></div>

            {{-- Start services section --}}
            <div class="services">
                <h2 class="title text-center">OUR <span>SERVICES</span></h2>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/images/service3.png" height="auto" width="100%">
                    </div>

                    <div class="col-lg-6">
                        <img src="/images/service2.png" height="auto" width="100%">
                        <p class="text-start">We provide you all what you need to make your wall, house, or even your organization beutifaul as much as you want.</p>
                        <div class="text-start services-points">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{-- sevice 1 --}}
                                    <i class="fa-solid fa-angles-right"></i>   
                                    <span> MURAL PAINTAING</span>
                                    
                                    
                                    <br>
                                    <br>
                                        {{-- sevice 2 --}}
                                    <i class="fa-solid fa-angles-right"></i>   
                                    <span> EXTERIOR PAINTAING</span>
                                    <br>
                                    <br>
                                        {{-- sevice 3 --}}
                                    <i class="fa-solid fa-angles-right"> </i> 
                                    <span>  INTERIOR PAINTAING</span>
                                    <br>
                                    <br>
                                        {{-- sevice 4 --}}
                                    <i class="fa-solid fa-angles-right"></i>   
                                    <span> DRYWALL REPAIR</span>
                                </div>
                                {{-- Second coulmn --}}
                                <div class="col-lg-6">
                                    {{-- sevice 1 --}}
                                    <i class="fa-solid fa-angles-right"></i>
                                    <span> GARAGE PAINTAING</span>
                                    
                                    <br>
                                    <br>
                                        {{-- sevice 2 --}}
                                    <i class="fa-solid fa-angles-right"></i>   
                                    <span> DOOR PAINTAING</span>
                                    <br>
                                    <br>
                                        {{-- sevice 3 --}}
                                    <i class="fa-solid fa-angles-right"> </i> 
                                    <span>  BASEMENT PAINTAING</span>
                                    <br>
                                    <br>
                                        {{-- sevice 4 --}}
                                        <i class="fa-solid fa-angles-right"></i>
                                        <span> WALLPAPER REMOVAL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
           
        </div>
        {{-- End services section --}}
        <div class="clearfix"></div>
        {{-- Start section Join Us --}}
        <div class="join-us">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h1>JOIN US</h1>
                    <p class="text-center"> If you are intrested in what we do and you want to be a member of our family then join us NOW.</p>
                    <button>JOIN US</button>
                </div>
            </div>
        </div>
        {{-- Start section Our Projects --}}
    </main>
@endsection