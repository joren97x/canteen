@extends('components.admin-layout')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">View Food</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Food Name</th>
                    <th>Food Price</th>
                    <th>Food Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $food)
                <tr>
                    <td>{{ $food->id }}</td>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->price }}</td>
                    <td>{{ $food->description }}</td>
                    <td>
                        @if($food->is_visible)
                        <span class="badge bg-success">Visible</span>
                        @else
                        <span class="badge bg-danger">Hidden</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="/admin/edit-food/{{$food->id}}" class="btn btn-primary btn-sm">Edit</a>
                            {{-- <a href="/admin/delete-food/{{$food->id}}" class="btn btn-danger btn-sm">Delete</a> --}}
                            <form action="/admin/change-status/{{$food->id}}" method="POST">
                                @csrf
                                @if($food->is_visible)
                                <button type="submit" value="hide" name="status" class="btn btn-warning btn-sm">Hide</button>
                                @else
                                <button type="submit" value="show" name="status" class="btn btn-success btn-sm">Show</button>
                                @endif
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection