@extends('layouts.app')

@section('content')
<div class="container article-section">
    <!-- Photo Placeholder -->
    <div class="photo-placeholder mb-4">
        PHOTO
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('our_house') }}">Our House</a></li>
            <li class="breadcrumb-item active" aria-current="page">Articles</li>
        </ol>
    </nav>

    <!-- Title and Description -->
    <h1>Tiño in the Spotlight: Featured Articles</h1>
    <p class="lead">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make a type specimen book.</p>

   <!-- Featured Articles List -->
<div class="articles-list">
    <!-- Article 1 -->
    <div class="article-item">
        <img src="{{ asset('images/article/image1.png') }}" alt="Bespoke suits by Tiño on ANC">
        <div class="article-content">
            <h2>LOOK BACK: Bespoke suits by Tiño | ANC</h2>
            <p class="meta">ANC 24/7, February 3, 2024</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum...</p>
            <a href="https://www.youtube.com/watch?v=S3Lg8ib52-g" target="_blank" class="btn btn-read-more">Read More</a>
        </div>
    </div>

    <!-- Article 2 -->
    <div class="article-item">
        <img src="{{ asset('images/article/image2.png') }}" alt="10 Bespoke Tailor Shops in Metro Manila">
        <div class="article-content">
            <h2>10 Bespoke Tailor Shops in Metro Manila For Dapper Men</h2>
            <p class="meta">Esquire, September 8, 2021</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum...</p>
            <a href="https://www.tatlerasia.com/style/fashion/bespoke-tailor-shops-in-metro-manila" target="_blank" class="btn btn-read-more">Read More</a>
        </div>
    </div>

    <!-- Article 3 -->
    <div class="article-item">
        <img src="{{ asset('images/article/image3.png') }}" alt="8 Tailoring Shops in Manila">
        <div class="article-content">
            <h2>8 Tailoring Shops Where You Can Get the Best Men’s Suit in Manila</h2>
            <p class="meta">Tim Button, November 18, 2019</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum...</p>
            <a href="https://www.esquiremag.ph/style/fashion/6-old-school-tailoring-shops-to-suit-your-needs-a1942-20171120" target="_blank" class="btn btn-read-more">Read More</a>
        </div>
    </div>

    <!-- Article 4 -->
    <div class="article-item">
        <img src="{{ asset('images/article/image4.png') }}" alt="Affordable Tailoring in Southeast Asia">
        <div class="article-content">
            <h2>How to Get Decent and Affordable Tailoring in South East Asia?</h2>
            <p class="meta">The Guardian, January 9, 2019</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum...</p>
            <a href="https://sulit.ph/40-best-tailors-in-metro-manila-for-perfectly-fitted-clothing/" target="_blank" class="btn btn-read-more">Read More</a>
        </div>
    </div>
</div>

</div>
@endsection
