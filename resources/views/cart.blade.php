@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 fw-bold">Your Cart</h2>

    @if(empty($cart))
        <p>Your cart is empty!</p>
    @else

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $grandTotal = 0;

                    // Dummy products (replace later with DB)
                    $products = [
                        1 => ['name' => 'Mobile', 'price' => 5000],
                        2 => ['name' => 'Laptop', 'price' => 45000],
                        3 => ['name' => 'Headphone', 'price' => 999],
                    ];
                @endphp

                @foreach($cart as $id => $qty)
                    @php
                        // If product exists in array (safe check)
                        $product = $products[$id] ?? null;
                    @endphp

                    @if($product)
                        @php
                            $total = $product['price'] * $qty;
                            $grandTotal += $total;
                        @endphp

                        <tr>
                            <td>{{ $product['name'] }}</td>
                            <td>₹{{ number_format($product['price']) }}</td>
                            <td>{{ $qty }}</td>
                            <td>₹{{ number_format($total) }}</td>
                        </tr>
                    @endif
                @endforeach

                <tr>
                    <th colspan="3">Grand Total</th>
                    <th>₹{{ number_format($grandTotal) }}</th>
                </tr>

            </tbody>
        </table>

        <a href="{{ url('/checkout') }}" class="btn btn-success mt-3">Checkout</a>

    @endif

</div>

@endsection
