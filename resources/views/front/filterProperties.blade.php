@extends('front.index')
@section('page_title', 'Filter Properties')
@section('content')
<section class="property-listings">
    <div class="container my-5">
        <!-- Title for the page -->
        <h5 class="text-center mb-5 heading">Filter Properties</h5>

        <!-- Filter Container with Heading -->
        <div class="filter-container mt-3" id="filterContainer">
            <p class="text-white fw-bold">Filter houses based on your preferences</p>

            <!-- Form container (no longer hidden) -->
            <div class="mt-3">
                <form action="#" method="GET" class="mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="location" class="form-control" placeholder="Enter City or Area">
                        </div>
                        <div class="col-md-3">
                            <select name="type" class="form-control">
                                <option value="">Property Type</option>
                                <option value="apartment">Apartment</option>
                                <option value="house">House</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="price" class="form-control">
                                <option value="">Price Range</option>
                                <option value="100000-300000">$100,000 - $300,000</option>
                                <option value="300000-500000">$300,000 - $500,000</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Filter Options (Randomly generated strings for demonstration) -->
            <div class="d-flex flex-wrap gap-2">
                @for($i = 1; $i <= 100; $i++)
                    @php
                    // Generate a random length between 3 and 8
                    $length=rand(3, 8);
                    // Generate a random string of that length
                    $randomString='' ;
                    for ($j=0; $j < $length; $j++) {
                    $randomString .=chr(rand(65, 90)); // Random uppercase letter
                    }
                    @endphp
                    <small>{{ $randomString }}</small>
                    @endfor
            </div>
        </div>
    </div>
    <!-- Property Listings -->
    <div class="row" id="ads">
        <h2>Search Result For : New house</h2>
        @for($i = 1; $i <= 7; $i++)
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

    <!-- Pagination (You can customize this as per your needs) -->
    <div class="pagination justify-content-end mt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

</section>
@endsection