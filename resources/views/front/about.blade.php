@extends('front.index')
@section('page_title','About Us')
@section('About_selected','active')
@section('content')
<section class="about-us">
    <div class="home" style="
  background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('{{ asset('image/cheering_people.jpg') }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 100%;
  height: 100vh;
  position: relative;
">
        <div class="content banner-text" style="
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
      width: 100%;
    ">
            <h5 class="heading">About Us</h5>
        </div>
    </div>

    <!-- main banner Section End -->
    <div class="container text-center m-5">
        <p>We help people find their dream homes with ease. With years of experience in the real estate market, we provide top-notch property deals.</p>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Our Mission</h2>
                <p class="mb-3">At [Your Company Name], our mission is to provide exceptional real estate services that empower clients to find their dream homes and investments with ease. We are dedicated to building long-lasting relationships through personalized service, transparent communication, and innovative solutions. Whether you're buying, selling, or investing, our goal is to make every transaction seamless and stress-free.</p>
                <hr>
                <h2 class="my-3">Our Vision</h2>
                <p>Our vision is to be the leading real estate company known for our commitment to integrity, excellence, and customer satisfaction. We strive to revolutionize the industry by integrating technology, local expertise, and a deep understanding of market trends. We envision a future where every individual has access to affordable, quality real estate options, and the journey to owning or renting property is made simple and enjoyable.</p>
            </div>
            <div class="col-md-6">
                <h2>Why Choose Us?</h2>
                <ul>
                    <ul>
                        <li><strong>Expertise and Experience</strong>: With years of industry experience, we understand the nuances of the real estate market and can offer you the best advice to make informed decisions.</li>

                        <li><strong>Personalized Service</strong>: We take the time to listen to your needs and tailor our services to match your specific goals, ensuring that you get the best outcomes.</li>

                        <li><strong>Wide Range of Properties</strong>: Whether you're looking for residential, commercial, or investment properties, we have a diverse portfolio that suits every budget and preference.</li>

                        <li><strong>End-to-End Support</strong>: From your first inquiry to the final signing, we provide comprehensive support throughout the entire buying or selling process, making your real estate journey smooth and stress-free.</li>

                        <li><strong>Transparency and Integrity</strong>: We believe in honesty and openness in all our dealings. You can trust us to guide you through every step, with no hidden fees or surprises.</li>

                        <li><strong>Cutting-Edge Technology</strong>: We use the latest tools and platforms to give you an edge in the real estate market. Whether it's virtual tours or instant property updates, we ensure you're always ahead.</li>
                    </ul>

                </ul>
            </div>
        </div>
    </div>
</section>
@endsection