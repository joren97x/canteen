@extends('components.admin-layout')

@section('content')
    <h2 class="text-center">Show all admins</h2>
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
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection