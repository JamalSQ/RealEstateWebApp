@extends('front.index')
@section('page_title','Property Details')
@section('property_detail_selected','active')
@section('content')
<section class="property-listings">
    <div class="container-fluid">
        @for($i=1; $i<=1; $i++)
            <a href="#" class="text-decoration-none font-sm">JSQ > Lahore > Defencehouses > Phase1 </a>
            @endfor
    </div>
    <hr class="m-0">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 me-auto">
                <h6 class="fw-bold m-0">1 Kanal Ideal Location 7 Bedroom House For Sale In DHA 1 Islamabad</h6>
                <small class="font-sm">DHA Defence Phase 1, DHA Defence, Islamabad, Islamabad Capital</small>
            </div>
            <div class="col-md-2">
                <a href="#"><i class="fa-solid fa-print me-3"></i></a>
                <a href="#"><i class="fa-solid fa-share"></i></a>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pics-tab" data-bs-toggle="tab" data-bs-target="#pics" type="button" role="tab" aria-controls="home" aria-selected="true">Pics</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="map-tab" data-bs-toggle="tab" data-bs-target="#map" type="button" role="tab" aria-controls="profile" aria-selected="false">Map</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pics" role="tabpanel" aria-labelledby="home-tab">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('image/g1.png')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('image/g2.png')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('image/g3.png')}}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="profile-tab">
                        <iframe src="https://maps.google.com/?q=Real+Estate+Location&output=embed" width="100%" height="300px" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="row mt-4">
                    <h2 class="bg-light">Overview</h2>
                    <div class="col-md-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td>John Doe</td>
                                </tr>
                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td>johndoe@example.com</td>
                                </tr>
                                <tr>
                                    <td><strong>Phone</strong></td>
                                    <td>(123) 456-7890</td>
                                </tr>
                                <tr>
                                    <td><strong>Address</strong></td>
                                    <td>1234 Elm Street, Springfield, IL</td>
                                </tr>
                                <tr>
                                    <td><strong>Age</strong></td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td><strong>Occupation</strong></td>
                                    <td>Software Developer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td>John Doe</td>
                                </tr>
                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td>johndoe@example.com</td>
                                </tr>
                                <tr>
                                    <td><strong>Phone</strong></td>
                                    <td>(123) 456-7890</td>
                                </tr>
                                <tr>
                                    <td><strong>Address</strong></td>
                                    <td>1234 Elm Street, Springfield, IL</td>
                                </tr>
                                <tr>
                                    <td><strong>Age</strong></td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td><strong>Occupation</strong></td>
                                    <td>Software Developer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Second nav tabs -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#discription" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Discription</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#loAndNearby" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Location & Nearby</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#HomeFinance" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Home Finance</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#PriceIndex" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Price Index</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#Trends" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Trends</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="discription" role="tabpanel" aria-labelledby="pills-home-tab">
                        Discription
                        <pre>
Newly constructed at a very peaceful location
Solid construction and Beautiful Finishing
Excellent Woodwork, Quality Fittings And Stylish kitchens
Near to Grand Masjid, Park and Commercial
This house features:
24 Hours Security 
2 Independent portions (also suitable for renting out)
6 Spacious bedrooms
7 Bathrooms
2 Drawing room
2 Stylish kitchens
6 Luxury Living rooms with attached bath
2 Servant room with attached bath
Entrance lobby with stairs
Parking space for 2 cars
- Car Porch
- Near To Mosque,
- Near To Commercial 
- Near To Parking 
- Near To Park 
- Near To Boulevard 
- Near To Basket Ball & Cricket Ground 
- Commercial Area And Many More
- Best Option
If You Want To Live In An Environment Which Is Absolutely Secured And Peaceful 
Then It Is The Right Time And The Right Place To Invest Your
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="loAndNearby" role="tabpanel" aria-labelledby="pills-profile-tab">Location and nearby</div>
                    <div class="tab-pane fade" id="HomeFinance" role="tabpanel" aria-labelledby="pills-contact-tab">Home finance</div>
                    <div class="tab-pane fade" id="PriceIndex" role="tabpanel" aria-labelledby="pills-profile-tab">Price index</div>
                    <div class="tab-pane fade" id="Trends" role="tabpanel" aria-labelledby="pills-profile-tab">Trends</div>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Get in Touch</h3>
                <form action="#" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
                    <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>
                    <textarea name="message" class="form-control mb-3" rows="11" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn btn-dark w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection