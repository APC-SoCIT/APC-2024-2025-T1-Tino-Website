@extends('admin/layouts.app')
<base href="/public">
@section('content')

<main class="content">
    <div class="container-fluid p-0">
        
        <!-- Page Title -->
        <h1>Update<strong> Product</strong></h1>
        
        <!-- Card for Product Form -->
        <div class="card">
        <form action="{{ url('edit_product', $products->id)}}" method="POST" enctype="multipart/form-data">
        
            <div class="row">
                <!-- Product Form Start -->
                    
                    @csrf <!-- CSRF Token for Form Security -->

                    <div class="col-12 col-lg-6">
                        <!-- Product Name Input -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Product Name</h5>
                        </div>
                        <div class="card-body">
                            <!-- Populate with the current product name value -->
                            <input type="text" name="title" class="form-control" value="{{ $products->product_title }}" required>
                        </div>

                        <!-- Product Description Input -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Description</h5>
                        </div>
                        <div class="card-body">
                            <!-- Populate with the current product description -->
                            <textarea name="description" class="form-control" rows="8" style="resize: none;" required>{{ $products->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <!-- Product Price Input -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Price</h5>
                        </div>
                        <div class="card-body">
                            <!-- Populate with the current price -->
                            <input type="number" name="price" class="form-control" value="{{ $products->price }}" required>
                        </div>

                        <!-- Product Type Dropdown -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Product Type</h5>
                        </div>
                        <div class="card-body">
                            <!-- Populate dropdown with current product type -->
                            <select name="type" class="form-select mb-3" required>
                                <!-- Current type as selected -->
                                <option value="{{ $products->product_type }}" selected>{{ $products->product_type }}</option>
                                <option value="SHOES">Shoes</option>
                                <option value="JACKET">Jacket</option>
                                <option value="LOUNGEWEAR">Loungewear</option>
                            </select>
                        </div>

                        <!-- Image Upload Input -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Images</h5>
                        </div>
                        <div class="card-body">
                            <!-- Display the current image -->
                            <img src="/product/{{ $products->images }}" alt="" width="150">
                            <br>
                            <br>
                            <input type="file" name="images" multiple>
                        </div>
                    </div>
                    <!-- Submit Button Positioned at the Bottom Right -->
                    
                    <div class="card-body text-end">
                        <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                    </div>
                    
                </form> <!-- End of Product Form -->
            </div>
        </div>
    </div>
</main>

@endsection
