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

                <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
                     <source src="/images/hero.mp4" type="video/mp4">
                  <source src="/images/hero.mp4" type="video/mp4">
                  
                  </video>
                  <div id="polina">
                    <h1 class="text-center">Because painting is by nature a <span class="red-concept">luminous</span> language</h1>
                  <?php 
                //   $display="none";
                //   if($id=="null")
                //   {$display="block";
                //   }else{
                //     $display="none";}?>
                    <a href="" class="btn" style="display:{{$display}}">SIGN UP</a>
                    <a href="" class="btn" style="display:{{$display}}">SIGN IN</a>
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
                        <img src="/images/serviceHomePage3.png" height="auto" width="100%">
                    </div>

                    <div class="col-lg-6">
                        <img src="/images/serviceHomePage2.png" height="auto" width="100%">
                        <p class="text-start">We provide you all what you need to make your wall, house, or even your organization beutifaul as much as you want.</p>
                        <div class="text-start services-points">
                            <div class="row">
                                {{-- <div class="col-lg-6"> --}}
                                    {{-- sevice 1 --}}
                                    @foreach ($service as $value)
                                       
                                    
                                    <i class="fa-solid fa-angles-right">   
                                    <a href="{{url('/single-service/id/'.$value->id)}}"> {{$value->service_name}}</a>
                                </i>
                                    
                                    <br>
                                    <br>
                                        {{-- sevice 2 --}}
                                    {{-- <i class="fa-solid fa-angles-right"></i>   
                                    <a href=""> EXTERIOR PAINTAING</a>
                                    <br>
                                    <br>
                                        {{-- sevice 3 --}}
                                    {{-- <i class="fa-solid fa-angles-right"> </i> 
                                    <a href="">  INTERIOR PAINTAING</a>
                                    <br>
                                    <br> --}}
                                        {{-- sevice 4 --}}
                                    {{-- <i class="fa-solid fa-angles-right"></i>   
                                    <a href=""> DRYWALL REPAIR</a> --}} 
                                {{-- </div> --}}
                                {{-- Second coulmn --}}
                                {{-- <div class="col-lg-6">
                                    {{-- sevice 5 --}}
                                    {{-- <i class="fa-solid fa-angles-right"></i>
                                    <a href=""> GARAGE PAINTAING</a>
                                    
                                    <br>
                                    <br>
                                        {{-- sevice 6 --}}
                                    {{-- <i class="fa-solid fa-angles-right"></i>   
                                    <a href=""> DOOR PAINTAING</a>
                                    <br>
                                    <br> --}}
                                        {{-- sevice 7 --}}
                                    {{-- <i class="fa-solid fa-angles-right"> </i> 
                                    <a href="">  BASEMENT PAINTAING</a>
                                    <br>
                                    <br> --}}
                                        {{-- sevice 8 --}}
                                        {{-- <i class="fa-solid fa-angles-right"></i>
                                        <a href=""> WALLPAPER REMOVAL</a>
                                </div> --}} 
                                @endforeach
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
                    <a href="{{url('/add')}}">JOIN US</a>
                </div>
            </div>
        </div>
        {{-- Start section Our Projects --}}
        <div class="our-projects">
            <h2 class="title text-center">OUR <span>PROJECTS</span></h2>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/images/project1.png" class="d-block w-100" height="900px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/images/project2.png" class="d-block w-100"  height="900px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/images/project3.png" class="d-block w-100"  height="900px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/images/project4.png" class="d-block w-100"  height="900px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/images/project5.png" class="d-block w-100"  height="900px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        {{-- End section Pur Projects --}}
    </main>
@endsection
@section('footer')
@endsection