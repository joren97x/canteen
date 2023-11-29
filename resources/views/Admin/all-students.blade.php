@extends('components.admin-layout')

@section('content')
    <h2 class="text-center">Show all users</h2>
    <table class="table border text-center">
        <thead>
            <th>id</th>
            <th>Full name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($students as $student) 

            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->fullname }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->contact }}</td>
                <td>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection