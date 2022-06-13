@extends('master')

@section('title','Contact Us')
@section('css','contact.css')
@section('content')


<div class="container" >
    
    <div class="row text-start w-100 fs-5 px-5">

     <div class="col-lg-4">
        <form action="/bringReservation" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{csrf_token()}}" />

            <label>choose services?</label><br>
            <select style="width: 50%; height:30px;" class="mb-3" name="service" id="cars">
                @foreach ($services as $ser)
                    <option value="{{$ser->id}}">{{$ser->service_name}}</option>   
                @endforeach    
            </select>
            <br>
            {{-- <label>Date:</label><br> 
            <input style="width: 50%; height:30px;" class="mb-3" type="date"  name="service_cost" required><br> --}}
            {{-- <label>Time (24/7 system):</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="time"  name="service_cost" required><br> --}}
            <label>Would you be able to pay the cost of the service?</label><br>
            <input style="width: 5%; height:20px;" class="mb-3" type="radio"  name="pay" value="1"><label style="margin-right: 5%;">Yes</label>
            <input style="width: 5%; height:20px;" class="mb-3" type="radio"  name="pay" value="0"><label>No</label><br>
            <label>Upload an image of the location of required service:</label><br>
            <input style="width: 20%; height:60px;" class="mb-3" type="file"  name="service_image" class="mb-5" required><br><br>
            
                                
            <button style="position: relative; left:4%; width:12%;" class="btn btn-danger  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light text-white">Send</button>
        </form>
     </div>
        
        <div class="col-lg-6"><img src="https://th.bing.com/th/id/OIP.fG4DjCpvc5nl58fg47YsFQHaES?w=298&h=180&c=7&r=0&o=5&dpr=1.38&pid=1.7" alt="" srcset="" width="560px" height="500px"> </div>
    </div>
</div>
  </div>



@endsection