@extends('components.layout')


@section('content')
<div class="container">
    <h2 class="text-center">Order History</h2>

    @if(count($orders) > 0)
    <table class="table border text-center">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Items</th>
                <th>Price</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->food->name }}</td>
                <td>{{ $order->food->price }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->created_at->format('F j, Y \a\t h:i A') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No orders found.</p>
    @endif
</div>
@endsection