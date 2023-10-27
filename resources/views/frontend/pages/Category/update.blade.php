@extends('backend.master')
@section('content')
<h1>Update Category Page</h1>


<form action="{{route('Category_edit_submit', $editCategory->id)}}" method="post">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter category" name="category_name" value="{{$editCategory->category_name}}">
            @error('category_name')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Category Details</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Details" name="category_details" value="{{$editCategory->category_details}}">
            @error('category_details')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Category Status</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Status" name="category_status" value="{{$editCategory->category_status}}">
            @error('category_status')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
   
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
