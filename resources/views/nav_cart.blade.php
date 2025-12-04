@extends('layouts.main')

@section('content')

<div class="container my-5">

    <h2 class="fw-bold mb-4 text-center">Your Shopping Cart</h2>

    <div class="row">

        <!-- CART ITEMS -->
        <div class="col-lg-8">

            <div class="card shadow-sm mb-4">
                <div class="card-body">

                    <!-- Example Item (you will later loop items from DB) -->
                    <div class="d-flex align-items-center border-bottom pb-3 mb-3">

                        <img src="{{ asset('images/products/mobile.jpg') }}" 
                             class="rounded me-3" width="90">

                        <div class="flex-grow-1">
                            <h5 class="mb-1">Mobile Phone</h5>
                            <p class="text-muted mb-1">Fast performance, HD camera.</p>
                            <span class="fw-bold text-success">₹14,999</span>
                        </div>

                        <div class="ms-3">
                            <input type="number" class="form-control" value="1" min="1" style="width:80px">
                        </div>

                        <button class="btn btn-danger btn-sm ms-3">
                            Remove
                        </button>

                    </div>

                    <!-- You will repeat above block for each cart item -->

                </div>
            </div>

        </div>

        <!-- CART SUMMARY -->
        <div class="col-lg-4">

            <div class="card shadow-sm">
                <div class="card-body">

                    <h4 class="fw-bold mb-3">Order Summary</h4>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span class="fw-bold">₹14,999</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Delivery Charges</span>
                        <span class="fw-bold text-success">FREE</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between mb-3">
                        <span class="fw-bold">Total</span>
                        <span class="fw-bold text-success">₹14,999</span>
                    </div>

                    <a href="{{ url('/checkout') }}" class="btn btn-primary w-100 btn-lg">
                        Proceed to Checkout
                    </a>

                </div>
            </div>

        </div>

    </div>

</div>

@endsection
