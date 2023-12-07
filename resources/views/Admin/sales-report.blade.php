@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Sales Report</h2>
    <form method="GET" action="{{ route('generate-report') }}">
        <div class="form-group row">
            <label for="start_date" class="col-md-2 col-form-label text-md-right">Start Date:</label>
            <div class="col-md-4">
                <input id="start_date" type="date" class="form-control" name="start_date" required>
            </div>

            <label for="end_date" class="col-md-2 col-form-label text-md-right">End Date:</label>
            <div class="col-md-4">
                <input id="end_date" type="date" class="form-control" name="end_date" required>
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

    @if(isset($salesData))
    <h3 class="mt-4 mb-2">Sales Report from {{ $start_date }} to {{ $end_date }}</h3>
    <table class="table border text-center">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Total Sales</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salesData as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->total_sales }}</td>
                <td>{{ $data->created_at->format('F j, Y \a\t h:i A') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection