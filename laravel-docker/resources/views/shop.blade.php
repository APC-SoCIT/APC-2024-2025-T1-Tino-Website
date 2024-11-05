@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="hero-section" style="background-image: url('{{ asset('images/welcome/hero.png') }}');">
      <div class="hero-content">
      </div>
  </section>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="navbar-collapse">
        <ul class="navbar-nav justify-content-between w-100">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('shop.shoes') }}">Shoes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('shop.jackets') }}">Safari Jackets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('shop.gift_cards') }}">Gift Cards</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('shop.accessories') }}">Accessories</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-md-3">
        <div class="filters">
          <h5>Filters</h5>
          <input class="form-control" placeholder="Search" type="text"/>
          <select class="form-select">
            <option selected="">Category</option>
          </select>
          <select class="form-select">
            <option selected="">Sort By</option>
          </select>
          <div class="color-picker-container">
          <h6>Color</h6>
          <div class="color-buttons">
        <div class="color-button color-gold"></div>
        <div class="color-button color-blue"></div>
        <div class="color-button color-brown"></div>
        <div class="color-button color-red"></div>
        <div class="color-button color-darkblue"></div>
        <div class="color-button color-olive"></div>
        <div class="color-button color-pink"></div>
        <div class="color-button color-beige"></div>
        <div class="color-button color-black"></div>
    </div>
</div>
<div class="filter-container">
    <!-- Price Range -->
    <h6 class="price-label">Price: ₱<span id="minPrice">1000</span> - ₱<span id="maxPrice">60000</span></h6>
    <input id="priceRange" class="form-range" max="60000" min="1000" type="range" value="1000" step="500">
    
    <!-- On Sale Toggle -->
    <div class="form-check form-switch">
        <input class="form-check-input" id="onSale" type="checkbox"/>
        <label class="form-check-label" for="onSale">On Sale</label>
    </div>
    
    <!-- In Stock Toggle -->
    <div class="form-check form-switch">
        <input class="form-check-input" id="inStock" type="checkbox"/>
        <label class="form-check-label" for="inStock">In Stock</label>
    </div>
</div>
          <button class="btn mt-3">Gift Cards</button>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          @foreach ($products as $product)
              <div class="col-md-4">
                  <a href="{{ route('product.details', ['id' => $product->id]) }}" class="text-decoration-none"> <!-- Add link -->
                      <div class="card product-card">
                          <img class="card-img-top" src="{{ asset('product/' . $product->images) }}" alt="{{ $product->product_title }}"/>
                          <div class="card-header" style="border-bottom: none;">
                              <h5 class="card-title mb-0 text-start">{{ $product->product_title }}</h5>
                          </div>
                          <div class="card-body" style="padding: 0.5rem 1rem;">
                              <p class="card-text price-text">₱{{ number_format($product->price, 2) }}</p>
                          </div>
                      </div>
                  </a> <!-- Closing link -->
              </div>
          @endforeach
      </div>

      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const priceRange = document.getElementById('priceRange');
      const minPrice = document.getElementById('minPrice');
      
      priceRange.addEventListener('input', function() {
        minPrice.textContent = priceRange.value;
      });
    });
  </script>
@endsection
