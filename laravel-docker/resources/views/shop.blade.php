@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Link to your CSS file -->
    <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
</head>
<body>
    <div class="rectangle"><span class="photo">PHOTO</span></div>
    <div class="rectangle-2">
  <div class="text-item">Shoes</div>
  <div class="text-item">Safari Jackets</div>
  <div class="text-item">Cufflinks</div>
  <div class="text-item">Lapel Pins</div>
  <div class="text-item">Pocket Squares</div>
  <div class="text-item">Shoes & Ties</div>
</div>
      <div class="flex-row">
      <a class="image" href="#">
            <img alt="TIÑO logo" src="{{ asset('images/product/olpianaandres.png') }}"/>
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
      <span class="denominations">Denominations</span>
      <div class="flex-row-d">
      <a class="image-3" href="#">
            <img alt="Gift Card 1" src="{{ asset('images/product/giftcard1.png') }}"/>
        </a>
        <a class="image-4" href="#">
            <img alt="Gift Card 2" src="{{ asset('images/product/giftcard2.png') }}"/>
        </a>
        <a class="image-5" href="#">
            <img alt="Gift Card 3" src="{{ asset('images/product/giftcard3.png') }}"/>
        </a>
      </div>
        <button class="button-time">
          <span class="price-20000">₱20, 000.00</span></button
        ><button class="button-time-6">
          <span class="price-30000">₱30, 000.00</span></button
        ><button class="button-time-7">
          <span class="price-50000">₱50, 000.00</span>
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
        <div class="image-a"></div>
        <span class="olpiana-andres-gift-card-b">Olpiana Andres Gift Card</span>
        <span class="delivery-info-c">
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
        <div class="image-e"></div>
        <div class="image-f"></div>
        <div class="image-10"></div>
        <button class="time"><span class="price-box">₱20, 000.00</span></button
        ><button class="time-button">
          <span class="price-box-11">₱30, 000.00</span></button
        ><button class="time-button-12">
          <span class="price-box-13">₱50, 000.00</span>
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
      <div class="vector-box-15"></div>
      <span class="newsletter-span">Subscribe to Newsletter</span>
      <div class="flex-row-box">
        <button class="rectangle-button">
          <span class="subscribe">Subscribe</span></button
        ><span class="enter-email-address">Enter Your Email Address</span>
        <div class="vector-16"></div>
      </div>
      <div class="flex-row-ff">
        <div class="ellipse"></div>
        <div class="social-media"></div>
        <div class="vector-17"></div>
      </div>
      <div class="vector-18"></div>
      <div class="jost-sanguine-19"></div>
      <div class="flex-row-e-1a">
        <span class="about">About</span><span class="gallery">Gallery</span
        ><span class="contact">Contact</span><span class="map">Map</span>
      </div>
      <div class="rectangle-1b"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

@endsection