@extends('layouts.app')

@section('content')
<body>
    <!-- Hero Section (Bespoke) -->
    <div class="hero-section-bespoke">
        <div class="hero-text">
            <h1>Bespoke</h1>
            <p>Quality can only be achieved by using good materials.</p>
            <p>We use the best at every step: fabric, lining, and threads.</p>
        </div>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active" aria-current="page">Bespoke</li>
        </ol>
    </nav>

    <!-- Method Section -->
    <div class="container1">      
        <div class="title">
            <h1>Method</h1>
            <p>How It's Made</p>
        </div>
    </div>
    <div class="spacer"></div>

    <!-- Measurements Section -->
    <div class="section container-fluid p-0">
        <div class="row align-items-center no-gutters">
            <div class="col-md-6 text-section">
                <h1>Measurements</h1>
                <p>A two-dimensional pattern for each part of the suit ensures the right fit and proportion based on physical features.</p>
            </div>
            <div class="col-md-6 image-section">
                <img src="/images/bespokeimg1.png" alt="Bespoke Image">
            </div>
        </div>
    </div>

    <!-- Consultation Section -->
    <div class="section container-fluid p-0">
        <div class="row align-items-center no-gutters">
            <div class="col-md-6 image-section">
                <img src="/images/bespokeimg1.png" alt="Bespoke Image">
            </div>
            <div class="col-md-6 text-section">
                <h1>Consultation</h1>
                <p>Limited only by our fabric and lining selection, our associates will help you choose what’s best for your needs.</p>
            </div>
        </div>
    </div>

    <!-- Fittings Section -->
    <div class="section container-fluid p-0">
        <div class="row align-items-center no-gutters">
            <div class="col-md-6 text-section">
                <h1>Fittings</h1>
                <p>Help make adjustments to your suit, ensuring proper fit, proportion, and comfort with the experienced eye of the tailor.</p>
            </div>
            <div class="col-md-6 image-section">
                <img src="/images/bespokeimg1.png" alt="Bespoke Image">
            </div>
        </div>
    </div>

    <!-- Artisan's Work Section -->
    <div class="section container-fluid p-0">
        <div class="row align-items-center no-gutters">
            <div class="col-md-6 image-section">
                <img src="/images/bespokeimg1.png" alt="Bespoke Image">
            </div>
            <div class="col-md-6 text-section">
                <h1>Artisan's Work</h1>
                <p>Sewing and pressing shape the garment, enhancing your body’s form.</p>
            </div>
        </div>
    </div>

<!-- Finishing Section -->
<div class="section container-fluid p-0">
    <div class="row align-items-center no-gutters">
        <div class="col-md-6 text-section">
            <h1>Finishing</h1>
            <p>Little details made by hand give it that human touch.</p>
            <!-- Add the appointment button here -->
            <a href="{{ route('appointment') }}" class="appointment-button">Make an Appointment</a>
        </div>
        <div class="col-md-6 image-section">
            <img src="/images/bespokeimg1.png" alt="Bespoke Image">
        </div>
    </div>
</div>
@endsection