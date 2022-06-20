@extends('master')

@section('title','volunteer register')
@section('title','volunteer.css')
<style>.breadcrumbNav{
  background: rgb(0 0 0 / 10%) !important;
   padding: 9px 40px;
   margin-bottom: 100px;
}
.breadcrumb{
  --bs-breadcrumb-margin-bottom:0!important;
  padding:0!important;
}
.first-a{
color: gray;
   text-decoration: none;}
   .first-a:hover{
    color: #d73e49;
   }</style>
@section('content')
<br>
<nav aria-label="breadcrumb" class="breadcrumbNav">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}" class="first-a">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Volunteering</li>
  </ol>
</nav>
<div class="container" >
  <div class="row ">
  
        <div class="col-lg-6"><img src="images/vol3.png" alt="" width="600vw" height="450hv"> </div>
        <div class="col-lg-4 text-start" style="margin-left:60px">
    
            <h3 class="text-danger text-opacity-50">Join Our Team Of Volunteers To Help Us Support  Who Need It.</h3>

    <form action='/added' method="post" >
       
        @csrf
        @method('PUT')
   
    <div class="form-group">
        <input type="text" class="form-control" id="" name="firstname" placeholder="Fisrt Name">
    </div><br>

    <div class="form-group">
        <input type="text" class="form-control" id="" name="lastname" placeholder="Last Name">
    </div><br>

    <div class="form-group">
      <input type="email" class="form-control" id="" name="email" placeholder="Email">
    </div><br>

    <div class="form-group">
      <input type="tel" class="form-control" id="" name="phonenumber" placeholder="Phone number">
    </div><br>

  <div class="form-group">
    <textarea class="form-control" id="" rows="3" name="description" placeholder="Describe Yourself and your work"></textarea>
  </div><br>
<br>
  <button type="submit" class="btn" style="    background: linear-gradient(-45deg, #f44336, #eb6d64, #d66159, #f44336); color: #fff">Submit</button>
</form>
</div>
  </div>
</div>
@endsection