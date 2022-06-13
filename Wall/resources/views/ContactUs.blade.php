<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <label>First Name:</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="text" name="service_name" required><br>
            <label>Last Name:</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="text"  name="service_cost" required><br>
            <label>Email:</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="text"  name="service_cost" required><br>
            <label>Phone Number:</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="text"  name="service_cost" required><br>
            <label>City:</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="text"  name="service_cost" required><br>
            <label>Address:</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="text"  name="service_cost" required><br>
            <label>Organization:</label><br>
            <input style="width: 5%; height:20px;" class="mb-3" type="radio"  name="org" value="1"><label style="margin-right: 5%;">Yes</label>
            <input style="width: 5%; height:20px;" class="mb-3" type="radio"  name="org" value="0"><label>No</label><br>
            <label>If yes, What kind of organization?</label><br>
            <select style="width: 20%; height:30px;" class="mb-3" name="service" id="cars">
                <option value="volvo">Service1</option>
                <option value="saab">Service2</option>
                <option value="mercedes">Service3</option>
                <option value="audi">Service4</option>
            </select><br>
            <label>Date:</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="date"  name="service_cost" required><br>
            <label>Time (24/7 system):</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="time"  name="service_cost" required><br>
            <label>Would you be able to pay the cost of the service?</label><br>
            <input style="width: 5%; height:20px;" class="mb-3" type="radio"  name="org" value="1"><label style="margin-right: 5%;">Yes</label>
            <input style="width: 5%; height:20px;" class="mb-3" type="radio"  name="org" value="0"><label>No</label><br>
            <label>Upload an image of the location of required service:</label><br>
            <input style="width: 20%; height:30px;" class="mb-3" type="file"  name="service_image" class="mb-5" required><br>
            <label>Insert the dimensions (in meter):</label><br>
            <label>Width:</label>
            <input style="width: 5%; height:30px;" class="mb-3" type="number"  name="service_image" class="mb-5" required>
            <label>Height:</label>
            <input style="width: 5%; height:30px;" class="mb-3" type="number"  name="service_image" class="mb-5" required><br>
                                


            <button style="position: relative; left:4%; width:12%;" class="btn btn-danger  d-none d-md-block pull-right  hidden-xs hidden-sm waves-effect waves-light text-white">Send</button>
        </form>
</body>
</html>