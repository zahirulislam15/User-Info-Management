@extends('backend.master')
@section('content')
<h1>Brand Page</h1>


<form action="{{route('Brand_edit_Submit',$BrandEdit->id)}}" method="post" enctype='multipart/form-data'>
@method('PUT')

    @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">Brand Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter category" name="Brand_name" value="{{$BrandEdit->Brand_name}}">
            @error('Brand_name')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="ss">Brand Details</label>
        <input type="text" class="form-control" id="ss" aria-describedby="emailHelp"
            placeholder="Enter Details" name="Brand_details" value="{{$BrandEdit->Brand_details}}">
            @error('Brand_details')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Brand Status</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Status" name="Brand_status" value="{{$BrandEdit->Brand_status}}">
            @error('Brand_status')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Brand image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="select image" name="Brand_image">
            <img src="{{url('/uploads/Brand/'.$BrandEdit->Brand_image)}}" height="70px" width="70px" class="rounded-circle" alt="">
            @error('Brand_image')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
   
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
