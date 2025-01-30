@include('front.includes.header')
  <div class="card shadow-lg rounded-3">
    <div class="card-body">
    <h1 class="text-center mb-4">Customer Account Registeration</h1>
  <form action="{{url('front/customerInsert')}}" method="POST" class="p-3">
      @csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name" id="inputEmail4">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="pass" id="inputPassword4">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">surname</label>
      <input type="text" class="form-control" name="surname" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="form-group col-md-3">
    <label for="inputAddress">Phone No</label>
    <input type="text" class="form-control" name="phoneno" id="inputAddress">
  </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">currentliving</label>
      <input type="text" class="form-control" name="currentliving" id="inputPassword4">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Budget</label>
      <input type="text" class="form-control" name="budget" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
      <label for="inputPassword4">confirmCL</label>
      <input type="text" class="form-control" name="confirmCL" id="inputPassword4">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Adults</label>
      <input type="text" class="form-control" name="adults" id="inputEmail4">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">total_child</label>
      <input type="text" class="form-control" id="inputPassword4" name="total_child">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Address</label>
      <input type="text" class="form-control" id="inputPassword4" name="adress">
    </div>
  </div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">city_where_buy_house</label>
    <input type="text" class="form-control" name="city_where_buy_house" id="inputAddress">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">area_of_house</label>
    <input type="text" class="form-control" id="inputAddress2"  name="area_of_house">
  </div>
</div><div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">new_house_move_time</label>
    <input type="text" class="form-control" name="new_house_move_time" id="inputAddress">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">want_help_from_broker</label>
    <input type="text" class="form-control" name="want_help_from_broker" id="inputAddress2">
  </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-2">
    <label for="inputAddress2">Is garage</label>
      <select name="is_garage" id="">
        <option value="1">yes</option>
        <option value="0">no</option>
      </select>
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress2">is_seaview</label>
      <select name="is_seaview" id="">
        <option value="1">yes</option>
        <option value="0">no</option>
      </select>
    </div>
    <div class="form-group col-md-2">
    <label for="inputAddress2">is_renovated</label>
      <select name="is_renovated" id="">
        <option value="1">yes</option>
        <option value="0">no</option>
      </select>
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress2">More Info</label>
    <input type="text" class="form-control" name="more_info" id="inputAddress2">
  </div>
  </div>
    <div class="row">
    <button type="submit" class="btn btn-primary btn-block col-md-2 ml-3">Sign In</button>
    <small class="col-md-6 mt-3">Already have an account? <a href="{{asset('customerlog')}}"> Login</a></small>
    </div>
    <!-- /.col -->
    @if (session()->has('error'))
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show mt-3">
        {{session('error')}}
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
