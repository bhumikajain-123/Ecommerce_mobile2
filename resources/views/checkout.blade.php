@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Vending Machine Checkout</h2>

    @php
        $cart = session('cart', []);
        $grandTotal = 0;
    @endphp

    @if(empty($cart))
        <div class="alert alert-warning text-center">
            <h4>Your cart is empty!</h4>
            <p>Redirecting to home...</p>
        </div>

        <script>
            setTimeout(() => { window.location.href = "{{ url('/') }}"; }, 3000);
        </script>
    @else

        <div class="row mb-4">
            @foreach($cart as $item)
                @php $total = $item['price'] * $item['qty']; $grandTotal += $total; @endphp

                <div class="col-md-3 mb-3">
                    <div class="card text-center shadow-sm">
                       <img src="{{ asset('uploads/product/' . $item['image']) }}" 
                             class="card-img-top" 
                             style="height:150px; object-fit:contain;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">₹{{ $item['price'] }} x {{ $item['qty'] }}</p>
                            <p class="fw-bold">₹{{ $total }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="alert alert-primary text-center fw-bold fs-4">
            Total Amount: ₹{{ number_format($grandTotal) }}
        </div>

        <form method="POST" action="{{ url('/checkout') }}" class="text-center">
            @csrf

            <label class="me-3">Payment Option:</label>
            <input type="radio" name="payment" value="COD" checked> COD
            <input type="radio" name="payment" value="Online" class="ms-3"> Online Payment

            <br><br>
            <button class="btn btn-success btn-lg px-5">Dispense</button>
        </form>

    @endif
</div>

@endsection
