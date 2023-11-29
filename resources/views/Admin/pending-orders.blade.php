@extends('components.admin-layout')

@section('content')
    <h2 class="text-center">Pending orders</h2>
    <table class="table border text-center">
        <thead>
            <th>id</th>
            <th>Food name</th>
            <th>Student name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Status</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($orders as $order) 

            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->food->name }}</td>
                <td>{{ $order->student->fullname }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->quantity * $order->food->price }}</td>
                <td>{{ $order->status}}</td>
                <td>
                    <form action="/admin/complete-order/{{ $order->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Complete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection