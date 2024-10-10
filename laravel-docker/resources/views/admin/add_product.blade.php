@extends('admin/layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">
        
        <!-- Page Title -->
        <h1>Add<strong> Products</strong></h1>

        <!-- Card for Product Form -->
        <div class="card">
            <div class="row">
                <div class="col-12 col-lg-6">
                
                    <!-- Product Name Input -->
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Enter product name">
                    </div>

                    <!-- Product Description Input -->
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description</h5>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" rows="2" style="width: 100%; height: 150px; resize: none;" placeholder="Enter product description"></textarea>
                    </div>   
                    
                </div>

                <div class="col-12 col-lg-6">
                    
                    <!-- Product Price -->
                    <div class="card-header">
                        <h5 class="card-title mb-0">Price</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Enter price">
                    </div>
                    
                    <!-- Product Type Dropdown -->
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Type</h5>
                    </div>
                    <div class="card-body">
                        <select class="form-select mb-3">
                            <option selected value="shoes">Shoes</option>
                            <option value="jacket">Jacket</option>
                            <option value="loungewear">Loungewear</option>
                        </select>
                    </div>

                    <!-- Image Upload Input -->
                    <div class="card-header">
                        <h5 class="card-title mb-0">Upload Image</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" name="image">
                    </div>
                    
                </div>
                
            </div>
            
            <!-- Submit Button Positioned at the Bottom Right -->
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
			
        </div>

    </div>
</main>

@endsection
