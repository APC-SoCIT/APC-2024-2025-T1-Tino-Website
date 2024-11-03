@extends('layouts.app')

@section('content')
<body>
  <!-- Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('images/welcome/hero.png') }}');">
    <div class="hero-content">
    </div>
</section>

    <!-- Hero Section End -->

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

 <div class="dropdown-container">
          
        <div class="search-bar">
    <input type="text" placeholder="Search">
    <button type="submit"><i class="search-icon">🔍</i></button>
  </div>

  <div class="dropdown">
    <button class="dropdown-button">Category</button>
    <div class="dropdown-content">
      <a href="#">Option 1</a>
      <a href="#">Option 2</a>
      <a href="#">Option 3</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropdown-button">Sort By</button>
    <div class="dropdown-content">
      <a href="#">Option A</a>
      <a href="#">Option B</a>
      <a href="#">Option C</a>
    </div>
  </div>

  <div class="color-box">
    <p class="color-label">Color</p>
    <div class="color-options">
      <div class="color-circle" style="background-color: #A2834D;"></div>
      <div class="color-circle" style="background-color: #0000FF;"></div>
      <div class="color-circle" style="background-color: #4B3026;"></div>
      <div class="color-circle" style="background-color: #8B0000;"></div>
      <div class="color-circle" style="background-color: #000080;"></div>
      <div class="color-circle" style="background-color: #808000;"></div>
      <div class="color-circle" style="background-color: #FFC0CB;"></div>
      <div class="color-circle" style="background-color: #D2B48C;"></div>
      <div class="color-circle" style="background-color: #2F2F2F;"></div>
    </div>
    
    <div class="price-range">
    <label for="price">Price: <span id="price-display">₱1,000 - ₱60,000</span></label>
    <div class="slider-container">
        <input type="range" id="min-price" min="1000" max="60000" step="100" value="1000">
        <input type="range" id="max-price" min="1000" max="60000" step="100" value="60000">
    </div>

    <div class="toggle-container">
    <span>On Sale</span>
    <label class="switch">
        <input type="checkbox">
        <span class="slider"></span>
    </label>
    </div>

    <div class="toggle-container">
    <span>In Stock</span>
    <label class="switch">
        <input type="checkbox">
        <span class="slider"></span>
    </label>
</div>
        <button class="button" href="{{ route('giftcard') }}">
          <span class="make-appointment">Gift Cards</span>
        </button>
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
      <div class="flex-row-f">
        <div class="rectangle-1e"></div>
        <div class="rectangle-1f"></div>
        <div class="rectangle-20"></div>
      
</div>
</body>

<script>
        // Select the elements
const minPriceSlider = document.getElementById("min-price");
const maxPriceSlider = document.getElementById("max-price");
const priceDisplay = document.getElementById("price-display");

// Update the displayed price range
function updatePriceDisplay() {
    let minPrice = parseInt(minPriceSlider.value);
    let maxPrice = parseInt(maxPriceSlider.value);

    // Ensure min-price slider does not go beyond max-price slider
    if (minPrice > maxPrice) {
        minPrice = maxPrice;
        minPriceSlider.value = minPrice;
    }

    // Ensure max-price slider does not go below min-price slider
    if (maxPrice < minPrice) {
        maxPrice = minPrice;
        maxPriceSlider.value = maxPrice;
    }

    // Update the display
    priceDisplay.textContent = `₱${minPrice.toLocaleString()} - ₱${maxPrice.toLocaleString()}`;
}

// Event listeners for slider changes
minPriceSlider.addEventListener("input", updatePriceDisplay);
maxPriceSlider.addEventListener("input", updatePriceDisplay);

// Initial update
updatePriceDisplay();

    </script>
@endsection