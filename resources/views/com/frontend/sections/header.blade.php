<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="templateux-navbar">
  <div class="container d-flex justify-content-between">
    <div class="site-menu-toggle js-site-menu-toggle  ml-0"  data-aos="fade" data-toggle="collapse" data-target="#templateux-navbar-nav" aria-controls="templateux-navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class = "d-lg-flex d-block text-center mb-2">
      <a class="navbar-brand m-auto" href="/">
        <img class = "d-none d-lg-block" src="/storage/uploads/{{$logo->filename}}" alt="/storage/uploads/{{$logo->filename}}">
        <img class = "d-block d-lg-none" src="/images/green-logo.png" style="width:42px;" alt="mobile-logo">
      </a>
    @section('partner-with-us')
    @show
    </div>
    <!-- END menu-toggle -->
    <div class = "d-lg-none d-flex">
      <i class="fas fa-search text-black text-dark"></i>
    </div>
    <div class="collapse navbar-collapse" id="templateux-navbar-nav">
      <ul class="navbar-nav ml-auto">
      @section('menu')

        <a class="header-btn text-white ml-lg-2 d-none d-lg-flex" href="/stylist/signup">Partner with Us</a>
        <a class="header-btn text-white ml-lg-2 d-none d-lg-flex" href="/login">Sign In</a>

        <li class="nav-item mb-link"><a class="nav-link" href="/stylist/signup">Partner with Us</a></li>
        @guest
        <li class="nav-item mb-link"><a class="nav-link" href="/login">Sign In</a></li>
        <!-- <li class="nav-item ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0">
            <a class="nav-link" href="/login">
                <span>Sign In</span>
            </a>
        </li> -->
        @endguest
        <!-- <li class="nav-item ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0">
            <a class="nav-link" href="/about">
                <span>About</span>
            </a>
        </li> -->
      @show
      </ul>
    </div>
  </div>
  <!-- <div class = "container d-lg-none d-flex justify-content-around mobile-nav">
    <div>
      <a class = "text-dark">Sign in</a>
    </div>
    <div>
      <a class = "text-dark">Sign Up</a>
    </div>
    <div>
      <a class = "text-dark">Partner with Us</a>
    </div>
  </div> -->
</nav>
<!-- END nav -->
