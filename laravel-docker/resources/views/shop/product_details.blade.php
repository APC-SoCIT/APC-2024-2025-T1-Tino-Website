@extends('layouts.app')

@section('content')

<div class="container product-container">
    <div class="product-images">
        <img alt="Side view of {{ $product->product_title }}" class="mini-image" src="{{ asset('product/' . $product->images) }}">
        <img alt="Top view of {{ $product->product_title }}" class="mini-image" src="{{ asset('product/' . $product->images) }}">
        <img alt="Back view of {{ $product->product_title }}" class="mini-image" src="{{ asset('product/' . $product->images) }}">
    </div>
    <div class="product-main-image">
        <img alt="Main view of {{ $product->product_title }}" id="mainImage" src="{{ asset('product/' . $product->images) }}" />
    </div>
    <div class="product-details">
        <h1>{{ $product->product_title }}</h1>
        <div class="product-price">₱{{ number_format($product->price, 2) }}</div>
        <p>{{ $product->description }}</p>
        <p>Product Type: {{ $product->product_type }}</p>
        <div class="size-buttons">
            <button>5.5</button>
            <button>6</button>
            <button>6.5</button>
            <button>7</button>
            <button>7.5</button>
            <button>8</button>
            <button>8.5</button>
            <button>9</button>
            <button>9.5</button>
            <button>10</button>
            <button>10.5</button>
            <button>11</button>
        </div>
        <div class="quantity-control">
            <button>-</button>
            <span>1</span>
            <button>+</button>
            <button>Add to Cart</button>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f8f5f0;
        font-family: Arial, sans-serif;
    }
    .product-container {
        display: flex;
        padding: 20px;
        width: 100%;
        max-width: 1200px; /* Control the max width of the product container */
        margin: 0 auto; /* Center the container horizontally */
        overflow: hidden; /* Prevent any overflow issues */
        gap: 20px; /* Space between mini images and main image */
        align-items: center; /* Center items vertically */
        justify-content: center; /* Center the entire row horizontally */
    }
    .product-images {
        display: flex;
        flex-direction: column;
        gap: 10px; /* Space between mini images */
        padding-right: 20px; /* Add space between mini images and main image */
    }

    .product-images img {
        width: 60px; /* Fixed height */
        height: 60px; /* Fixed height to ensure square */
        border: 1px solid #ccc;
        cursor: pointer;
        object-fit: contain; /* Maintain aspect ratio */
        border-radius: 5px; /* Optional: round corners for aesthetic */
        overflow: hidden; /* Hide overflow */
    }
    .product-main-image {
        flex-basis: 40%; /* Give more space to the main image */
    }
    .product-main-image img {
        width: 100%;
        height: auto;
        border: 1px solid #ccc;
    }
    .product-details {
        margin-left: 20px;
        flex-grow: 1; /* Allow product details to take up remaining space */
        max-width: 30%; /* Limit width of product details */
    }
    .product-details h1 {
        font-size: 24px;
        font-weight: bold;
    }
    .product-details .product-price {
        font-size: 20px;
        margin: 10px 0;
    }
    .product-details p {
        font-size: 14px;
        line-height: 1.5;
    }
    .size-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 10px 0;
    }
    .size-buttons button,
    .quantity-control button {
        border: 1px solid #ccc;
        background-color: #fff;
        padding: 5px 10px;
        cursor: pointer;
    }
    .quantity-control {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 10px 0;
    }
    .add-to-cart {
        background-color: #4b2e2e;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }
</style>

<script>
    // JavaScript to change the main image when a mini image is clicked
    const miniImages = document.querySelectorAll('.mini-image');
    const mainImage = document.getElementById('mainImage');

    miniImages.forEach(image => {
        image.addEventListener('click', function() {
            mainImage.src = this.src; // Change the main image source to the clicked mini image source
        });
    });
</script>

@endsection
