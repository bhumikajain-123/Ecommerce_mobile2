@extends('layouts.main')
@push('title')
<title>Home</title>
@endpush()

@section('content')

<!-- ===================== CAROUSEL ===================== -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('images/watch.png') }}" class="d-block w-100" alt="watch">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/shoes.png') }}" class="d-block w-100" alt="shoes">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/ear_phones.png') }}" class="d-block w-100" alt="earphones">
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- ===================== Product Section === ================== -->
<section class="my-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h1>Top Deals</h1>
            </div>
            <div class="col-lg-6 text-end">
                <button class="btn btn-success">View All</button>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/mobile.jpg') }}" class="card-img-top" alt="Mobile">

                    <div class="card-body text-center">
                        <h5 class="card-title">Mobile</h5>
                        <p class="card-text text-muted">Fast performance and HD camera.</p>
                        <h5 class="fw-bold text-success">₹14,999</h5>

                        <!-- FIXED THE BUTTON -->
                        <a href="{{ url('product/1') }}" class="btn btn-primary mt-2">
                            Buy Now
                        </a>

                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/smartwatch.jpg') }}" class="card-img-top" alt="Smart Watch">

                    <div class="card-body text-center">
                        <h4 class="card-title">Smart Watch</h4>
                        <p class="card-text text-muted">Stylish smart watch with health tracking.</p>
                        <h5 class="fw-bold text-success">₹14,999</h5>
                        <button class="btn btn-primary mt-2">Buy Now</button>
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/laptop.jpg') }}" class="card-img-top" alt="Laptop">
                    <div class="card-body text-center">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text text-muted">Lightweight laptop for work & study.</p>
                        <h5 class="fw-bold text-success">₹49,999</h5>
                        <button class="btn btn-primary mt-2">Buy Now</button>
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/shoes.jpg') }}" class="card-img-top" alt="Shoes">

                    <div class="card-body text-center">
                        <h4 class="card-title">Running Shoes</h4>
                        <p class="card-text text-muted">Comfortable and durable running shoes.</p>
                        <h5 class="fw-bold text-success">₹12,999</h5>
                        <button class="btn btn-primary mt-2">Buy Now</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- popular electronics -->

<!-- <section class="my-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h1>Popular Electronics</h1>
            </div>
            <div class="col-lg-6 text-end">
                <button class="btn btn-success">View All</button>
            </div>


            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/mobile.jpg') }}" class="card-img-top" alt="Mobile">

                    <div class="card-body text-center">
                        <h5 class="card-title">Mobile</h5>
                        <p class="card-text text-muted">Fast performance and HD camera.</p>
                        <h5 class="fw-bold text-success">₹14,999</h5>
                        <button class="btn btn-primary mt-2">Buy Now</button>
                    </div>
                </div>
            </div>

         
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/smartwatch.jpg') }}" class="card-img-top" alt="Smart Watch">

                    <div class="card-body text-center">
                        <h4 class="card-title">Smart Watch</h4>
                        <p class="card-text text-muted">Stylish smart watch with health tracking.</p>
                        <h5 class="fw-bold text-success">₹14,999</h5>
                        <button class="btn btn-primary mt-2">Buy Now</button>
                    </div>
                </div>
            </div>

          
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/laptop.jpg') }}" class="card-img-top" alt="Laptop">
                    <div class="card-body text-center">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text text-muted">Lightweight laptop for work & study.</p>
                        <h5 class="fw-bold text-success">₹49,999</h5>
                        <button class="btn btn-primary mt-2">Buy Now</button>
                    </div>
                </div>
            </div>

          
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/shoes.jpg') }}" class="card-img-top" alt="Shoes">

                    <div class="card-body text-center">
                        <h4 class="card-title">Running Shoes</h4>
                        <p class="card-text text-muted">Comfortable and durable running shoes.</p>
                        <h5 class="fw-bold text-success">₹12,999</h5>
                        <button class="btn btn-primary mt-2">Buy Now</button>
                    </div>
                </div>
            </div>

        </div> 
    </div>
</section> -->


<!-- pupular Categories--- -->

<!-- <section class="my-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h1>Popular Categories</h1>
            </div>
            <div class="col-lg-6 text-end">
                <button class="btn btn-danger">View All</button>
            </div>
            
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/shoes.jpg') }}" class="card-img-top" alt="Shoes">
                    <div class="card-body text-center">
                        <h6 class="card-title">Running Shoes</h6>
                        <h6 class="fw-bold text-success">₹1,299</h6>
                    </div>
                </div>
            </div>

       
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/earbuds.jpg') }}" class="card-img-top" alt="Earbuds">
                    <div class="card-body text-center">
                        <h6 class="card-title">Wireless Earbuds</h6>
                        <h6 class="fw-bold text-success">₹999</h6>
                    </div>
                </div>
            </div>

           
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/bag.jpg') }}" class="card-img-top" alt="Bag">
                    <div class="card-body text-center">
                        <h6 class="card-title">Travel Backpack</h6>
                        <h6 class="fw-bold text-success">₹799</h6>
                    </div>
                </div>
            </div>

      
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/powerbank.jpg') }}" class="card-img-top" alt="Powerbank">
                    <div class="card-body text-center">
                        <h6 class="card-title">Power Bank 20000mAh</h6>
                        <h6 class="fw-bold text-success">₹1,199</h6>
                    </div>
                </div>
            </div>

        </div> 
    </div> 
</section> -->


<!-- Recently View-- -->

<!-- <section class="my-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h1>Recently View</h1>
            </div>
            <div class="col-lg-6 text-end">
                <button class="btn btn-danger">View All</button>
            </div>


            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/shoes.jpg') }}" class="card-img-top" alt="Shoes">
                    <div class="card-body text-center">
                        <h6 class="card-title">Running Shoes</h6>
                        <h6 class="fw-bold text-success">₹1,299</h6>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/earbuds.jpg') }}" class="card-img-top" alt="Earbuds">
                    <div class="card-body text-center">
                        <h6 class="card-title">Wireless Earbuds</h6>
                        <h6 class="fw-bold text-success">₹999</h6>
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/products/bag.jpg') }}" class="card-img-top" alt="Bag">
                    <div class="card-body text-center">
                        <h6 class="card-title">Travel Backpack</h6>
                        <h6 class="fw-bold text-success">₹799</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">


                <div class="card">
                    <img src="{{ asset('images/products/powerbank.jpg') }}" class="card-img-top" alt="Powerbank">
                    <div class="card-body text-center">
                        <h6 class="card-title">Power Bank 20000mAh</h6>
                        <h6 class="fw-bold text-success">₹1,199</h6>
                    </div>
                </div>
            </div>

        </div> 
    </div> 
</section> -->







@endsection