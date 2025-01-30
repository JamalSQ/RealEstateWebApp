<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning pl-4" id="first_navbar">
  <a class="navbar-brand" href="{{url('/')}}">ELX House </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
  if (session()->has('BROKER_LOGIN')) {
  ?>
    <ul class="navbar-nav mr-auto logreg">
      <li class="nav-item logreg-item">
        <a class="nav-link" href="{{url('front/Regcustomer')}}">See Customers List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('front/Regbroker')}}">See Brokers List</a>
      </li>
    </ul>
  <?php } ?>
  <?php
  if (session()->has('CUSTOMER_LOGIN')) {
  ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('front/Regbroker')}}">See Brokers List</a>
      </li>
    </ul>
  <?php } ?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto"> <!-- Add ml-auto here to align items to the right -->
      <?php
      if (session()->has('CUSTOMER_LOGIN')) {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="{{url('customer/logout')}}">Logout</a>
        </li>
      <?php } ?>
      <?php
      if (session()->has('BROKER_LOGIN')) {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="{{url('broker/logout')}}">Logout</a>
        </li>
      <?php }
      if (!session()->has('BROKER_LOGIN') && !session()->has('CUSTOMER_LOGIN')) { // Only show these options when both are not logged in
      ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <span class="dropdown-item disabled" href="#">Choose one</span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('brokerlog')}}">Broker</a>
            <a class="dropdown-item" href="{{url('customerlog')}}">Customer</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Register
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <span class="dropdown-item disabled" href="#">Choose one</span>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('front/brokerReg')}}">Broker</a>
            <a class="dropdown-item" href="{{url('front/customerReg')}}">Customer</a>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container">
    <!-- <a class="navbar-brand" href="index.html" id="logo"><span>T</span>ravel</a> -->

    <img src="{{asset('image/logo/logo2.png')}}" alt="Logo" class="img-fluid" style="max-width:8%; height:auto; ">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a href="{{url('/')}}" class="nav-link @yield('Home_selected')">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('front/property')}}" class="nav-link @yield('property_selected')">
            Property
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('front/aboutus')}}" class="nav-link @yield('About_selected')">
            About Us
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('front/contactus')}}" class="nav-link @yield('Contactus_selected')">
            Contact Us
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('front/blog')}}" class="nav-link @yield('blog_selected')">
            Blog
          </a>
        </li>
      </ul>
      <form class="d-flex">
        <div class="input-group">
          <input class="form-control" type="text" placeholder=" Search by Price and Location" class="p-3" size="40%">
          <button class="btn btn-warning" type="button">Search</button>
          <button class="btn btn-dark"><a href="{{url('property/Filters')}}" class="nav-link">Filter</a></button>
        </div>
      </form>
    </div>
  </div>
</nav>
<!-- Navbar End -->