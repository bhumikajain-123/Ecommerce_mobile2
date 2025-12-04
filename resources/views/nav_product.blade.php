@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h2 class="fw-bold mb-4 text-center">Our Products</h2>

    <div class="row g-4">

        <!-- Product 1 -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="{{ asset('images/products/mobile.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Mobile</h5>
                    <p class="text-muted">Fast performance & HD camera</p>
                    <h5 class="fw-bold text-success">₹14,999</h5>
                    <a href="{{ url('product/1') }}" class="btn btn-primary btn-sm mt-2">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="{{ asset('images/products/laptop.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Laptop</h5>
                    <p class="text-muted">Powerful & lightweight</p>
                    <h5 class="fw-bold text-success">₹49,999</h5>
                    <a href="{{ url('product/2') }}" class="btn btn-primary btn-sm mt-2">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="{{ asset('images/products/1.jpeg') }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Mouse</h5>
                    <p class="text-muted">"Smooth mouse."</p>
                    <h5 class="fw-bold text-success">₹199</h5>
                    <a href="{{ url('product/3') }}" class="btn btn-primary btn-sm mt-2">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="{{ asset('images/products/smartwatch.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Smart Watch</h5>
                    <p class="text-muted">Fitness and  notifications watch for hand</p>
                    <h5 class="fw-bold text-success">₹2,999</h5>
                    <a href="{{ url('product/4') }}" class="btn btn-primary btn-sm mt-2">Buy Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
