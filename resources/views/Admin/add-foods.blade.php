@extends('components.admin-layout')

@section('content')
  <form action="/add-food" method="POST" class="border p-2" enctype="multipart/form-data">
    @csrf
    <br style="clear: both">
    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW FOOD </h3>

    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Food name</span>
      <input type="text" class="form-control" name="name" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Food price</span>
      <input type="text" class="form-control" name="price" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Food description</span>
      <input type="text" class="form-control" name="description" aria-describedby="basic-addon1">
    </div>

    <div class="form-group">
      <input type="file" class="form-control my-2"  name="image" placeholder="Your Food Image">
    </div>

    <div class="form-group">
      <button type="submit" id="submit"  class="btn btn-primary pull-right"> ADD FOOD </button>
    </div>
  </form>
@endsection