@extends('master')

@section('title','Reservation')
@section('css','reserv.css')
@section('content')

<script>
    function cost(){
    let height=document.getElementById('height').value;
    let width=document.getElementById('width').value;
    let price=document.getElementById('price').value;
    let finalCost=document.getElementById('finalCost').value=height*width*price;
    
    return finalCost;
}
</script>
<div class="container" >
    
    <div class="row text-start w-100 fs-5 px-5">

     <div class="col-lg-4">
        @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
        <form action={{url("/bringReservation/id/$id")}} method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{csrf_token()}}" />

            <label>choose services?</label><br>
            <select  class="mb-3" name="service" id="cars">
                @foreach ($services as $ser)
                    <option value="{{$ser->id}}">{{$ser->service_name}}</option>  
                    {{-- <input type="hidden" name="price" id="price" value="{{$ser->service_cost}}">  --}}
                    {{-- <label for="">Height</label>
                    <input type="number" name="height" id="height" required value="1">
                    <label for="">Width</label>
                    <input type="number" name="width" id="width" value="1" required> 
                    <label for="">Final Cost</label>
                    <button onclick="cost()">Calc</button>
                    <input type="number" name="cost" id="finalCost" >   --}}
                @endforeach    
            </select>
            <br>
            {{-- <label>Date:</label><br> 
            <input style="width: 50%; height:30px;" class="mb-3" type="date"  name="service_cost" required><br> --}}
            {{-- <label>Time (24/7 system):</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="time"  name="service_cost" required><br> --}}
            <label>Would you be able to pay the cost of the service?</label>
            <input  class="mb-3" type="radio"  name="pay" value="1"><label >Yes</label>
            <input class="mb-3" type="radio"  name="pay" value="0"><label>No</label>
            <label>Upload an image of the location of required service:</label><br>
            <input class="mb-3" type="file"  name="service_image" class="mb-5" required><br><br>
            
                                     
            <button  class="btn btn-danger  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light text-white">Send</button>
        </form>
     </div>
        
        <div class="col-lg-6"><img src="https://th.bing.com/th/id/OIP.fG4DjCpvc5nl58fg47YsFQHaES?w=298&h=180&c=7&r=0&o=5&dpr=1.38&pid=1.7" alt="" srcset="" width="560px" height="500px"> </div>
    </div>
</div>
  </div>



@endsection