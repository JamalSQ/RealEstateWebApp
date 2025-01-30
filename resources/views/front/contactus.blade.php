@extends('front.index')
@section('page_title','Contact Us')
@section('Contactus_selected','active')
@section('content')
<section class="contact-us my-3">
    <div class="container text-center">
        <h5 class="heading">Contact Us</h5>
        <small>Have questions? Reach out to us, and we’ll be happy to help.</small>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>Get in Touch</h3>
                <form action="#" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
                    <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>
                    <textarea name="message" class="form-control mb-3" rows="11" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn btn-dark w-100">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Visit Us</h3>
                <p>JSQ Real Estate Avenue, Lahore, Pakistan</p>
                <p>Email: jsqphpdeveloper@gmail.com</p>
                <p>Phone: +123 456 7890</p>
                <iframe src="https://maps.google.com/?q=Real+Estate+Location&output=embed" width="100%" height="300px" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection