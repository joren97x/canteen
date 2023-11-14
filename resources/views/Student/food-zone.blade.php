@extends('components.layout')
 
@section('content')
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="height: 360px;">
            <div class="carousel-item active" data-bs-interval="1000">
                <img src="https://images.summitmedia-digital.com/spotph/images/2022/11/25/lumpia-1669370984.jpg" class="d-block img-fluid img-thumbnail w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="https://images.summitmedia-digital.com/spotph/images/2021/10/15/003-pino-restaurant-kare-kareng-bagnet-1634288661.jpg" class="d-block img-fluid img-thumbnail w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="https://images.summitmedia-digital.com/spotph/images/2022/11/28/filo-1669601381.jpg" class="d-block img-fluid img-thumbnail w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1 class="text-center">Welcome To Canteen Food Ordering</h1>
        <div class="row">
            @foreach($foods as $food)
                <div class="col-3 p-3">
                    <div class="card">
                        <img src="https://www.foodandwine.com/thmb/_hz1-1jxHmNJxNLZxIjlOs2QQ3E=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Ultimate-Veggie-Burgers-FT-Recipe-0821-5d7532c53a924a7298d2175cf1d4219f.jpg" class="card-img-top" alt="...">
                    <form action="/student/add-to-cart" method="POST">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">{{ $food->name }}</h5>
                            <p class="card-text">{{ $food->description }}</p>
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <input type="hidden" name="food_id" value="{{$food->id}}">
                            <label for="quantity" class="form-label">Quantity: </label>
                            <input id="quantity" type="number" name="quantity" class="form-control" value="1">
                            <button type="submit" class="btn btn-success mt-2">Add to cart</button>
                        </div>
                    </form>
                    </div>
                </div>
            @endforeach
        </div>

@endsection