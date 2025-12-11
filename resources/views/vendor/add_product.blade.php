@extends('layouts.pain')

@section('content')

{{-- Sweet Alert --}}
@if(session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    title: 'Success!',
    text: '{{ session("success") }}',
    icon: 'success',
    confirmButtonText: 'OK'
});
</script>
@endif


<div class="container-fluid">
    <div class="row">

        {{-- Sidebar  --}}
        <div class="col-md-2 sidebar">
            <x-side-bar-vendor />
        </div>


        {{-- Main Content --}}
        <div class="col-md-10">

            <nav class="navbar navbar-dark bg-dark px-4">
                <a class="navbar-brand" href="#">VENDOMART</a>
                <span class="text-light">Logged in : admin</span>
            </nav>


            <div class="container mt-4">
                <div class="card shadow p-4">

                    <h3 class="mb-4">Add Product</h3>


                    <form method="post" action="#" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            {{-- LEFT part --}}
                            <div class="col-md-8">

                                <div class="mb-3">
                                    <label>Product Name</label>
                                    <input type="text"
                                        class="form-control form-control-sm"
                                        name="vp_name"
                                        placeholder="Watch">
                                          @error('vp_name')
        <span class="text-danger">{{ $message }}</span>
    @enderror

                                </div>

                                <div class="mb-3">
                                    <label>Price</label>
                                    <input type="number"
                                        class="form-control form-control-sm"
                                        name="vp_price"
                                        placeholder="₹ 1499.00">
                                        @error('vp_price')        <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Category</label>
                                    <input type="text" class="form-control form-control-sm"
                                        name="vp_category">
                                        
                                    @error('vp_category')        <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Stock Quantity</label>
                                    <input type="number"
                                        class="form-control form-control-sm"
                                        name="vp_stock"
                                        placeholder="25 pcs">
                                        @error('vp_stock')  <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Product Description</label>
                                    <textarea class="form-control form-control-sm"
                                        name="vp_description"
                                        placeholder="Fill product description here"></textarea>
                                        @error('vp_description')  <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                               <input type="submit" class="btn btn-primary" value="Add Product">

                            </div>


                            {{-- IMAGE SECTION --}}
                            <div class="col-md-4 text-center">

                                <img id="previewImg"
                                    src="https://i.postimg.cc/1tPGxrzQ/watch.png"
                                    style="width:180px;height:180px;border-radius:100%;object-fit:cover;"
                                />

                                <br><br>

                                <label class="btn btn-dark btn-sm">
                                    Choose Image
                                    <input  type="file" name="vp_image"
                                        onchange="readURL(this)">
                                </label>

                            </div>

                        </div>

                    </form>


                    {{-- Image Preview Script --}}
                    <script>
                    function readURL(input) {
                        if(input.files && input.files[0]) {
                            let reader = new FileReader();
                            reader.onload = function(e){
                                document.getElementById('previewImg').src = e.target.result;
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    </script>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection
