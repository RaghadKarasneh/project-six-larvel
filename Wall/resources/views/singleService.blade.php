@extends('master')
{{-- To add home title --}}
@section('title','Services')
{{-- To add home css file --}}
@section('css','singleService.css')
 {{-- To add home body --}}
@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{url('/images/services/'.$service->service_image)}}" height="100%" width="100%">
            </div>
            <div  class="col-lg-6">
                <h1 class="text-start">{{$service->service_name}}</h1>
                <p class="text-start">{{$service->service_description}}</p>
                <span class="text-start" style="float:left">Cost: <b>{{$service->service_cost}}<b></span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</main>
@endsection
