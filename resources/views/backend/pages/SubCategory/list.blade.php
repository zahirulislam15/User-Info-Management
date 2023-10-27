@extends('backend.master')
@section('content')
<h1>SubCategory list Page</h1>
@if (session('success'))
<div class="alert alert-success">
{{session("success")}}
</div>
@endif
<div class="container">
    <a class="btn btn-primary" href="{{route('SubCategory_Creat')}}">Create SubCategory</a>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Category Name</th>
            <th scope="col">SubCategory Name</th>
            <th scope="col">SubCategory Details</th>
            <th scope="col">SubCategory Status</th>
            <th scope="col">Action</th>

        </tr>
        
    </thead>
    <tbody>
        
    @foreach($subcategories as $subcategory)
            <tr>

        <td>{{$subcategory->id}}</td>
        <td>{{$subcategory->SubCategory_name}}</td>
        <td>{{$subcategory->SubCategory_details}}</td>
        <td>{{$subcategory->SubCategory_status}}</td>
       
            
        <td>
            <a class="btn btn-danger" href="{{route('SubCategory_delete',$subcategory->id)}}">Delete</a>
            <a class="btn btn-success" href="{{route('SubCategory_edit',$subcategory->id)}}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
    @endsection