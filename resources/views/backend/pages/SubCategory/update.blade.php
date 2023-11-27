@extends('backend.master')
@section('content')
<h1>Edit SubCategory</h1>


<form action="{{route('SubCategory_edit_Submit')}}" method="post">
    @csrf
  
    <div class="form-group mt-4">
        <label for="exampleInputEmail1">SubCategory Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="SubCategory_name">
            @error('SubCategory_name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>
    <div class="form-group mt-4">
        <label for="exampleInputEmail1">SubCategory Details</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="SubCategory_details">
            @error('SubCategory_details')
            <div class="alert alert-danger">{{$message}}</div>

            @enderror

    </div>
    

    <div class="form-group mt-4">
        <label for="exampleInputPassword1">SubCategory Status</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order details" name="SubCategory_status">
            @error('SubCategory_status')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>

    

    <div class="form-group mt-4 text-center">
         <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
 
        
</form>
@endsection
