@extends('components.admin-layout')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Pending Orders</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Food Name</th>
                    <th>Student Name</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->food->name }}</td>
                    <td>{{ $order->student->fullname }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->quantity * $order->food->price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        {{-- <form action="/admin/complete-order/{{ $order->id }}" method="POST">
                            @method('PUT')
                            @csrf --}}
                            <button class="btn btn-primary btn-sm" onclick="changeData({{$order}})" type="submit" data-bs-toggle="modal" data-bs-target="#updateStatusModal">Update status</button>
                        {{-- </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="updateStatusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="/admin/update-order-status" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="order_id" id="form_order_id">
              <select name="status" class="form-select" id="">
                <option value="Processing">Processing</option>
                <option value="Ready to pick up">Ready to pick up</option>
                <option value="Completed">Completed</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </form>
    </div>
  </div>
@endsection

<script>

    function changeData(order) {
        console.log(order)
        document.getElementById('form_order_id').value = order.id
    }

</script>