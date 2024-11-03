@extends('layouts.app')

@section('custom-css')
<style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10;
            background-color: transparent !important;
            transition: background-color 0.3s ease; /* Smooth transition */
        }
         .navbar.scrolled {
             background-color: #FBFAF1 !important;
        }
        .navbar.scrolled .nav-link,
        .navbar.scrolled .navbar-icons i,
        .navbar.scrolled .navbar-brand img {
            color: #333 !important;
            filter: brightness(1) invert(0);
}
        
        .nav-link {
            color: #fff !important; /* Ensure links are visible on transparent background */
        }
        .navbar-brand img {
            filter: brightness(0) invert(1); /* Adjust logo for better visibility */
        }
        .hero-section {
            height: 100vh; /* Full screen height */
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
    </style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section
" style="background-image: url('{{ asset('images/welcome/hero.png') }}');">
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
                    <video width="100%" height="auto" autoplay muted loop>
                        <source src="{{ asset('video/welcome.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
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
                <img src="{{ asset('images/featured/MegaMan.png') }}" alt="Mega Man logo" width="100" height="100">
                <img src="{{ asset('images/featured/ANC.png') }}" alt="ANC logo" width="100" height="100">
            </div>
        </div>
    </div>
  </section>

<!-- Tiño Services Section -->
<section class="services-section">
    <div class="container">
        <h2>Tiño Services</h2>
        <a href="#" class="discover-more">Discover More</a>

        <div class="row service-cards">
            <!-- First Card -->
            <div class="service-card first-card">
                <div class="video-placeholder">
                    <p>VIDEO CLIP</p>
                    <span class="play-icon">▶</span>
                </div>
                <h4>First Meeting</h4>
                <p>For first-time clients that want to explore our made-to-measure bespoke.</p>
                <button class="schedule-btn">Schedule</button>
            </div>

            <!-- Second Card -->
            <div class="service-card second-card">
                <div class="video-placeholder">
                    <p>VIDEO CLIP</p>
                    <span class="play-icon">▶</span>
                </div>
                <h4>Consultation</h4>
                <p>For existing clients who want to explore the collection and consider new bespoke orders.</p>
                <button class="schedule-btn">Schedule</button>
            </div>

        </div>
    </div>
</section>

<!-- History of Tiño Section -->
<section class="history-section">
    <div class="container">
        <h2>History of Tiño</h2>
        <a href="#" class="discover-more">Discover More</a>

        <!-- Carousel Wrapper -->
        <div class="carousel-wrapper">
            <!-- Back Button -->
            <button class="carousel-btn prev-btn" onclick="prevImage()">&#10094;</button>

            <!-- Images -->
            <div class="carousel-images">
                <img src="{{ asset('images/history/h1.jpg') }}" alt="Tailor Measuring" class="carousel-img">
                <img src="{{ asset('images/history/h2.jpg') }}" alt="Bespoke Suit" class="carousel-img">
                <img src="{{ asset('images/history/h3.jpg') }}" alt="Tailoring Fabric" class="carousel-img">
                <img src="{{ asset('images/history/h4.jpg') }}" alt="Tailoring History" class="carousel-img">
            </div>

            <!-- Next Button -->
            <button class="carousel-btn next-btn" onclick="nextImage()">&#10095;</button>
        </div>
    </div>
</section>

<!-- Cloth Selections Section -->
<section class="cloth-selections-section">
    <div class="container-fluid">
        <div class="featured-in">
            Cloth Selections Include
        </div>
        <div class="cloth-logos-wrapper">
        <div class="logos">
        <img src="{{ asset('images/cloth/HollandSherry.png') }}" alt="Holland & Sherry Logo">
        <img src="{{ asset('images/cloth/Placienza.png') }}" alt="Piacenza Logo">
        <img src="{{ asset('images/cloth/Vitale.png') }}" alt="Vitale Barberis Logo">
        <img src="{{ asset('images/cloth/Paladino.jpg') }}" alt="Paladino Logo">
        <img src="{{ asset('images/cloth/FoxBrothers.png') }}" alt="Fox Brothers Logo">
        <img src="{{ asset('images/cloth/Drapers.png') }}" alt="Drapers Logo">
        <img src="{{ asset('images/cloth/NJB.png') }}" alt="NJB Trading Logo">
        </div>

        <div class="logos spacer"></div>

        <div class="cloth-logos-wrapper">
        <div class="logos">
        <img src="{{ asset('images/cloth/HollandSherry.png') }}" alt="Holland & Sherry Logo">
        <img src="{{ asset('images/cloth/Placienza.png') }}" alt="Piacenza Logo">
        <img src="{{ asset('images/cloth/Vitale.png') }}" alt="Vitale Barberis Logo">
        <img src="{{ asset('images/cloth/Paladino.jpg') }}" alt="Paladino Logo">
        <img src="{{ asset('images/cloth/FoxBrothers.png') }}" alt="Fox Brothers Logo">
        <img src="{{ asset('images/cloth/Drapers.png') }}" alt="Drapers Logo">
        <img src="{{ asset('images/cloth/NJB.png') }}" alt="NJB Trading Logo">
        </div>

    </div>
</section>




@endsection