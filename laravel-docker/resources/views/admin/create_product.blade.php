@extends('admin/layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">
        
        <!-- Page Title -->
        <h1 class="h3 mb-3">Add<strong> Products</strong></h1>
        
        <!-- Card for Product Form -->
        <div class="card">
        <form action="{{ url('add_product') }}" method="POST" enctype="multipart/form-data">
        
            <div class="row">
                <!-- Product Form Start -->
                
                    
                    @csrf <!-- CSRF Token for Form Security -->

                    <div class="col-12 col-lg-6">
                        <!-- Product Name Input -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Product Name</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" name="title" class="form-control" placeholder="Enter product name" required>
                        </div>

                        <!-- Product Description Input -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Description</h5>
                        </div>
                        <div class="card-body">
                            <textarea name="description" class="form-control" rows="8" style="resize: none;" placeholder="Enter product description" required></textarea>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <!-- Product Price Input -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Price</h5>
                        </div>
                        <div class="card-body">
                            <input type="number" name="price" class="form-control" placeholder="Enter price" required>
                        </div>

                        <!-- Product Type Dropdown -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Product Type</h5>
                        </div>
                        <div class="card-body">
                            <select name="type" class="form-select mb-3" required>
                                <option selected disabled>Select Product Type</option>
                                <option value="SHOES">Shoes</option>
                                <option value="JACKET">Jacket</option>
                                <option value="LOUNGEWEAR">Loungewear</option>
                            </select>
                        </div>

                        <!-- Image Upload Input -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">Upload Image</h5>
                        </div>
                        <div class="card-body">
                            <input type="file" name="images" multiple>
                        </div>
                    </div>         
                </div>
                    <!-- Submit Button Positioned at the Bottom Right -->
                    
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary btn-sm">Add Product</button>
                    </div>
                    
            </form> <!-- End of Product Form -->
        </div>
    </div>
</main>

@endsection
