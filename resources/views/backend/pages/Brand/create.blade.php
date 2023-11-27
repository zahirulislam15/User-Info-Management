@extends('backend.master')
@section('content')
<h1>Brand Page</h1>


<form action="{{route('Brand_submit')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">Brand Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter category" name="Brand_name">
            @error('Brand_name')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Brand Details</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Details" name="Brand_details">
            @error('Brand_details')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Brand Status</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Status" name="Brand_status">
            @error('Brand_status')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Brand image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="select image" name="Brand_image">
            @error('Brand_image')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
   
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
