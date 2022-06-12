@extends('master')
@section('title','Update Information')

@section('content')

    <br><br>

    <div class="container" >
        <div class="row row-cols-4">
            <div class="col"> </div>
            <div class="col-6 ">
                <form action='{{url('updatee/id/'.$update->id)}}' method="post">
                    <fieldset>
                        <legend class="fw-bolder ml-5">User information edit</legend>
                        <hr>
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="fw-bolder text-success">Fisrt Name</label>
                            <input type="text" class="form-control" id="" name="firstname" value="{{$update->first_name}}" >
                            <span style="color: red;">@error('firstname'){{$message}}@enderror </span>
                        </div>
                        <div class="form-group">
                            <label class="fw-bolder text-success">Last Name</label>
                            <input type="text" class="form-control" id="" name="lastname" value="{{$update->last_name}}" >
                            <span style="color: red;">@error('lastname'){{$message}}@enderror </span>
                        </div>
                        
                        <div class="form-group">
                            <label class="fw-bolder text-success">E-mail</label>
                            <input type="text" class="form-control" id="" name="email" value="{{$update->email}}">
                            <span style="color: red;">@error('email'){{$message}}@enderror </span>
                    </div>
                    
                    <div class="form-group ">
                        <label class="fw-bolder text-success">Phone Number</label>
                        <input type="text" class="form-control" id="" name="phonenumber" value="{{$update->phone_number}}" >
                        <span style="color: red;">@error('phonenumber'){{$message}}@enderror </span>
                    </div>
                    
                    <div class="form-group">
                        <label class="fw-bolder text-success"> Address </label>
                        <input type="text" class="form-control" id="" name="address" value="{{$update->address}}">
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="fw-bolder text-success"> Password </label>
                        <input type="text" class="form-control" id="" name="password" value="" >
                        <span style="color: red;">@error('password'){{$message}}@enderror </span>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Update</button>
                </fieldset>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>

    @endsection