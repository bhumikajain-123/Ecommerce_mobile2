<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('title')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- MAIN NAVBAR -->
    <nav class="navbar navbar-expand-lg theme-navbar">
        <div class="container-fluid">

            <!-- LEFT: Brand -->
            <a class="navbar-brand text-light fw-bold" href="#">
                <h1 class="h3 m-0">E-Commerce</h1>
            </a>

            <!-- MOBILE TOGGLER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- NAV CONTENT -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- CENTER: Search Bar -->
                <div class="d-flex justify-content-center flex-grow-1">
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" style="width:350px;"
                                placeholder="Search for product">

                            <button class="btn bg-light" type="submit">
                                <i class="fa-brands fa-searchengin"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- RIGHT SIDE -->
                <div class="d-flex align-items-center ms-3 gap-3">
                    <a href="#" class="text-light text-decoration-none">Become a seller</a>

                    <a href="#" class="text-light btn-cart btn-sm">
                        <i class="fa-solid fa-cart-arrow-down me-1"></i> Cart
                    </a>

                    <a href="../login" class="btn-sm btn-login text-light">
                        <i class="fa-solid fa-user me-1"></i> Login
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- SECOND NAVBAR -->
    <nav class="navbar navbar-expand-lg theme-navbar2">
        <div class="container-fluid  ">


            <ul class="navbar-nav justify-content-center w-100 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#"></a>
                </li>


                <li class="nav-item"><a class="nav-link  text-dark" href="../home">Home</a></li>
                <li class="nav-item"><a class="nav-link  text-dark" href="../nav_product">Products</a></li>
                <li class="nav-item"><a class="nav-link  text-dark" href="../about">About</a></li>
                <li class="nav-item"><a class="nav-link  text-dark" href="../contact">Contact</a></li>
                 <li class="nav-item"><a class="nav-link  text-dark" href="../nav_product">Cart</a></li>
                <!-- <li class="nav-item"><a class="nav-link  text-dark"
                        href="{{url('category/electronics/tv')}}">Appliances</a></li> -->
            </ul>

        </div>
    </nav>

</body>

</html>