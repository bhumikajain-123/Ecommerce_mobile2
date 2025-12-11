<!DOCTYPE html>
<html>
<head>
    <title>Processing Payment...</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<script>
var options = {
    "key": "{{ $key }}",
    "amount": "{{ $amount * 100 }}",
    "currency": "INR",
    "name": "Vending Machine",
    "description": "Order Payment",
    "order_id": "{{ $orderId }}",

    "handler": function (response){
        window.location.href = "{{ route('payment.success') }}";
    }
};

var rzp1 = new Razorpay(options);
rzp1.open();
</script>

</body>
</html>
