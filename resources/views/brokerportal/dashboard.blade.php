@extends('brokerportal.app')
@section('page_title','Dashboard')
@section('page_main_heading','Dashboard Overview')
@section('dashboard_selected','active')
@section('container')
<main class="content px-3 py-2">
  <div class="container-fluid">
    <div class="mb-3">
    </div>
    <div class="row">
      <div class="col-12 col-md-6 d-flex">
        <div class="card flex-fill border-0 illustration">
          <div class="card-body p-0 d-flex flex-fill">
            <div class="row g-0 w-100">
              <div class="col-12">
                <div class="p-3 m-1">
                  <h4>Welcome Umer</h4>
                  <p class="mb-0">Welcome to your dashboard! Here, you can track all your active listings, offers, and property performance at a glance. Stay up-to-date with the latest activity and manage your properties with ease.</p>
                </div>
              </div>
              <!-- <div class="col-6 align-self-end text-end">
                <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                  alt="">
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- Notifications -->
      <div class="card col-md-6 mb-4">
        <div class="card-header">Notifications</div>
        <div class="card-body">
          <ul>
            <li>
              <strong>Message from Buyer:</strong> "Is the property still
              available?"
            </li>
            <li>
              <strong>Offer Expiring Soon:</strong> Offer for Property 1
              expires in 2 days
            </li>
            <li>
              <strong>Listing Status Updated:</strong> Property 2 is now
              Under Review
            </li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="row d-flex justify-content-around">
          <!-- Summary of Active Listings -->
          <div class="card col-md-4 mx-2 ">
            <div class="card-header">Active Listings Summary</div>
            <div class="card-body">
              <p>You have <strong>5 active listings</strong>.</p>
              <ul>
                <li>
                  Property 1: <span class="badge bg-success">Published</span>
                </li>
                <li>
                  Property 2:
                  <span class="badge bg-warning">Under Review</span>
                </li>
                <li>
                  Property 3: <span class="badge bg-success">Published</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Latest Activity -->
          <div class="card col-md-3 mx-2">
            <div class="card-header">Latest Activity</div>
            <div class="card-body">
              <ul>
                <li><strong>New Offer</strong> for Property 1: $350,000</li>
                <li><strong>New Inquiry</strong> for Property 2</li>
                <li><strong>Property 3</strong> received 100 views today</li>
              </ul>
            </div>
          </div>

          <!-- Performance Stats -->
          <div class="card col-md-4">
            <div class="card-header">Performance Stats</div>
            <div class="card-body">
              <p><strong>Total Views:</strong> 2500</p>
              <p><strong>Total Inquiries:</strong> 50</p>
              <p><strong>Average Time on Page:</strong> 3 minutes</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>
<a href="#" class="theme-toggle">
  <i class="fa-solid fa-moon"></i>
  <i class="fa-solid fa-sun"></i>
</a>
<!-- /.content-wrapper -->
@endsection