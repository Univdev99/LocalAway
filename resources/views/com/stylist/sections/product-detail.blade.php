@extends('com.stylist.layout')

@section('css')
    <link href="/css/fine-uploader-new.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/stylist/product-detail.css">
@endsection

@section('content')

<section class="product-detail">
<form method="post" action="{{ route('com.stylist.shop.invoice.create') }}">
    @csrf
    
    <div class="row">
        <div class="col-12 col-md-5 offset-md-1 px-5">
            <img class="lazy lazyloaded w-100 border" src="{{ $product->e_image_urls_og }}" alt="Colmar Originals - Charge jacket in beige " title="Colmar Originals - Charge jacket in beige " lazy-done="true">
        </div>
        <div class="col-12 col-md-5 px-5">
            <input type="hidden" name="product_id" value="{{ $product->id }}" />
            <div>
                <span class="text-black">Sold By:</span>
                <span class="sold-by">{{ $stylist->stylist_name }}</span>
            </div>
            <div class="mt-5">
                <input type="text" value="{{ $product->product_name }}" name="product_name" id="product-name" disabled style="width:100%;"/>
            </div>
            <hr />
            <div class="product-price">
                $<input type="number" value="{{ $product->e_price_USD }}" name="product_price" id="product-price" disabled />
            </div>
            <hr />
            <div>
                <p class="text-black">Color</p>
                <div>
            @foreach ($colors as $color)
                    <input type="radio" class="color" name="color" value="{{ $color }}" style="background-color: {{ $color }};" checked />
            @endforeach
                </div>
            </div>
            <hr />
            <div>
                <p class="text-black">Size</p>
                <div>
            @foreach ($sizes as $size)
                    <label for="size-{{ $size }}" class="size-label">
                        <input type="radio" id="size-{{ $size }}" class="size" name="size" value="{{ $size }}" checked />
                        <span>{{ $size }}</span>
                    </label>
            @endforeach
                </div>
            </div>
            <hr />
            <div>
                <p class="text-black">Quantity</p>
                <div class="d-flex justify-content-between">
                    <input type="number" class="quantity" name="quantity" min="1" value="1" />
                    <button class="btn-brown" type="button" id="add-capsule">Add to Client Capsule</button>
                </div>
            </div>
        </div>
    </div>
    
    @include('com.stylist.sections.order-modal')
</form>
    
    @include('com.stylist.sections.upload')
</section>

@endsection

@section('js')
    <script src="/js/stylist/product-detail.js" type="text/javascript"></script>
@endsection

