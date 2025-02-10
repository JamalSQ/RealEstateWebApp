<!-- Footer Start -->
<footer id="footer" class="bg-dark text-white py-5">
  <div class="container">
    <div class="row text-left">
      <!-- Logo Section -->
      <div class="col-md-3 mb-4">
        <div class="d-flex align-items-center">
          <img src="{{asset('image/logo/logo2.png')}}" alt="Logo" class="img-fluid">
        </div>
        <hr>
        <p>Your trusted real estate partner, helping you find the perfect home with ease and confidence. We offer top-notch services, verified listings, and expert guidance to make your property journey seamless.</p>
      </div>

      <!-- Quick Access Links Section -->
      <div class="col-md-3 mb-4">
        <h5>Quick Access</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Home</a></li>
          <li><a href="#" class="text-white">Properties</a></li>
          <li><a href="#" class="text-white">About Us</a></li>
          <li><a href="#" class="text-white">Contact</a></li>
          <li><a href="#" class="text-white">Blog</a></li>
        </ul>
        <hr>
        <h5>Helpful Resources</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Mortgage Calculator</a></li>
          <li><a href="#" class="text-white">Buying Guide</a></li>
          <li><a href="#" class="text-white">Selling Tips</a></li>
          <li><a href="#" class="text-white">Neighborhood Insights</a></li>
          <li><a href="#" class="text-white">FAQs</a></li>
        </ul>
      </div>

      <!-- Popular Properties Section -->
      <div class="col-md-3 mb-4">
        <h5>Popular Properties</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Luxury Villa in Miami</a></li>
          <li><a href="#" class="text-white">Downtown Apartments</a></li>
          <li><a href="#" class="text-white">Beachfront Condo</a></li>
          <li><a href="#" class="text-white">Modern Penthouse</a></li>
          <li><a href="#" class="text-white">Cozy Cottage</a></li>
        </ul>
        <hr>
        <h5>More Info</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">FAQs</a></li>
          <li><a href="#" class="text-white">Terms & Conditions</a></li>
          <li><a href="#" class="text-white">Privacy Policy</a></li>
          <li><a href="#" class="text-white">Customer Support</a></li>
          <li><a href="#" class="text-white">Career Opportunities</a></li>
        </ul>
      </div>

      <!-- Contact Information Section -->
      <div class="col-md-3 mb-4">
        <h5>Contact Information</h5>
        <ul class="list-unstyled contact-list-footer">
          <li><i class="fa fa-map-marker-alt me-2"></i> JSQ Real Estate Developer</li>
          <li><i class="fa fa-phone-alt me-2"></i> +1 234 56789</li>
          <li><i class="fa fa-envelope me-2"></i> jsqphpdeveloper@gmail.com</li>
        </ul>
        <hr>
        <h5>Follow Us</h5>
        <div class="social-links">
          <i class="fa-brands fa-twitter me-2"></i>
          <i class="fa-brands fa-facebook me-2"></i>
          <i class="fa-brands fa-instagram me-2"></i>
          <i class="fa-brands fa-youtube me-2"></i>
        </div>
      </div>
    </div>
    <!-- Credit Section -->
    <div class="row mt-4">
      <div class="col-12 text-center">
        <div class="credit">
          <p>Designed By <a href="#" class="text-white">Jamal Siddique Qadri</a></p>
        </div>
        <div class="copyright">
          <p>&copy; Copyright JSQ. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Footer End -->
</body>
<!-- <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Bootstrap JS Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>


<!-- charts js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('js/custome.js')}}"></script>
<script src="{{asset('js/common.js')}}"></script>

<script>
  // Sample data for the chart
  const searchData = {
    labels: [
      "New York",
      "Los Angeles",
      "Chicago",
      "Houston",
      "Phoenix",
      "Philadelphia",
      "San Antonio"
    ], // X-axis: Time (Months)
    datasets: [{
      label: "Search Trends (in searches)", // Y-axis: Number of searches
      data: [150, 200, 250, 300, 400, 450, 500], // Example search data
      backgroundColor: "rgba(75, 192, 192, 0.6)", // Bar color
      borderColor: "rgba(75, 192, 192, 1)", // Bar border color
      borderWidth: 1,
      hoverBackgroundColor: "rgba(75, 192, 192, 0.8)", // Hover effect
      hoverBorderColor: "rgba(75, 192, 192, 1)", // Hover effect border color
    }, ],
  };

  const config = {
    type: "bar", // Bar chart type
    data: searchData,
    options: {
      responsive: true,
      indexAxis: 'y',
      scales: {
        x: {
          title: {
            display: true,
            text: "Time (Months)", // X-axis label
          },
        },
        y: {
          title: {
            display: true,
            text: "Searches", // Y-axis label
          },
          beginAtZero: true, // Start Y-axis from 0
          ticks: {
            stepSize: 50, // Set step size for Y-axis ticks
          },
        },
      },
      plugins: {
        tooltip: {
          enabled: true, // Enable tooltips on hover
          callbacks: {
            label: function(tooltipItem) {
              return `${tooltipItem.raw} Searches`; // Display the search count on hover
            },
          },
        },
      },
    },
  };

  // Create the chart
  const ctx = document.getElementById("searchTrendsChart").getContext("2d");
  const searchTrendsChart = new Chart(ctx, config);
</script>


</html>