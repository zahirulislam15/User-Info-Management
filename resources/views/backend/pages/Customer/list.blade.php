@extends('backend.master')
@section('content')
<h1>Customer list Page</h1>
@if (session('success'))
<div class="alert alert-success">
{{session("success")}}
</div>
@endif
<div class="container">
    <a class="btn btn-primary" href="{{route('CustomerCreate')}}">Customer Action</a>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Customer Id</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Customer Image</th>
            <th scope="col">Customer Mobile</th>
            <th scope="col">Customer Address</th>
            <th scope="col">Action</th>

        </tr>
        
    </thead>
    <tbody>
        
            @foreach($customerall as $customer)
            <tr>

        <td>{{$customer->id}}</td>
        <td>{{$customer->customer_id}}</td>
        <td>{{$customer->customer_name}}</td>
        <td><img width="70px" src="{{ url('/uploads/customer/',$customer->customer_image) }}" 
        alt="" srcset=""></td>
        <td>{{$customer->customer_mobile}}</td>
        <td>{{$customer->customer_address}}</td>
       
            
        <td>
            <a class="btn btn-danger" href="{{route('Customer_delete',$customer->id)}}">Delete</a>
            <a class="btn btn-success" href="{{route('Customer_edit',$customer->id)}}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
<div class="d-flex justify-content-center">
{{$customerall->links()}}</div>
    @endsection