@extends('components.admin-layout')

@section('content')
  <form action="/add-food" method="POST" class="border p-2">
    @csrf
    <br style="clear: both">
    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW FOOD ITEM HERE </h3>

    <div class="form-group">
      <input type="text" class="form-control my-2" id="name" name="name" placeholder="Your Food name" required="">
    </div>

    <div class="form-group">
      <input type="text" class="form-control my-2" id="price" name="price" placeholder="Your Food Price (INR)" required="">
    </div>

    <div class="form-group">
      <input type="text" class="form-control my-2" id="description" name="description" placeholder="Your Food Description" required="">
    </div>

    <div class="form-group">
      <input type="text" class="form-control my-2" id="images_path" name="image" placeholder="Your Food Image Path [images/<filename>.<extention>]" required="">
    </div>

    <div class="form-group">
      <button type="submit" id="submit"  class="btn btn-primary pull-right"> ADD FOOD </button>
    </div>
  </form>
@endsection