@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row">

        <!-- LEFT SIDE – PRODUCT IMAGE -->
        <div class="col-md-6">
            <img src="{{ asset('images/products/' . $product['image']) }}" class="img-fluid border rounded shadow"
                alt="{{ $product['name'] }}">
        </div>

        <!-- RIGHT SIDE – PRODUCT DETAILS -->
        <div class="col-md-6">
            <h2>{{ $product['name'] }}</h2>

            <h4 class="text-success mt-3">₹{{ number_format($product['price']) }}</h4>

            <p class="mt-3">
                Premium quality product with great performance.
            </p>

            <a href="{{ route('cart.add', $product['id']) }}" class="btn btn-success btn-lg mt-4">
    Add to Cart
</a>


        </div>

    </div>
</div>
@endsection