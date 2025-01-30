@extends('front.index')
@section('page_title','Home Page')
@section('Home_selected','active')
@section('content')
<!-- main banner Section Start -->
<div class="home" style="
  background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('{{ asset('image/blue_color_house.jpeg') }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 100%;
  height: 100vh;
">
    <div class="content">
        <h5>Discover the best homes in</h5>
        <h1><span class="changecontent"></span></h1>
        <p>Your perfect place is just a click away!</p>
        <a href="#book">Explore Homes</a>
    </div>
</div>
<!-- main banner Section End -->

<!-- Section Packages Start -->
<section class="py-3">
    <div class="container ">
        <br>
        <div class="text-center">
            <h2 class="text-center mt-3 mb-5 heading"><span>To</span>p Picks For You </h2>
        </div>
        <div class="row" id="ads">
            @for($i=1; $i<=8; $i++)
                <!-- Category Card -->
                <div class="col-md-3">
                    <div class="card" style="border: 0px;">
                        <div class="card-image">
                            <span class="card-notify-badge">open 7 days</span>
                            <img class="img-fluid rounded-3" src="{{asset('image/us.png')}}" alt="Alternate Text" />
                        </div>
                        <div class="houseprice">
                            <span>$28,000.00</span>
                        </div>
                        <div class="row cardrow">
                            <div class="col-md-3 cardsmalltext">
                                <i class="fa-solid fa-bed icon-bed"></i> <strong>2</strong>
                            </div>
                            <div class="col-md-3 cardsmalltext">
                                <i class="fa-solid fa-bath"></i> <strong>2</strong>
                            </div>
                            <div class="col-md-6 cardsmalltext">
                                <i class="fa-solid fa-house"></i> <strong>Single family</strong>
                            </div>
                        </div>
                        <div class="row">
                            <small class="houseaddress">108 Sherwood Gate NW, Calgary, AB T3R 0N9</small>
                            <small class="housePoster">Listed by Royal Archard</small>
                        </div>
                    </div>
                </div>
                @endfor
        </div>
        <div class="row justify-content-center" style="margin-top: 30px;">
            <div class="col-auto">
                <button type="button" class="btn btn-warning text-white shadow-sm" style="box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);">
                    See More...
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Section Packages End -->


<!-- Why choose us section start -->
<section class="pt-5 bg-light">
    <div class="container text-center">
        <div class="main-txt text-center">
            <h3 class="heading">Why Choose Us?</h3>
        </div>
        <p class="text-muted mb-5">Your trusted real estate partner, making your journey easy and stress-free.</p>

        <div class="row g-4 d-flex align-items-stretch">
            <!-- Verified Listings -->
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm p-4 d-flex flex-column" style="min-height: 280px;">
                    <div class="mb-3">
                        <i class="fas fa-shield-alt fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Verified Listings</h5>
                    <p class="text-muted">Every property is thoroughly inspected and verified for authenticity.</p>
                </div>
            </div>

            <!-- 24/7 Support -->
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm p-4 d-flex flex-column" style="min-height: 280px;">
                    <div class="mb-3">
                        <i class="fas fa-headset fa-3x text-success"></i>
                    </div>
                    <h5 class="fw-bold">24/7 Support</h5>
                    <p class="text-muted">Our experts are available round the clock to assist you.</p>
                </div>
            </div>

            <!-- Easy Process -->
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm p-4 d-flex flex-column" style="min-height: 280px;">
                    <div class="mb-3">
                        <i class="fas fa-home fa-3x text-warning"></i>
                    </div>
                    <h5 class="fw-bold">Easy Process</h5>
                    <p class="text-muted">We make your property journey smooth and hassle-free.</p>
                </div>
            </div>

            <!-- Best Deals -->
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm p-4 d-flex flex-column" style="min-height: 280px;">
                    <div class="mb-3">
                        <i class="fas fa-tags fa-3x text-danger"></i>
                    </div>
                    <h5 class="fw-bold">Best Deals</h5>
                    <p class="text-muted">Get the most competitive prices with unbeatable offers.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Why choose us section ends-->

<!-- Testimonial Section start -->

<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-5 heading">What Our Clients Say</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card border-0 shadow-sm p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('image/testimonialPics/t1.jpg')}}" class="rounded-circle me-3" alt="Client 1">
                                    <div>
                                        <h5 class="fw-bold mb-0">Sarah Johnson</h5>
                                        <p class="text-muted">Home Buyer</p>
                                    </div>
                                </div>
                                <p class="text-muted">"Thanks to this amazing platform, I found my dream home effortlessly. Highly recommended!"</p>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card border-0 shadow-sm p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('image/testimonialPics/t2.jpg')}}" class="rounded-circle me-3" alt="Client 2">
                                    <div>
                                        <h5 class="fw-bold mb-0">Michael Smith</h5>
                                        <p class="text-muted">Real Estate Investor</p>
                                    </div>
                                </div>
                                <p class="text-muted">"A seamless experience from start to finish. The support team was exceptional."</p>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card border-0 shadow-sm p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('image/testimonialPics/t3.jpg')}}" class="rounded-circle me-3" alt="Client 3">
                                    <div>
                                        <h5 class="fw-bold mb-0">Emma Brown</h5>
                                        <p class="text-muted">Property Seller</p>
                                    </div>
                                </div>
                                <p class="text-muted">"Selling my property was quick and stress-free. Highly professional service!"</p>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>

        </div>
    </div>
