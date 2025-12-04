@extends('layouts.main')

@section('content')

<div class="container my-5">

    <!-- Title Section -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">About Us</h1>
        <p class="text-muted">
            Learn more about who we are and what we do.
        </p>
    </div>

    <div class="row align-items-center">

        <!-- Left Side Image -->
        <div class="col-md-6 mb-4">
            <img src="{{ asset('images/about.jpeg') }}" 
                 class="img-fluid rounded shadow-lg" 
                 alt="About Image">
        </div>

        <!-- Right Side Content -->
        <div class="col-md-6">
            <h2 class="fw-bold">Welcome to MyShop</h2>

            <p class="text-muted mt-3">
                MyShop is your trusted online store for high-quality electronics 
                including mobiles, laptops, headphones, smart watches, and more.
            </p>

            <p class="text-muted">
                We focus on delivering great value, excellent performance, and 
                the latest technology at affordable prices. Our goal is to 
                provide a smooth, secure, and enjoyable shopping experience.
            </p>

            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item border-0 ps-0">
                    ✔ High-quality products you can trust
                </li>
                <li class="list-group-item border-0 ps-0">
                    ✔ Fast & secure delivery
                </li>
                <li class="list-group-item border-0 ps-0">
                    ✔ Friendly customer support
                </li>
                <li class="list-group-item border-0 ps-0">
                    ✔ Affordable prices
                </li>
            </ul>

            <a href="{{ url('nav_product') }}" class="btn btn-primary btn-lg mt-2">
                Shop Now
            </a>
        </div>

    </div>

</div>

@endsection
