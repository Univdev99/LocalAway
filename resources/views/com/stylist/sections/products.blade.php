@if (count($products) > 0)
    @foreach($products as $product)
        <li class="product" data-gtm-wrapper="">
            <div class="shop" data-gtm-id="174452">
                <a class="photo js-gtm-product-click" href="#" style="left: 0px;">
                    <img class="lazy lazyloaded" src="{{ $product->e_image_urls_og }}" alt="Colmar Originals - Charge jacket in beige " title="Colmar Originals - Charge jacket in beige " lazy-done="true">
                </a>
            </div>
            <h2 data-gtm-category="Women/Clothing/Blazers and Jackets/Casual Jackets">
                <a class="js-gtm-product-click" href="#">
                    <span class="brand" data-gtm-brand="{{ $product->brand }}">{{ $product->brand }}</span>
                    <span class="name" data-gtm-name="{{ $product->product_name }}">{{ $product->product_name }} </span>
                </a>
            </h2>
            <a href="#">
                <span class="price">
                    <span class="" data-gtm-price="{{ $product->e_price_USD }}">${{ $product->e_price_USD }}</span>
                </span>
            </a>
        </li>
    @endforeach
@endif