</section>

<!-- Testimonial section Ends -->


<!-- About Start -->
<section class="about bg-white" id="about">
    <div class="container">
        <div class="main-txt text-center">
            <h3 class="heading mb-5">How It Works</h3>
        </div>

        <div class="row">

            <div class="col-md-6 py-3 py-md-0">
                <div class="card border-0 shadow-sm">
                    <img src="{{asset('image/customer-support.jpg')}}" alt="How It Works Image" style="height:60%; width:auto;" class="img-fluid">
                </div>
            </div>

            <div class="col-md-6 py-3 py-md-0 d-flex flex-column justify-content-center align-items-center">
                <h2>We’ve Made Finding Your Perfect Home Easy!</h2>
                <p>Our platform simplifies the home-buying process. Whether you're searching for your first home or your next investment, we’ve got you covered. Our seamless three-step process is designed to ensure you find the best match, view the property effortlessly, and complete the purchase smoothly. Discover how easy it can be to find your dream home with us.</p>
                <button id="about-btn" class="btn btn-primary">Learn More...</button>
            </div>


        </div>

    </div>
</section>
<!-- About End -->

<section class="testimonials py-5 bg-light" id="testimonials">
    <div class="container text-center">
        <div class="main-txt text-center">
            <h3 class="heading mb-5">Hear from Our Happy Customers</h3>
        </div>


        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- Testimonial Group 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-card p-4 bg-white shadow-sm rounded">
                                <p class="testimonial-text">"Thanks to [Your Website Name], I found my dream home in just a few clicks! The process was easy, and the support was amazing. Highly recommend!"</p>
                                <h5 class="customer-name">John Doe</h5>
                                <p class="customer-location">New York</p>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card p-4 bg-white shadow-sm rounded">
                                <p class="testimonial-text">"I never thought finding the perfect home could be so simple. The platform made it so easy to compare options. I'm beyond satisfied!"</p>
                                <h5 class="customer-name">Sarah Lee</h5>
                                <p class="customer-location">California</p>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card p-4 bg-white shadow-sm rounded">
                                <p class="testimonial-text">"A fantastic experience! The website guided me through every step and helped me find exactly what I was looking for. Thank you!"</p>
                                <h5 class="customer-name">Michael Smith</h5>
                                <p class="customer-location">Texas</p>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Group 2 -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-card p-4 bg-white shadow-sm rounded">
                                <p class="testimonial-text">"The property options were extensive, and the process was so streamlined. I couldn't have asked for a better experience!"</p>
                                <h5 class="customer-name">Emily White</h5>
                                <p class="customer-location">Florida</p>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card p-4 bg-white shadow-sm rounded">
                                <p class="testimonial-text">"Fantastic service and great options! I was able to find my perfect home in no time, and the process was stress-free!"</p>
                                <h5 class="customer-name">David Clark</h5>
                                <p class="customer-location">Arizona</p>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card p-4 bg-white shadow-sm rounded">
                                <p class="testimonial-text">"From browsing to finalizing the deal, everything was smooth and seamless. I’m extremely happy with my new home!"</p>
                                <h5 class="customer-name">Jessica Tan</h5>
                                <p class="customer-location">Nevada</p>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>



<!-- Call-to-Action Section -->
<section class="cta py-5 bg-info text-white text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">Don’t wait! Your perfect home is just a click away.</h2>
        <p class="lead mb-4">Explore now and find the best properties suited for your needs. It’s fast, easy, and effective.</p>
        <a href="#explore" class="btn btn-light btn-lg">Explore Now</a>
    </div>
</section
    @endsection