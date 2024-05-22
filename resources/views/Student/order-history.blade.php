@extends('components.layout')


@section('content')
<div class="container">
    <h2 class="text-center">Order History</h2>

    @if(count($orders) > 0)
    <table class="table border text-center">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Status</th>
                <th>Total Price</th>
                <th>Ordered at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->total_price }}</td>
                <td>{{ $order->created_at->format('F j, Y \a\t h:i A') }}</td>
                <td>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$order->id}}">View</button>
                    <div class="modal fade" id="exampleModal{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @foreach ($order->orderedFoods as $orderedFood)
                                <div class="card" style="width: 100%;">
                                    <img src="{{asset('images/uploads/'.$orderedFood->food->image)}}" style="height: 69px; width: 69px;" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title"> {{$orderedFood->food->name}} </h5>
                                      <p class="card-text"> Quantity: {{$orderedFood->quantity}} </p>
                                    </div>
                                  </div>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No orders found.</p>
    @endif
</div>
@endsection