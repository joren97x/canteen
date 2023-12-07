@extends('components.admin-layout')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Pending Orders</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Food Name</th>
                    <th>Student Name</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->food->name }}</td>
                    <td>{{ $order->student->fullname }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->quantity * $order->food->price }}</td>
                    <td>{{ $order->status }}</td>
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
    </div>
</div>
@endsection