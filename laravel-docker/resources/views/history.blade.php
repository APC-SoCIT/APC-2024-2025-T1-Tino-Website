@extends('layouts.app')

@section('content')
<body>

    <!-- Hero Section -->
    <div class="hero-section-history">
        <div class="hero-text">PHOTO</div>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active" aria-current="page">Our House</li>
            <li class="breadcrumb-item active" aria-current="page">History</li>
        </ol>
    </nav>

    <!-- Timeline Section for 1960 -->
    <div class="timeline-section">
        <div class="timeline-year">
            <h1>1960</h1>
        </div>
        <div class="timeline-container">
            <div class="timeline-left">
                <img src="/images/bespokeimg1.png" alt="1960 Nap begins his apprenticeship" class="img-fluid">
            </div>
            <div class="timeline-line-container">
                <div class="line"></div>
            </div>
            <div class="timeline-right">
                <h2>Surigao to Manila</h2>
                <p>Nap begins his apprenticeship</p>
            </div>
        </div>
    </div>

    <!-- Timeline Section for 1990 -->
    <div class="timeline-section">
        <div class="timeline-year">
            <h1>1990</h1>
        </div>
        <div class="timeline-container">
            <div class="timeline-right">
                <h2>Veni, Vidi, Vici</h2>
                <p>Nap goes on his apprenticeship to Italy</p>
            </div>
            <div class="timeline-line-container">
                <div class="line"></div>
            </div>
            <div class="timeline-left">
                <img src="/images/bespokeimg1.png" alt="1990 Veni, Vidi, Vici Italy Apprenticeship" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Timeline Section for 2000 -->
    <div class="timeline-section">
        <div class="timeline-year">
            <h1>2000</h1>
        </div>
        <div class="timeline-container">
            <div class="timeline-left">
                <img src="/images/bespokeimg1.png" alt="2000 Tiño Suits & Tailoring" class="img-fluid">
            </div>
            <div class="timeline-line-container">
                <div class="line"></div>
            </div>
            <div class="timeline-right">
                <h2>Tiño Suits & Tailoring</h2>
                <p>With the help of his family, Nap established his own tailoring house in Manila</p>
            </div>
        </div>
    </div>

    <!-- Timeline Section for 2010 -->
    <div class="timeline-section">
        <div class="timeline-year">
            <h1>2010</h1>
        </div>
        <div class="timeline-container last">
            <!-- Left side (text) -->
            <div class="timeline-right">
                <h2>Young Tailors</h2>
                <p>A new generation of Filipino tailors work at Tiño</p>
            </div>
            <!-- Divider with Line -->
            <div class="timeline-line-container">
                <div class="line"></div>
            </div>
            <!-- Right side (image) -->
            <div class="timeline-left">
                <img src="/images/bespokeimg1.png" alt="Young Tailors" class="img-fluid">
            </div>
        </div>
    </div>

</body>
@endsection
