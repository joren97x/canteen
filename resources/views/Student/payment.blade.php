@extends('components.layout')
 
@section('content')

    <div class="container">
        <div class="bg-secondary p-5">
            <h1>Choose your payment option.</h1>
        </div>
        <div class="container text-center p-4">
            <h2>Grand total: ₱{{$total}}</h2>
            <p class="mb-5">including all service charges</p>
            <button class="btn btn-warning">Go back to cart</button>
            <button class="btn btn-success"> Pay online</button>
            <button class="btn btn-success">Cash on delivery</button>
        </div>
    </div>
    
@endsection