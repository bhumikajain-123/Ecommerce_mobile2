@extends('layouts.main')

@section('content')

<div class="container my-5 text-center">
    <div class="card p-5 shadow-sm">
        <h1 class="text-success mb-4">&#10004;</h1> <!-- Check mark -->
        <h2 class="fw-bold mb-3">Thank You!</h2>
        <p class="mb-4">Your order has been placed successfully.</p>

        <div class="mb-4">
            <p><strong>Order ID:</strong> #123456</p>
            <p><strong>Total Amount:</strong> ₹14,999</p>
        </div>

        <a href="{{ url('/home') }}" class="btn btn-primary btn-lg">Back to Home</a>
        <a href="{{ url('/cart') }}" class="btn btn-outline-secondary btn-lg ms-2">View Cart</a>
    </div>
</div>

@endsection
