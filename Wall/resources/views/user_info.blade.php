@extends('master')

@section('title','User')
@section('content')
<br>



<div class="row">
    <div class="col-sm-3"> </div>
    <div class="col-sm-8">
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
            @foreach ($info as $item)
          <tr>
            <td>{{$item->first_name}}</td>
            <td>{{$item->last_name}}</td>
            <td>{{$item->email }}</td>
            <td>{{$item->phone_number}}</td>
            <td>{{$item->address}}</td>
            <td>&ensp;&ensp;<a href="{{url('update/id/'.$item->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> </td>
            @endforeach
          </tr>
        </tbody>
    </table>
</div>
{{-- <img src="/images/color.gif" alt="" width="40px" height="300px"  class=""> --}}
</div>

@endsection