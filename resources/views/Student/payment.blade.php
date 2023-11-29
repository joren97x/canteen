@extends('components.layout')
 
@section('content')

    <div class="container">
        <div class="bg-secondary p-5">
            <h1>Choose your payment option.</h1>
        </div>
        <div class="container text-center p-4">
            <h2>Grand total: ₱{{$total}}</h2>
            <p class="mb-5">including all service charges</p>
            
        </div>
        <div class="row">
            <div class="col-2">
                <a href="/student/cart">
                    <button class="btn btn-warning">Go back to cart</button>
                </a>
            </div>
            <div class="col-1">
                
                <form action="/student/confirm-payment" method="POST">
                    @csrf
                    <button class="btn btn-success" type="submit"> Pay</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection