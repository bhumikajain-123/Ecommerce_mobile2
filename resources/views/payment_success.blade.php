@extends('layouts.main')

@section('content')

<div class="container text-center mt-5">
    <h1 class="text-success">Payment Successful!</h1>
    <p>Your order has been dispensed.</p>

    <p class="mt-3">
        Redirecting to Home in <span id="counter">3</span> seconds...
    </p>

    
</div>

<script>
    let count = 3;

    let timer = setInterval(() => {
        count--;
        document.getElementById('counter').innerText = count;

        if (count <= 0) {
            clearInterval(timer);
            window.location.href = "{{ url('/home') }}";
        }
    }, 1000);
</script>

@endsection
