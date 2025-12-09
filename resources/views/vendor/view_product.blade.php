@extends('layouts.pain')

@section('content')

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

        <div class="col-md-2 sidebar">
            <x-side-bar-vendor />
        </div>

        <div class="col-md-10">
            <nav class="navbar navbar-dark bg-dark px-4">
                <a class="navbar-brand" href="#">VENDOMART</a>
                <span class="text-light">Logged in : vendor</span>
            </nav>

            <div class="container mt-4">
                <h3 class="text-center mb-3">Product List</h3>

                <table class="table table-bordered table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td>
                                @if($product->p_image)
                                    <img src="{{ asset('uploads/product/'.$product->p_image) }}" width="60" height="60">
                                @else
                                    <img src="https://i.postimg.cc/1tPGxrzQ/watch.png" width="60" height="60">
                                @endif
                            </td>

                            <td>{{ $product->p_name }}</td>
                            <td>₹{{ $product->p_price }}</td>
                            <td>{{ $product->c_id }}</td>
                            <td>{{ $product->p_stock }}</td>
                            <td>{{ $product->p_description }}</td>

                            <td>
                                {{-- Edit Button --}}
                                <a href="{{ url('vendor/edit_product/'.$product->p_id) }}" 
                                   class="btn btn-info btn-sm">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>

                                {{-- Delete Button --}}
                                <button type="button"
                                        class="btn btn-danger btn-sm"
                                        onclick="confirmDelete({{ $product->p_id }})">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No products found.</td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

{{-- Scripts --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This product will be permanently deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect to GET route for deletion
            window.location.href = '/vendor/delete_product/' + id;
        }
    });
}
</script>

@endsection
