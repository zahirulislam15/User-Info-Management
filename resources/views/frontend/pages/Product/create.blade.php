@extends('backend.master')
@section('content')
<h1>Make your new product</h1>


<form action="{{route('Product_submit_create')}}" method="post" enctype="multipart/form-data">
    @csrf
  
    <div class="form-group mt-4">
        <label for="exampleInputEmail1">Product Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="product_name">
            @error('product_name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>
    <div class="form-group mt-4">
        <label for="exampleInputEmail1">Product Image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="product_image">
            @error('product_image')
            <div class="alert alert-danger">{{$message}}</div>

            @enderror

    </div>
    <div class="form-group mt-4">
        <label for="exampleInputPassword1">Product Size</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order date" name="product_size">
            @error('product_size')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>

    <div class="form-group mt-4">
        <label for="exampleInputPassword1">Product Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order details" name="product_price">
            @error('product_price')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

        </div>

    <div class="form-group mt-4">
        <label for="exampleInputPassword1">Product Status</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order details" name="product_status">
            @error('product_status')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>

    <div class="form-group mt-4">
        <label for="category_id">Category Name</label>
        <select name="category_id" class="form-control form-select" id="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-4">
        <label for="Brand_id">Brand Name</label>
        <select name="Brand_id" class="form-control form-select" id="Brand_id">
            @foreach($Brands as $Brand)
            <option value="{{$Brand->id}}">{{$Brand->Brand_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mt-4 text-center">
         <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
 
        
</form>
@endsection
