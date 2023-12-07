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
                <th>Total Price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order }}</td>
                <td>
                    <ul>
                        {{-- @foreach($order->items as $item)
                        <li>{{ $item->food_name }} - Quantity: {{ $item->quantity }}</li>
                        @endforeach --}}
                    </ul>
                </td>
                <td>{{ $order->total_price }}</td>
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