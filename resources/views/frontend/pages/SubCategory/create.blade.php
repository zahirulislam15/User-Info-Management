@extends('backend.master')
@section('content')
<h1>SubCategory Page</h1>


<form action="{{route('SubCategory_Submit')}}" method="post">
    @csrf
 
    <div class="form-group">
        <label for="exampleInputEmail1">SubCategory Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter category" name="subcategory_name">
            @error('subcategory_name')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">SubCategory Details</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Details" name="subcategory_details">
            @error('subcategory_details')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">SubCategory Status</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Status" name="subcategory_status">
            @error('subcategory_status')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
   
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
