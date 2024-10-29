@extends('layouts.app')

@section('content')
<body>
  <div class="rectangle"> 
    <img class="photo" src="images/shop/placeholder.png" alt="Photo">
  </div>
    <div class="rectangle-69">
  <a class="text-item" href="{{ route('shoes') }}">Shoes</a>
  <a class="text-item" href="{{ route('jackets') }}">Safari Jackets</a>
  <a class="text-item" href="{{ route('giftcard') }}">Gift Cards</a>
  <a class="text-item" href="{{ route('accessories') }}">Accessories</a>
    </div>
      <span class="filters">Filters</span>
      <div class="flex-row-ffa">
        <div class="rectangle-2b"></div>
        <div class="rectangle-3"></div>
        <div class="rectangle-4"></div>
        <div class="search-5"></div>
        <div class="search-6"></div>
        <div class="vector"></div>
        <div class="rectangle-7">
          <div class="frame-8"><div class="vector-9"></div></div>
          <span class="category">Category</span>
        </div>
        <div class="rectangle-a">
          <div class="frame-b"><div class="vector-c"></div></div>
          <span class="sort-by">Sort By</span>
        </div>
        <div class="rectangle-d">
          <span class="color">Color</span>
          <div class="flex-row-a">
            <div class="vector-e"></div>
            <div class="vector-f"></div>
            <div class="vector-10"></div>
            <div class="vector-11"></div>
            <div class="vector-12"></div>
          </div>
          <div class="flex-row-dce">
            <div class="vector-13"></div>
            <div class="vector-14"></div>
            <div class="vector-15"></div>
            <div class="vector-16"></div>
          </div>
        </div>
        <span class="pyjama-shirt-short-sleeves"
          >Pyjama Shirt (Short Sleeves)</span
        ><span class="pyjama-shirt-short-sleeves-17"
          >Pyjama Shirt (Short Sleeves)</span
        ><span class="pyjama-shirt-short-sleeves-18"
          >Pyjama Shirt (Short Sleeves)</span
        >
      </div>
      <div class="flex-row-19">
        <span class="price">₱6, 000.00</span
        ><span class="price-1a">₱6, 000.00</span
        ><span class="price-1b">₱6, 000.00</span>
      </div>
      <div class="price-range">
        <span class="price-separator">Price: </span
        ><span class="currency-symbol">₱</span
        ><span class="price-separator-1c">1000 - </span
        ><span class="currency-symbol-1d">₱</span
        ><span class="price-value">60000</span>
      </div>
      <div class="price-line"></div>
      <div class="flex-row-f">
        <div class="rectangle-1e"></div>
        <div class="rectangle-1f"></div>
        <div class="rectangle-20"></div>
        <span class="on-sale">On Sale</span>
        <div class="icon-color"></div>
        <div class="icon-color-21"></div>
        <span class="in-stock">In Stock</span
        ><button class="button">
          <span class="make-appointment">Gift Cards</span>
        </button>
      </div>
      <div class="flex-row-aae">
        <span class="pyjama-shirt">Pyjama Shirt (Short Sleeves)</span
        ><span class="pyjama-shirt-22">Pyjama Shirt (Short Sleeves)</span
        ><span class="pyjama-shirt-23">Pyjama Shirt (Short Sleeves)</span>
      </div>
      <div class="flex-row-24">
        <span class="price-25">₱6, 000.00</span
        ><span class="price-26">₱6, 000.00</span
        ><span class="price-27">₱6, 000.00</span>
      </div>
      <div class="flex-row-d">
        <div class="rectangle-28"></div>
        <div class="rectangle-29"></div>
        <div class="rectangle-2a"></div>
      </div>
</body>
@endsection