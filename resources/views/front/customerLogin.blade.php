@include('front.includes.header')
<div class="container bg-gradient-dark text-white rounded shadow-lg" style="background: linear-gradient(to right, #000, #cfb8b847); ">
  <div class="row justify-content-center align-items-center mt-2" style="max-width: 100%; height: auto;">
    <div class="col-md-6 d-flex justify-content-center">
        <img src="{{asset('image/house_veertical.jpg')}}" class="img-fluid rounded-3 shadow-lg m-3  " alt="Blue Color House"/>
    </div>
  <div class="col-md-6">
  <h1 class="text-center text-white mb-4">Customer Login</h1>
  <span class="text-white">Does not have an account? 
    <a href="{{url('front/customerReg')}}" class="text-white">Register</a>
  </span>

  <form action="{{url('customerlog/auth')}}" method="POST" class="mt-5">
    @csrf
    <!-- Email Input -->
    <div class="input-group mb-4">
      <input type="email" class="form-control bg-dark text-white border-white py-3 px-4" placeholder="Email" name="email">
      <div class="input-group-append">
        <div class="input-group-text bg-dark text-white border-white">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
    <!-- Password Input -->
    <div class="input-group mb-4">
      <input type="password" class="form-control bg-dark text-white border-white py-3 px-4" placeholder="Password" name="password">
      <div class="input-group-append">
        <div class="input-group-text bg-dark text-white border-white">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>

    <!-- Terms & Conditions -->
    <div class="mb-4 text-white">
      <input type="checkbox" name="TAC" id="TAC">
      <span>i agree to the </span>
      <a href="#" class="text-white">Terms & Conditions</a>
    </div>

    <!-- Submit Button -->
    <div class="col-12">
      <button type="submit" class="btn btn-light btn-block py-3">Sign In</button>
    </div>

    <!-- Error Message -->
    @if (session()->has('error'))
      <div class="alert alert-danger alert-dismissible fade show mt-3">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif 

  </form>
  <br />
  <h6 class="text-center text-white mb-4">Or Register with</h6>

  <!-- Social Media Buttons -->
  <div class="row">
    <button type="button" name="google" class="btn btn-danger mr-3 col-md-5 ">Google</button>
    <button type="button" name="apple" class="btn btn-dark col-md-5">Apple</button>
  </div>
</div>

  </div>
</div>
@include('front.includes.footer')
