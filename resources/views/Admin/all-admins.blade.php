@extends('components.admin-layout')

@section('content')
    <h2>Show all admins</h2>
    <table class="table border text-center">
        <thead>
            <th>id</th>
            <th>Full name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($admins as $admin) 

            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->fullname }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->contact }}</td>
                <td>
                    <a href="/admin/edit-admin/{{$admin->id}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="/admin/delete-admin/{{$admin->id}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection