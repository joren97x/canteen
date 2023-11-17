@extends('components.admin-layout')

@section('content')
  <form action="/admin/update-food/{{$food->id}}" method="POST" class="border p-2" enctype="multipart/form-data">
    @csrf
    <br style="clear: both">
    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT FOOD </h3>

    <div class="form-group">
      <input type="text" class="form-control my-2" value="{{$food->name}}" name="name" placeholder="Your Food name" >
    </div>

    <div class="form-group">
      <input type="text" class="form-control my-2" value="{{$food->price}}" name="price" placeholder="Your Food Price (INR)" >
    </div>

    <div class="form-group">
      <input type="text" class="form-control my-2" value="{{$food->description}}" name="description" placeholder="Your Food Description" >
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