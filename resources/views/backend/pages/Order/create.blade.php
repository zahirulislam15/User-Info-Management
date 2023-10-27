@extends('backend.master')
@section('content')

<h1>Order Page</h1>
<form action="{{route('orderSubmit_create')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Order id</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="order_id">
           @error('order_id')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Order Amount</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your order amount" name="order_amount">
            @error('order_amount')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Order Date</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order date" name="order_date">
            @error('order_date')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Order Details</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your order details" name="order_details">
            @error('order_details')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
