@extends('components.admin-layout')

@section('content')
  <form action="/admin/update-food/{{$food->id}}" method="POST" class="border p-2" enctype="multipart/form-data">
    @csrf
    <br style="clear: both">
    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT FOOD </h3>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Food name</span>
      <input type="text" class="form-control" value="{{$food->name}}" aria-label="Username" name="name" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Food price</span>
      <input type="text" class="form-control" value="{{$food->price}}" aria-label="Username" name="price" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Food description</span>
      <input type="text" class="form-control" value="{{$food->description}}" aria-label="Username" name="description" aria-describedby="basic-addon1">
    </div>
    <img style="height: 200px; width: 200px;" class="cover" src="{{ asset('images/uploads/'.$food->image) }}" alt="">
    <div class="form-group">
      <input type="file" class="form-control my-2" value="{{$food->image}}" name="image" placeholder="Your Food Image" >
    </div>

    <div class="form-group">
      <button type="submit" id="submit"  class="btn btn-primary pull-right"> UPDATE FOOD </button>
    </div>
  </form>
@endsection