@extends('layouts.app')

@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="giftcard.css">
</head>
<body>
    <!-- Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('images/welcome/hero.png') }}');">
    <div class="hero-content">
    </div>
</section>

    <!-- Hero Section End -->

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
  
      <div class="flex-row">
      <a class="image" href="#">
            <img alt="TIÑO logo" src="{{ asset('images/shop/olpianaandres.png') }}"/>
        </a>
        <span class="olpiana-andres-gift-card">Olpiana Andres Gift Card</span>
        <span class="delivery-info">
          Delivery within 48 hours within Metro Manila and 3 days if outside
          Metro Manila. Not applicable for overseas purchase. 
      <ul>
        <li>The card is for ONE TIME USE ONLY</li>
        <li>Client must consume the value in one-time use; unused amount won’t be paid by Olpiana Andres and cannot be carried over to the next purchase</li>
        <li>A unique control number is provided at the back of each card</li>
        <li>Non-reloadable, transferable</li>
        <li>Validity: No expiry, until used</li>
        <li>Available all-year round</li>
      </ul>
          </span>
      </div>
      
      <!-- Gift Cards -->
      <span class="denominations">Denominations</span>
      <div class="flex-row-d">
      <div class="image-3">
            <img src="{{ asset('images/shop/giftcard1.png') }}" alt="Gift Card 4">
            </div>
            <div class="image-4">
            <img src="{{ asset('images/shop/giftcard2.png') }}" alt="Gift Card 5">
            </div>
            <div class="image-5">
            <img src="{{ asset('images/shop/giftcard3.png') }}" alt="Gift Card 6">
            </div>
        <button class="button-time">
          <span class="price-20000">₱20,000.00</span></button
        ><button class="button-time-6">
          <span class="price-30000">₱30,000.00</span></button
        ><button class="button-time-7">
          <span class="price-50000">₱50,000.00</span>
        </button>
        <div class="rectangle-8">
          <div class="minus"><div class="vector"></div></div>
          <div class="plus"></div>
          <span class="span">1</span>
        </div>
        <button class="button-group">
          <div class="rectangle-9"><span class="buy-now">Buy Now</span></div>
        </button>
      </div>
      
      <div class="flex-row-db">
      <a class="image-a" href="#">
            <img alt="Gift Card 4" src="{{ asset('images/shop/giftcard4.png') }}"/>
        </a>
        <span class="olpiana-andres-gift-card">Olpiana Andres Gift Card</span>
        <span class="delivery-info">
          Delivery within 48 hours within Metro Manila and 3 days if outside
          Metro Manila. Not applicable for overseas purchase. 
      <ul>
        <li>The card is for ONE TIME USE ONLY</li>
        <li>Client must consume the value in one-time use; unused amount won’t be paid by Olpiana Andres and cannot be carried over to the next purchase</li>
        <li>A unique control number is provided at the back of each card</li>
        <li>Non-reloadable, transferable</li>
        <li>Validity: No expiry, until used</li>
        <li>Available all-year round</li>
      </ul>
          </span>
      </div>
      <span class="denominations-d">Denominations</span>
      <div class="flex-row-e">
      <div class="image-e">
            <img src="{{ asset('images/shop/giftcard4.png') }}" alt="Gift Card 4">
            </div>
            <div class="image-f">
            <img src="{{ asset('images/shop/giftcard5.png') }}" alt="Gift Card 5">
            </div>
            <div class="image-10">
            <img src="{{ asset('images/shop/giftcard6.png') }}" alt="Gift Card 6">
            </div>
        <button class="time"><span class="price-box">₱20,000.00</span></button
        ><button class="time-button">
          <span class="price-box-11">₱30,000.00</span></button
        ><button class="time-button-12">
          <span class="price-box-13">₱50,000.00</span>
        </button>
        <div class="rectangle-box">
          <div class="minus-box"><div class="vector-box"></div></div>
          <div class="plus-box"></div>
          <span class="number-span">1</span>
        </div>
        <button class="group-button">
          <div class="rectangle-box-14">
            <span class="buy-now-span">Buy Now</span>
          </div>
        </button>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

@endsection