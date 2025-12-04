@extends('layouts.main')

@section('content')

<div class="container my-5">

    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="text-muted">We are here to help you. Feel free to reach out anytime.</p>
    </div>

    <div class="row">

        <!-- Contact Info -->
        <div class="col-md-5 mb-4">
            <div class="p-4 bg-light rounded shadow-sm">

                <h4 class="fw-bold mb-3">Get in Touch</h4>

                <p class="mb-2"><strong>Email:</strong> support@myshop.com</p>
                <p class="mb-2"><strong>Phone:</strong> +91 98765 43210</p>
                <p class="mb-2"><strong>Address:</strong> Mumbai, India</p>

                <hr>

                <h5 class="fw-bold">Business Hours</h5>
                <p class="mb-1">Mon – Fri: 9 AM – 7 PM</p>
                <p>Sat – Sun: 10 AM – 5 PM</p>

            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-7">
            <div class="p-4 border rounded shadow-sm">

                <h4 class="fw-bold mb-3">Send a Message</h4>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                    </div>

                    <button class="btn btn-primary btn-lg">Send Message</button>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection
