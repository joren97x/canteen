@extends('components.admin-layout')

@section('content')
    <h2>Show all users</h2>
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
                    <a href="/admin/edit-student/{{$student->id}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="/admin/delete-student/{{$student->id}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection