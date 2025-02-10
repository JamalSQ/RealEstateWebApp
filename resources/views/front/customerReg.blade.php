@include('front.includes.header')
@include('front.includes.navbar_front')
<div class="card shadow-lg rounded-3 mt-3">
  <div class="card-body">
    <h1 class="text-center mb-4">Customer Account Registeration</h1>
    <form action="{{url('front/customerInsert')}}" method="POST" class="p-3">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputEmail4">Name</label>
          <input type="text" class="form-control" name="name" id="inputEmail4" value="{{ old('name') }}">
          @error('name')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" name="pass" id="inputPassword4" value="{{ old('pass') }}">
          @error('pass')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Surname</label>
          <input type="text" class="form-control" name="surname" id="inputPassword4" value="{{ old('surname') }}">
          @error('surname')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ old('email') }}">
          @error('email')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">Phone No</label>
          <input type="number" class="form-control" name="phoneno" id="inputAddress" value="{{ old('phoneno') }}">
          @error('phoneno')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">Current Living</label>
          <input type="text" class="form-control" name="currentliving" id="inputPassword4" value="{{ old('currentliving') }}">
          @error('currentliving')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">Budget</label>
          <input type="number" class="form-control" name="budget" id="inputPassword4" value="{{ old('budget') }}">
          @error('budget')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputPassword4">Confirm CL</label>
          <input type="text" class="form-control" name="confirmCL" id="inputPassword4" value="{{ old('confirmCL') }}">
          @error('confirmCL')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-3">
          <label for="inputEmail4">Adults</label>
          <input type="text" class="form-control" name="adults" id="inputEmail4" value="{{ old('adults') }}">
          @error('adults')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">Total Child</label>
          <input type="text" class="form-control" id="inputPassword4" name="total_child" value="{{ old('total_child') }}">
          @error('total_child')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">Address</label>
          <input type="text" class="form-control" id="inputPassword4" name="adress" value="{{ old('adress') }}">
          @error('adress')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAddress">City Where Buy House</label>
          <input type="text" class="form-control" name="city_where_buy_house" id="inputAddress" value="{{ old('city_where_buy_house') }}">
          @error('city_where_buy_house')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">Area of House</label>
          <input type="text" class="form-control" id="inputAddress2" name="area_of_house" value="{{ old('area_of_house') }}">
          @error('area_of_house')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAddress">New House Move Time</label>
          <input type="date" class="form-control" name="new_house_move_time" id="inputAddress" value="{{ old('new_house_move_time') }}">
          @error('new_house_move_time')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">Want Help From Broker</label>
          <input type="text" class="form-control" name="want_help_from_broker" id="inputAddress2" value="{{ old('want_help_from_broker') }}">
          @error('want_help_from_broker')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="inputAddress2">Is Garage</label>
          <select name="is_garage" id="">
            <option value="1">yes</option>
            <option value="0">no</option>
          </select>
          @error('is_garage')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-2">
          <label for="inputAddress2">Is Seaview</label>
          <select name="is_seaview" id="">
            <option value="1">yes</option>
            <option value="0">no</option>
          </select>
          @error('is_seaview')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-2">
          <label for="inputAddress2">Is Renovated</label>
          <select name="is_renovated" id="">
            <option value="1">yes</option>
            <option value="0">no</option>
          </select>
          @error('is_renovated')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">More Info</label>
          <input type="text" class="form-control" name="more_info" id="inputAddress2" value="{{ old('more_info') }}">
          @error('more_info')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="row">
        <button type="submit" class="btn btn-primary btn-block col-md-2 ml-3">Sign In</button>
        <small class="col-md-6 mt-3">Already have an account? <a href="{{asset('customerlog')}}"> Login</a></small>
      </div>
    </form>

    <!-- toast message -->
    <div id="toast-container"></div>
    <!-- /.col -->
    @if (session()->has('error'))
    <script>
      window.onload = function() {
        showToast('{{ session("error") }}', 'error');
      };
    </script>
    @endif

    @if (session()->has('success'))
    <script>
      window.onload = function() {
        showToast('{{ session("success") }}', 'success');
      };
    </script>
    @endif
    <!-- /.card-body -->
  </div>
  @include('front.includes.footer')