@extends('layouts.main')


@push('title')
<title>Category</title>
@endpush()
@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Category</h1>
</div>

<section class="my-5">
    <div class="container">

        <div class="row">
            <!-- product 1 -->
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/mobile.jpg') }}" class="card-img-top" alt="Mobile">

                    <div class="card-body text-center">
                        <h5 class="card-title">Mobile</h5>
                        <h5 class="fw-bold text-success">₹14,999</h5>

                    </div>
                </div>
            </div>

            <!-- product 2 -->
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/smartwatch.jpg') }}" class="card-img-top" alt="Smart Watch">

                    <div class="card-body text-center">
                        <h4 class="card-title">Smart Watch</h4>
                        <h5 class="fw-bold text-success">₹14,999</h5>

                    </div>
                </div>
            </div>

            <!-- product 3 -->
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/laptop.jpg') }}" class="card-img-top" alt="Laptop">
                    <div class="card-body text-center">
                        <h5 class="card-title">Laptop</h5>

                        <h5 class="fw-bold text-success">₹49,999</h5>

                    </div>
                </div>
            </div>

            <!-- product 4 -->
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/shoes.jpg') }}" class="card-img-top" alt="Shoes">

                    <div class="card-body text-center">
                        <h4 class="card-title">Running Shoes</h4>

                        <h5 class="fw-bold text-success">₹12,999</h5>

                    </div>
                </div>
            </div>


            <!-- -- -->
            <div class="col-lg-3 mt-4">
                <div class="card">
                    <img src="{{ asset('images/products/earbuds.jpg') }}" class="card-img-top" alt="Earbuds">
                    <div class="card-body text-center">
                        <h6 class="card-title">Wireless Earbuds</h6>
                        <h6 class="fw-bold text-success">₹999</h6>
                    </div>
                </div>
            </div>
            <!-- ---- -->

            <div class="col-lg-3 mt-4">
                <div class="card">
                    <img src="{{ asset('images/products/guitar.jpeg') }}" class="card-img-top" alt="Guitar">
                    <div class="card-body text-center">
                        <h6 class="card-title">Guitar</h6>
                        <h6 class="fw-bold text-success">₹799</h6>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 mt-4">
                <div class="card">
                    <img src="{{ asset('images/products/1.jpeg') }}" class="card-img-top" alt="mouse">
                    <div class="card-body text-center">
                        <h6 class="card-title">Mouse</h6>
                        <h6 class="fw-bold text-success">₹1,199</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-4">
                <div class="card">
                    <img src="{{ asset('images/products/washing_machine.jpeg') }}" class="card-img-top" alt="Washing Machine">
                    <div class="card-body text-center">
                        
                        
                        <h6 class="fw-bold text-success">₹1,199</h6>
                    </div>
                </div>
            </div>
              <div class="col-lg-3 mt-4">
                <div class="card">
                    <img src="{{ asset('images/products/2.jpeg') }}" class="card-img-top" alt="Women Shoes">
                    <div class="card-body text-center">
                        <h6 class="card-title">Women Shoes</h6>
                        <h6 class="fw-bold text-success">₹1,199</h6>
                    </div>
                </div>
            </div>
              <div class="col-lg-3 mt-4">
                <div class="card">
                    <img src="{{ asset('images/products/3.jpeg') }}" class="card-img-top" alt="Camera">
                    <div class="card-body text-center">
                        <h6 class="card-title">Camera</h6>
                        <h6 class="fw-bold text-success">₹1,199</h6>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- row end -->
    </div> <!-- container end -->
</section>

@endsection