@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h2 class="fw-bold mb-4">Checkout</h2>

    <div class="row">

        <!-- LEFT SIDE: BILLING DETAILS -->
        <div class="col-md-7">
            <div class="card p-4 shadow-sm">
                <h4 class="mb-3">Billing Details</h4>

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Enter phone number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Complete Address</label>
                    <textarea class="form-control" rows="3" placeholder="House No, Street, City"></textarea>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE: ORDER SUMMARY -->
        <div class="col-md-5">

            <div class="card p-4 shadow-sm">
                <h4 class="mb-3">Order Summary</h4>

                @php
                    $products = config('products'); // fetch product list
                    $grandTotal = 0;
                @endphp

                @foreach($cart as $id => $qty)

                    @php
                        $product = $products[$id];
                        $total = $product['price'] * $qty;
                        $grandTotal += $total;
                    @endphp

                    <div class="d-flex justify-content-between mb-2">
                        <p>{{ $product['name'] }} (x{{ $qty }})</p>
                        <strong>₹{{ number_format($total) }}</strong>
                    </div>

                @endforeach

                <hr>

                <div class="d-flex justify-content-between">
                    <h5>Total:</h5>
                    <h5 class="text-success fw-bold">₹{{ number_format($grandTotal) }}</h5>
                </div>

                <a href="{{ route('order.success') }}" class="btn btn-primary w-100 mt-4 btn-lg">
                    Place Order
                </a>

            </div>
        </div>

    </div>
</div>

@endsection
