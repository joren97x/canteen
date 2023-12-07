@extends('components.admin-layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">ADD NEW FOOD</h3>
        </div>
        <div class="card-body">
          <form action="/add-food" method="POST" class="border p-4" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label for="foodName" class="form-label">Food Name</label>
              <input type="text" class="form-control" id="foodName" name="name">
            </div>

            <div class="mb-3">
              <label for="foodPrice" class="form-label">Food Price</label>
              <input type="text" class="form-control" id="foodPrice" name="price">
            </div>

            <div class="mb-3">
              <label for="foodDescription" class="form-label">Food Description</label>
              <textarea class="form-control" id="foodDescription" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label for="foodImage" class="form-label">Food Image</label>
              <input type="file" class="form-control" id="foodImage" name="image">
            </div>

            <div class="text-center">
              <button type="submit" id="submit" class="btn btn-primary">ADD FOOD</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection