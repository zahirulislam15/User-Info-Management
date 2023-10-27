@extends('backend.master')
@section('content')
<h1>Order list Page</h1>

<div class="container">
    <a class="btn btn-primary" href="{{route('orderCreate')}}">create order</a>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Order Id</th>
            <th scope="col">Order Amount</th>
            <th scope="col">Order Date</th>
            <th scope="col">Order Details</th>
            <th scope="col">Action</th>
        </tr>
        
    </thead>
    <tbody>
        <!-- for view list -->
        @foreach($orderall as $order)
        <tr>
             <th>{{$order->id}}</th>
             <td>{{$order->order_id}}</td>
             <td>{{$order->order_amount}}</td>
             <td>{{$order->order_date}}</td>
             <td>{{$order->order_details}}</td>

             <td>
            <a class="btn btn-info" href="{{route('edit_order',$order->id)}}">Edit</a>
             <a class="btn btn-danger" href="{{route('delete_order',$order->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
    @endsection
