<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link @if(url()->current() == route('com.customer.shop')) active @endif" href="{{ route('com.customer.shop') }}">SHOP</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if(url()->current() == route('com.customer.order')) active @endif" href="{{ route('com.customer.order') }}" >ORDERS</a>
  </li>
</ul>
