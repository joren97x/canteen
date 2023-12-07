@extends('components.admin-layout')

@section('content')
<div class="container">
    <h2 class="text-center">Sales Report</h2>
    <form method="GET" action="/admin/sales-report">
        @csrf
        <div class="form-group row">
            <label for="start_date" class="col-md-2 col-form-label text-md-right">Start Date:</label>
            <div class="col-md-4">
                <input id="start_date" type="date" class="form-control" name="start_date" >
            </div>

            <label for="end_date" class="col-md-2 col-form-label text-md-right">End Date:</label>
            <div class="col-md-4">
                <input id="end_date" type="date" class="form-control" name="end_date" >
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary btn-block">
                    Generate Report
                </button>
            </div>
        </div>
    </form>

    @if(count($orders) > 1) 
    <table class="table table-bordered table-hover text-center">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Food Name</th>
                <th>Student Name</th>
                <th>Quantity</th>
                <th>Total Price</th>
                {{-- <th>Actions</th> --}}
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
                {{-- <td>
                    <button class="btn btn-danger btn-sm">Complete</button>
                </td> --}}
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-end">Total Sales</td>
                <td>{{ $total }}</td>
            </tr>
        </tbody>
    </table>
    @endif    

</div>
@endsection