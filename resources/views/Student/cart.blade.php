@extends('components.layout')

@section('content')
    <div class="container">
        <div class="bg-secondary p-5">
            <h1>You shopping cart!</h1>
            <h4>Looks tasty! sana all</h4>
        </div>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Food name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price details</th>
                  <th scope="col">Order total</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                @if (count($orders) <= 0)
                    <tr>
                        <td colspan="8" class="text-center p-5"> <h5>No foods found...</h5> <td>
                    </tr>
                @endif
                
                @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order['id'] }}</th>
                    <td>{{ $order->food['name'] }}</td>
                    <td>{{ $order['quantity'] }} </td>
                    <td> ₱{{ $order->food['price'] }} </td>
                    <td> ₱{{ ((int)$order->food['price']) * $order['quantity'] }} </td>
                    <td> <button class="btn btn-danger btn-sm">Remove</button> </td>
                  </tr>
                @endforeach
                <tr>
                    <th scope="row" colspan="5" class="text-end">Total</th>
                    <td>₱{{ $total }}</td>
                </tr>
              </tbody>
          </table>
          <div class="row">
            <div class="col-10">
                <button class="btn btn-danger btn-sm">Empty cart</button>
                <a href="/student/food-zone">
                    <button class="btn btn-warning btn-sm">Continue shopping</button>
                </a>
            </div>
            <div class="col-2">
                <form action="/student/payment" method="post">
                    @csrf
                    <input type="hidden" name="total" value="{{$total}}">
                    <button class=" ms-5 btn btn-success btn-sm" type="submit">Check out</button>
                </form>
            </div>
          </div>
    </div>
@endsection