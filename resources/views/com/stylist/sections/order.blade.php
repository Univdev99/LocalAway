@extends('com.stylist.sections.order-template')

@section('css')
    @parent
@endsection

@section('subcontent')
    <div class="col-md-4">
        <div class="border shadow mr-md-3 mb-3 mb-md-0 p-3">
            <p class="text-right">ORDERS</p>
            <hr/>
            <p>My Account</p>
            <hr/>
        </div>
    </div>

    <div class="col-md-8">
        <div class="row">
@foreach ($orders as $order)
            <div class="col-12 border shadow p-5 mb-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <p>Client {{ $loop->iteration }} Capsule</p>
                        <a href="{{ route('com.stylist.shop') }}">Add more items</a>
                    </div>
                    <a>Generate invoice to print</a>
                </div>
@foreach ($order->invoice as $invoice)
                <hr/>
                <div class="d-flex">
                    <div class="invoice-col-no">{{ $loop->iteration }}</div>
                    <img class="invoice-col-img" src="{{ $invoice->product->e_image_urls_og }}" />
                    <div class="invoice-col-name">
                        <p>{{ $invoice->product->product_name }}</p>
                        <p>{{ Str::limit($invoice->product->long_description, 50) }}</p>
                    </div>
                    <div class="invoice-col-price">
                        $ {{ round($invoice->product->e_price_USD, 2) }}
                    </div>
                </div>
@endforeach
                <hr/>
                <div class="d-flex">
                    <div class="invoice-col-no"></div>
                    <div class="invoice-col-img"></div>
                    <div class="invoice-col-name">
                        <p>Taxes</p>
                        <p>Shipping</p>
                    </div>
                    <div class="invoice-col-price">
                        <p>$ _ _ _ _</p>
                        <p>$ _ _ _ _</p>
                    </div>
                </div>
                <hr/>
                <div class="d-flex">
                <div class="invoice-col-no"></div>
                    <div class="invoice-col-img"></div>
                    <p class="invoice-col-name">Total
                    </p>
                    <p class="invoice-col-price">$ _ _ _ _</p>
                </div>

                <div class="d-flex justify-content-between">
                    <p>Name to ship</p>
                    <a href="{{ route('com.stylist.shipping-label') }}?order={{ $order->id }}" target="_blank" class="shipping-label" order="{{ $order->id }}">Print Shipping label</a>
                </div>
                <div>
                    <p>
                        520 Address
                        <br/>City, State
                        <br/>Zip code
                    </p>
                </div>
            </div>
@endforeach
        </div>
        <form action="{{ route('com.stylist.orders.ship') }}" method="post">
            @csrf
            <button class="btn-brown" id="add-capsule">Ship</button>
        </form>
    </div>
@endsection


@section('js')
    <script src="/js/stylist/product-detail.js" type="text/javascript"></script>
@endsection

