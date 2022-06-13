@extends('master')

@section('title','User')
@section('css','userInfo.css')
@section('content')
<br>



<main>
  <img src="/images/logo.png">
  <div class="container text-center">
    <div class="row">
    
      <div class="col-lg-12">
          <table class="table table-striped table-responsive w-75">
          <thead>
            <tr>
              <th scope="col">First name</th>
              <th scope="col">Last name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone_number</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
              
            <tr>
              <td>{{$info->first_name}}</td>
              <td>{{$info->last_name}}</td>
              <td>{{$info->email }}</td>
              <td>{{$info->phone_number}}</td>
              <td>{{$info->address}}</td>
              <td>&ensp;&ensp;<a href="{{url('update-info/id/'.$info->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> </td>
             
            </tr>
          </tbody>
      </table>
  </div>
  {{-- <img src="/images/color.gif" alt="" width="40px" height="300px"  class=""> --}}
  </div>
  </div>
</main>

@endsection