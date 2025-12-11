@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">Vending Machine Checkout</h2>

    @php
        $grandTotal = 0;
        $cart = session('cart', []);
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

        {{-- Display Items like vending machine --}}
        <div class="row mb-4">
            @foreach($cart as $item)
                @php $total = $item['price'] * $item['qty']; $grandTotal += $total; @endphp
                <div class="col-md-3 mb-3">
                    <div class="card text-center shadow-sm">
                        <img src="{{ $item['image'] }}" class="card-img-top" style="height:150px; object-fit:contain;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">₹{{ number_format($item['price']) }} x {{ $item['qty'] }}</p>
                            <p class="fw-bold">₹{{ number_format($total) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Total Display --}}
        <div class="alert alert-primary text-center fw-bold fs-4">
            Total Amount: ₹{{ number_format($grandTotal) }}
        </div>

        {{-- Payment Section --}}
        <form action="{{ url('/checkout') }}" method="POST" class="text-center">
            @csrf
            <div class="mb-3">
                <label class="form-label me-3">Payment Method:</label>
                <input type="radio" name="payment" value="COD" checked> Cash on Delivery
                <input type="radio" name="payment" value="Online" class="ms-3"> Online Payment
            </div>

            <button type="submit" class="btn btn-success btn-lg px-5">
                Dispense
            </button>
        </form>

    @endif
</div>

@endsection
