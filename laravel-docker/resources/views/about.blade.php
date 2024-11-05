@extends('layouts.app')


@section('content')
<div class="container about-section">
    <!-- Title Section -->
    <div class="photo-placeholder">
        <h1>Manila’s Finest Bespoke Tailors</h1>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('our_house') }}">Our House</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>

    <!-- Content Grid -->
    <div class="content-grid">
        <!-- Image 1 -->
        <div class="grid-item">
            <img src="{{ asset('images/about/about1.png') }}" alt="Image of Tailor Working">
        </div>
        
        <!-- Text 1 -->
        <div class="grid-item text-content">
            <h2>Heritage</h2>
            <h3>A Family Affair</h3>
            <p>Suit & Tailoring since 1960</p>
        </div>

        <!-- Text 2 -->
        <div class="grid-item text-content">
            <h2>Our Commitment</h2>
            <h3>The Perfect Fit</h3>
            <p>Detail, Skills & The Finest Fabrics for the Best Fit</p>
        </div>

        <!-- Image 2 -->
        <div class="grid-item">
            <img src="{{ asset('images/about/about2.png') }}" alt="Image of Tailor Fitting a Suit">
        </div>

        <!-- Image 3 -->
        <div class="grid-item">
            <img src="{{ asset('images/about/about3.png') }}" alt="Image of Tailor Working on Fabric">
        </div>

        <!-- Text 3 with line breaks -->
        <div class="grid-item text-content">
            <p>
                Tino is one of the pioneers (if not the pioneer) of bespoke suits in the Philippines. Established in 1979, 
                it remains one of the strongest tailoring houses in the Philippines. The tailoring house in the 
                South of Manila and the atelier in Benavidez St. Makati are homes to its process of suits 
                being 100% handmade, which uses standard and high-quality external and internal materials.
            </p>
        </div>
    </div>
</div>
@endsection
