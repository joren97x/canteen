@extends('components.admin-layout')

@section('content')
  <form action="/add-food" method="POST" class="border p-2" enctype="multipart/form-data">
    @csrf
    <br style="clear: both">
    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW FOOD </h3>

    <div class="form-group">
      <input type="text" class="form-control my-2" name="name" placeholder="name">
    </div>

    <div class="form-group">
      <input class="form-control my-2" type="number" name="price" placeholder="price">
    </div>

    <div class="form-group">
      <input type="text" class="form-control my-2" name="description" placeholder="description">
    </div>

    <div class="form-group">
      <input type="file" class="form-control my-2"  name="image" placeholder="Your Food Image">
    </div>

    <div class="form-group">
      <button type="submit" id="submit"  class="btn btn-primary pull-right"> ADD FOOD </button>
    </div>
  </form>
@endsection