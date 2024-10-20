@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('images/welcome/hero.png') }}');">
    <div class="hero-content">
        <h1>Where Quality Counts.</h1>
        <p>Quality can only be achieved by using good materials. We use the best at every step: fabric, lining, and threads.</p>
        <button class="btn btn-discover">Discover Bespoke</button>
    </div>
</section>

    <!-- Hero Section End -->

 <!-- New Product Section -->
<section class="product-section">
    <div class="container-fluid">
        <div class="row">
            <!-- Product 1: Shoes -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/welcome/shoe.png') }}" alt="A pair of brown suede loafers">
                    <button>Explore Shoes</button>
                </div>
            </div>
            <!-- Product 2: Safari Jackets -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/welcome/shoe.png') }}" alt="A classic safari jacket">
                    <button>Explore Safari Jackets</button>
                </div>
            </div>
            <!-- Product 3: Cufflinks -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset('images/welcome/shoe.png') }}" alt="Elegant silver cufflinks">
                    <button>Explore Cufflinks</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Clip Section -->
<section class="video-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"> <!-- Full width of the 3 product cards -->
                <div class="video-wrapper">
                    <video width="100%" height="auto" controls>
                        <source src="{{ asset('videos/sample-video.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p class="video-text">VIDEO CLIP</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Featured Section -->
<section class="featured-section">
    <div class="container-fluid">
        <div class="featured-in">
            Featured In
        </div>
        <div class="logos-wrapper">
            <!-- First Set of Logos -->
            <div class="logos">
                <img src="{{ asset('images/featured/PG.png') }}" alt="Parisian Gentleman logo" width="100" height="100">
                <img src="{{ asset('images/featured/esquire.png') }}" alt="Esquire logo" width="100" height="100">
                <img src="{{ asset('images/featured/Tatler.png') }}" alt="Tatler logo" width="100" height="100">
                <img src="{{ asset('images/featured/MegaMan.png') }}" alt="Mega Man logo" width="100" height="100">
                <img src="{{ asset('images/featured/ANC.png') }}" alt="ANC logo" width="100" height="100">
            </div>
            
            <!-- Spacer to add space between sets -->
            <div class="logos spacer"></div>
            
            <!-- Second Set of Logos (duplicate for smooth scrolling) -->
            <div class="logos">
                <img src="{{ asset('images/featured/PG.png') }}" alt="Parisian Gentleman logo" width="100" height="100">
                <img src="{{ asset('images/featured/esquire.png') }}" alt="Esquire logo" width="100" height="100">
                <img src="{{ asset('images/featured/Tatler.png') }}" alt="Tatler logo" width="100" height="100">
                <img src="{{ asset('images/featured/megaman.png') }}" alt="Mega Man logo" width="100" height="100">
                <img src="{{ asset('images/featured/ANC.png') }}" alt="ANC logo" width="100" height="100">
            </div>
        </div>
    </div>
  </section>

@endsection