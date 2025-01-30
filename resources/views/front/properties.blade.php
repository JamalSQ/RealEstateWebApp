@extends('front.index')
@section('page_title', 'Properties')
@section('property_selected', 'active')
@section('content')
<section class="property-listings">
    <div class="container-fluid my-5">
        <!-- Title for the page -->
        <h5 class="text-center mb-5 heading">Browse Properties</h5>
        <!-- Property Listings -->
        <div class="row" id="ads">
            @for($i = 1; $i <= 7; $i++)
                <!-- Category Card -->
                <div class="col-md-3">
                    <div class="card" style="border: 0px;">
                        <a href="{{url('front/property/details')}}" class="text-decoration-none">
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
                                <small class="houseaddress text-dark">108 Sherwood Gate NW, Calgary, AB T3R 0N9</small>
                        </a>
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
    </div>
</section>
@endsection