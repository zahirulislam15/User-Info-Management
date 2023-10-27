@extends('backend.master')
@section('content')
<h1>Brand list Page</h1>
@if (session('success'))
<div class="alert alert-success">
{{session("success")}}
</div>
@endif
@if (session('danger'))
<div class="alert alert-danger">
{{session("danger")}}
</div>
@endif
<div class="container">
    <a class="btn btn-primary" href="{{route('Brand_create')}}" enctype="multipart/form-data">Create Brand</a>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Brand Image</th>
            <th scope="col">Brand Details</th>
            <th scope="col">Brand Status</th>
            <th scope="col">Action</th>

        </tr>
        
    </thead>
    <tbody>
        
            @foreach($Brands as $Brand)
            <tr>

        <td>{{$Brand->id}}</td>
        <td>{{$Brand->Brand_name}}</td>
        <td><img width="70px" src="{{ url('/uploads/Brand/',$Brand->Brand_image) }}" 
        alt="" srcset=""></td>
        <td>{{$Brand->Brand_details}}</td>
        <td>{{$Brand->Brand_status}}</td>
    
            
        <td>
            <a class="btn btn-danger" href="{{route('Brand_delete',$Brand->id)}}">Delete</a>
            <a class="btn btn-success" href="{{route('Brand_edit',$Brand->id)}}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
<div class="d-flex justify-content-center"
    @endsection