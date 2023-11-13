@extends('components.layout')

@section('content')
    <div class="container">
        <h1 class="text-center">STUDENT Sign up page</h1>
        <form class="mb-5" method="POST" action="/sign-up">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full name</label>
                <input class="form-control" id="exampleInputEmail1" value="{{ old('fullname') }}" name="fullname" aria-describedby="emailHelp">
                @error('fullname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Username</label>
              <input class="form-control" id="exampleInputPassword1" value="{{ old('username') }}" name="username">
              @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input class="form-control" id="exampleInputPassword1" value="{{ old('email') }}" name="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contact</label>
                <input class="form-control" id="exampleInputPassword1" value="{{ old('contact') }}" name="contact">
                @error('contact')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input class="form-control" id="exampleInputPassword1" value="{{ old('address') }}" name="address">
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" value="{{ old('password') }}" name="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Sign-up</button>
          </form>
    </div>
@endsection

<style>
    .alert {
        margin-top: 10px;
    }
</style>