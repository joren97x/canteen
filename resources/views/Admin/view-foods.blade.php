@extends('components.admin-layout')

@section('content')
    <h2 class="text-center">View food </h2>
    <table class="table border text-center">
        <thead>
            <th>id</th>
            <th>Food name</th>
            <th>Food price</th>
            <th>Food description</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($foods as $food) 

            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->name }}</td>
                <td>{{ $food->price }}</td>
                <td>{{ $food->description }}</td>
                <td>
                    <a href="/admin/edit-food/{{$food->id}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="/admin/delete-food/{{$food->id}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection