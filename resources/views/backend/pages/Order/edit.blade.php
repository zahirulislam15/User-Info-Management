@extends('backend.master')
@section('content')
<h1>Update Your Order Page</h1>
<form action="{{route('Update_order' ,$editOrder->id)}}" method="post" >
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Order id</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
           value="{{$editOrder->order_id}}"  name="order_id">
           @error('order_id')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Order Amount</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        value="{{$editOrder->order_amount}}" name="order_amount">
        @error('order_amount')<div class="alert alert-danger">{{$message}}</div>@enderror
        
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Order Date</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
        value="{{$editOrder->order_date}}" name="order_date">
        @error('order_date')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Order Details</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
        value="{{$editOrder->order_details}}"name="order_details">
        @error('order_details')<div class="alert alert-danger">{{$message}}</div>@enderror

    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
