@extends('backend.master')
@section('content')
<h1>Update Customer Details</h1>


@if (session('success'))
<div class="alert alert-success">
{{session("success")}}
</div>
@endif


<form action="{{route('Customer_submit_edit',$editCustomer->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Customer Id</label>
        <input type="text" class="form-control" value="{{$editCustomer->customer_id}}" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="customer_id">
            @error('customer_id')<div class="alert alert-danger">{{$message}}</div>@enderror

            
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Customer Name</label>
        <input type="text" class="form-control"  value="{{$editCustomer->customer_name}}" id="exampleInputEmail1" aria-describedby="emailHelp"
           name="customer_name">
           @error('customer_name')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Customer Mobile</label>
        <input type="text" class="form-control"  value="{{$editCustomer->customer_mobile}}" id="exampleInputPassword1"
            name="customer_mobile">
            @error('customer_mobile')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Customer Image</label>
        <input type="file" class="form-control"   id="exampleInputEmail1" aria-describedby="emailHelp"
           name="customer_name">
           <img src="{{url('/uploads/customer/'
            )}}" alt="">
           @error('customer_image')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Customer Address</label>
        <input type="text" class="form-control"  value="{{$editCustomer->customer_address}}" id="exampleInputPassword1"
             name="customer_address">
             @error('customer_address')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
