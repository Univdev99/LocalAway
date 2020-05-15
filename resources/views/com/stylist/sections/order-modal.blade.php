<div class="modal" tabindex="-1" role="dialog" id="order-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title">Select client order</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Which client order would you like to add to?</p>
@foreach ($orders as $order)
        <label for="order-{{ $order->id }}">
            <input type="radio" name="order_id" id="order-{{ $order->id }}" value="{{ $order->id }}" class="order" checked />
            <div class="order-content p-3">
                <p>{{ $order->name }}</p>
                <p>{{ $order->customer->user->first_name }} {{ $order->customer->user->last_name }}</p>
            </div>
        </label>
@endforeach
      </div>
      <div class="modal-footer">
        <button class="btn-brown">Proceed</button>
        <button type="button" class="btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
