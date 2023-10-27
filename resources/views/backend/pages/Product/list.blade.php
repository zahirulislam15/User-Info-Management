@extends('backend.master')
@section('content')
<h1>Product list </h1>

<div class="container">
    <a class="btn btn-primary" href="{{route('Product_create')}}">Add Product</a>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Product Image</th>
            <th scope="col">Product Size</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Status</th>
            <th scope="col">Action</th>
        </tr>
        
</thead>
    <tbody>
        <!-- for view list -->
        @foreach($Productall as $Product)
        <tr>
            <th>{{$Product->id}}</th>
             <td>{{$Product->product_name}}</td>
             <td>{{$Product->categories->category_name}}</td>
             <td>{{$Product->Brands->Brand_name}}</td>
             <td> <img width="50px" src="{{url('/uploads/product/',$Product->product_image)}}" 
             alt=""></td>
             <td>{{$Product->product_size}}</td>
             <td>{{$Product->product_price}}</td>
             <td>{{$Product->product_status}}</td>

             <td>
            <a class="btn btn-info" href="{{route('Product_delete',$Product->id)}}">delete</a>
             <a class="btn btn-danger" href="{{route('Product_edit',$Product->id)}}">edit</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
    @endsection
