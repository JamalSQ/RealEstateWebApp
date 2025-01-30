@include('front.includes.header')
@include('front.includes.navbar_front')
  <div class="card shadow-lg rounded-3">
    <div class="card-body">
    <h1 class="text-center mb-4">Broker Account Registeration</h1>
  <form action="{{url('front/brokerInsert')}}" method="POST">
      @csrf
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="email_input">Email</label>
      <input type="email" class="form-control" name="b_email" id="email">
    </div>
  <div class="form-group col-md-4">
    <label for="b_password_input">Pass</label>
    <input type="password" class="form-control" name="b_pass" id="inputAddress">
  </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Company Name</label>
      <input type="text" class="form-control" name="bc_name" id="inputEmail4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="b_name_input">Name</label>
      <input type="text" class="form-control" id="broker_name" name="b_name" >
    </div>
    
    <div class="form-group col-md-4">
      <label for="inputPassword4">Ser Name</label>
      <input type="text" class="form-control" name="b_sname" id="inputPassword4">
    </div>
    
    <div class="form-group col-md-4">
      <label for="city_input">City</label>
      <input type="text" class="form-control" name="b_city" id="cityinput">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
      <label for="number_input">Company Number</label>
      <input type="text" class="form-control" name="bc_number" id="bc_number">
    </div>
    <div class="form-group col-md-3">
      <label for="phone_input">Phone No</label>
      <input type="text" class="form-control" name="b_phoneno" id="phono_no">
    </div>
    <div class="form-group col-md-3">
      <label for="is_member_input">Is Member Of Fmi</label>
      <input type="text" class="form-control" id="is_member" name="is_member_of_fmi">
    </div>
    <div class="form-group col-md-3">
      <label for="working_area_input">Working Area</label>
      <input type="text" class="form-control" id="working_area" name="b_working_area">
    </div>
  </div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="customer_area_input">Customer Area</label>
    <input type="text" class="form-control" name="b_customer_area" id="customer_area">
  </div>
  <div class="form-group col-md-6">
    <label for="area_of_house_input">Area Of House</label>
    <input type="text" class="form-control" id="house_area"  name="area_of_house">
  </div>
</div>
    <div class="row">
    <button type="submit" class="btn btn-primary btn-block col-md-2 ml-3">Sign In</button>
    <small class="col-md-6 mt-3">Already have an account? <a href="{{asset('brokerlog')}}"> Login</a></small>
    </div>
    <!-- /.col -->
    @if (session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show mt-3">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>  
    @endif 
</form>
    <!-- /.card-body -->
  </div>
  @include('front.includes.footer')
