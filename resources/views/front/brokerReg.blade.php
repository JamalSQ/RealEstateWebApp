@include('front.includes.header')
@include('front.includes.navbar_front')
<div class="card shadow-lg rounded-3">
  <div class="card-body">
    <h1 class="text-center mb-4">Broker Account Registeration</h1>
    <form action="{{ url('front/brokerInsert') }}" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="email_input">Email</label>
          <input type="email" class="form-control" name="b_email" id="email" value="{{ old('b_email') }}">
          @error('b_email')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-4">
          <label for="b_password_input">Pass</label>
          <input type="password" class="form-control" name="b_pass" id="inputAddress" value="{{ old('b_pass') }}">
          @error('b_pass')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-4">
          <label for="inputEmail4">Company Name</label>
          <input type="text" class="form-control" name="bc_name" id="inputEmail4" value="{{ old('bc_name') }}">
          @error('bc_name')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="b_name_input">Name</label>
          <input type="text" class="form-control" id="broker_name" name="b_name" value="{{ old('b_name') }}">
          @error('b_name')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-4">
          <label for="inputPassword4">Ser Name</label>
          <input type="text" class="form-control" name="b_sname" id="inputPassword4" value="{{ old('b_sname') }}">
          @error('b_sname')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-4">
          <label for="city_input">City</label>
          <input type="text" class="form-control" name="b_city" id="cityinput" value="{{ old('b_city') }}">
          @error('b_city')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="number_input">Company Number</label>
          <input type="text" class="form-control" name="bc_number" id="bc_number" value="{{ old('bc_number') }}">
          @error('bc_number')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-3">
          <label for="phone_input">Phone No</label>
          <input type="text" class="form-control" name="b_phoneno" id="phono_no" value="{{ old('b_phoneno') }}">
          @error('b_phoneno')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-3">
          <label for="is_member_input">Is Member Of Fmi</label>
          <input type="text" class="form-control" id="is_member" name="is_member_of_fmi" value="{{ old('is_member_of_fmi') }}">
          @error('is_member_of_fmi')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-3">
          <label for="working_area_input">Working Area</label>
          <input type="text" class="form-control" id="working_area" name="b_working_area" value="{{ old('b_working_area') }}">
          @error('b_working_area')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="customer_area_input">Customer Area</label>
          <input type="text" class="form-control" name="b_customer_area" id="customer_area" value="{{ old('b_customer_area') }}">
          @error('b_customer_area')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-6">
          <label for="area_of_house_input">Area Of House</label>
          <input type="text" class="form-control" id="house_area" name="area_of_house" value="{{ old('area_of_house') }}">
          @error('area_of_house')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="row">
        <button type="submit" class="btn btn-primary btn-block col-md-2 ml-3">Sign In</button>
        <small class="col-md-6 mt-3">Already have an account? <a href="{{ asset('brokerlog') }}"> Login</a></small>
      </div>
    </form>

    <!-- toast message -->
    <div id="toast-container"></div>
    <!-- /.col -->
    @if (session()->has('success'))
    <script>
      window.onload = function() {
        showToast('{{ session("success") }}', 'success');
      };
    </script>
    @endif

    @if (session()->has('error'))
    <script>
      window.onload = function() {
        showToast('{{ session("error") }}', 'error');
      };
    </script>
    @endif
    <!-- /.card-body -->
  </div>
  @include('front.includes.footer')