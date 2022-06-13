@extends('master')

@section('title','volunteer register')
@section('title','volunteer.css')
@section('content')
<br>
<div class="container" >
  <div class="row row-cols-4">
  
        <div class="col-4"><img src="/images/vol3.png" alt="" width="500vw" height="600hv"> </div>
        <div class="col-6" style="margin-left:60px">
            <h2 class="text-danger">Volunteers Information</h2>
            <h3 class="text-danger text-opacity-50">Join Our Team Of Volunteers To Help Us Support  Who Need It.</h3>

    <form action='/added' method="post" >
        <hr>
        @csrf
        @method('PUT')
    <h4>Join to us </h4>
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
  <button type="submit" class="btn btn-danger">Submit</button>
</form>
</div>

@endsection