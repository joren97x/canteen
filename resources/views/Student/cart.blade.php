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
                    <td> 
                        <form action="/student/delete-food/{{ $order->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Remove</button>
                        </form>
                    </td>
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
                <form action="/student/clear-cart" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Empty cart</button>
                </form>
                <a href="/student/food-zone">
                    <button class="btn btn-warning btn-sm">Continue shopping</button>
                </a>
            </div>
            <div class="col-2">
                <form id="payment-form" action="/student/confirm-payment" method="post">
                    @csrf
                    <input type="hidden" name="total" value="{{$total}}">
                    <button id="checkout-button" class="ms-5 btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Check out</button>
                </form>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cart</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="response-message"></div>
                            <h4>Total: {{ $total }}</h4>
                        </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
          </div>
    </div>
<script>
    $(document).ready(function() {
        $('#checkout-button').click(function(event) {
            event.preventDefault(); // Prevent the default form submission

            var form = $('#payment-form');
            var url = form.attr('action');
            var data = form.serialize(); // Serialize form data

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                success: function(response) {
                    console.log(response)
                    // Handle the response from the server
                    $('#response-message').html('<div class="alert alert-success text-h5">Please proceed to the counter.</div>');
                },
                error: function(xhr) {
                    console.log(response)
                    // Handle errors
                    $('#response-message').html('<div class="alert alert-danger text-h5">Sorry, something went wrong...</div>');
                }
            });
        });
        
        $('#exampleModal').on('hidden.bs.modal', function () {
            location.reload(); // Refresh the page when the modal is closed
        });
    });
</script>
@endsection