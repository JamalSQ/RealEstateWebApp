@include('admin.includes.header')
<div class="login-box container d-flex justify-content-center align-items-center" style="height: 100vh;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" style=" width:50%;">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>House</b>JSQ</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg text-center">Admin Login</p>
      <form action="{{Route('admin.auth')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
        <div class="col-4">
          <button type="submit" class="btn btn-primary m-0">Sign In</button>
        </div>
      </form>
      <!-- /.card-body -->
    </div>
    <div id="toast-container"></div>
    @if (session()->has('error'))
    <script>
      window.onload = function() {
        showToast('{{ session("error") }}', 'error');
      };
    </script>
    @endif

    <!-- /.card -->
  </div>
  @include('admin.includes.footer')