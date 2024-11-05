@extends('layouts.app')

@section('content')
<body>
    <!-- Hero Section (Original) -->
    <div class="hero-section">
        <div class="hero-text">PHOTO</div>
    </div>

    <!-- Breadcrumb (Original) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active" aria-current="page">Our House</li>
        </ol>
    </nav>

    <!-- Content Section (What is Lorem Ipsum?) -->
    <div class="content-section">
        <h2>What is Lorem Ipsum?</h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>

    <!-- ONE -->
    <div class="image-one">
        <div class="image-text-overlay">History</div>
    </div>

    <div class="button-and-line">
        <a href="{{ route('history') }}" class="learn-more-button">Learn More</a>
        <hr class="divider-line" />
    </div>

    <!-- About Us -->

    <div class="image-two">
        <div class="image-text-overlay">About Us</div>
    </div>

    <div class="button-and-line">
        <a href="{{ route('appointment') }}" class="learn-more-button">Learn More</a>
        <hr class="divider-line" />
    </div>

    <!-- Article< -->

    <div class="image-three">
        <div class="image-text-overlay">Article</div>
    </div>

    <div class="button-and-line">
        <a href="{{ route('appointment') }}" class="learn-more-button">Learn More</a>
        <hr class="divider-line" />
    </div>

    <!-- Map -->

    <div class="image-four">
        <div class="image-text-overlay">Map</div>
    </div>

    <div class="button-and-line">
        <a href="{{ route('appointment') }}" class="learn-more-button">Learn More</a>
        <hr class="divider-line" />
    </div>


</body>
@endsection
