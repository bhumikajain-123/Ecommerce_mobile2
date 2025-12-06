@extends('layouts.main')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card p-4 shadow-sm">
                <h2 class="text-center mb-4 fw-bold">Register</h2>

                <form>
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                    </div>
                    <!-- Phone & Email Row -->
                    <div class="row mb-3">

                        <!-- Phone Number -->
                        <div class="col-12 col-md-12 col-lg-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text">+91</span>
                                <input type="number" class="form-control" id="phone" placeholder="Enter phone number">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-12 col-md-12 col-lg-6 mt-sm-3 mt-lg-0">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>

                    </div>



                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>

                    <!-- address -->
                    <div class="mb-3">
                        <textarea type="address" class="form-control" id="address" placeholder="Address"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Register</button>

                    <!-- Login link -->
                    <p class="text-center mt-3">
                        Already have an account? <a href="{{ url('login') }}">Login Here</a>
                    </p>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection