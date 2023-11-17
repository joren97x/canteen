@extends('components.admin-layout')

@section('content')
  <form action="/admin/delete-food/{{$food->id}}" method="POST" class="border p-2">
    @csrf
    <h1>Delete food item</h1>
    Name: {{$food->name}} <br>
    Price: {{$food->price}}<br>
    Description: {{$food->description}}<br>
    Image: <br>
    <img style="height: 200px; width: 200px;" class="cover" src="{{ asset('images/uploads/'.$food->image) }}" alt="">
    <div class="form-group">
      <button type="submit" id="submit" class="btn btn-danger pull-right"> DELETE FOOD </button>
    </div>
  </form>
@endsection