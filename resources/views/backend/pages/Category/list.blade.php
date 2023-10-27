@extends('backend.master')
@section('content')
<h1>Category list Page</h1>
@if (session('success'))
<div class="alert alert-success">
{{session("success")}}
</div>
@endif
<div class="container">
    <a class="btn btn-primary" href="{{route('Cate_Creat')}}">Create Category</a>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Details</th>
            <th scope="col">Category Status</th>
            <th scope="col">Action</th>

        </tr>
        
    </thead>
    <tbody>
        
            @foreach($categories as $category)
            <tr>

        <td>{{$category->id}}</td>
        <td>{{$category->category_name}}</td>
        <td>{{$category->category_details}}</td>
        <td>{{$category->category_status}}</td>
       
            
        <td>
            <a class="btn btn-danger" href="{{route('Category_delete',$category->id)}}">Delete</a>
            <a class="btn btn-success" href="{{route('Category_edit',$category->id)}}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
<div class="d-flex justify-content-center"
>{{$categories->links()}}</div>
    @endsection