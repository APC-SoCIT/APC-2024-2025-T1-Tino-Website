@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
<div class="container contact-section">
    <!-- Photo Placeholder -->
    <div class="photo-placeholder mb-4">
        PHOTO
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('our_house') }}">Our House</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Left Column: Contact Details -->
        <div class="col-md-4 contact-details">
    <h5 class="mb-3">Location</h5>
    <p>
        <i class="fas fa-map-marker-alt"></i> 
        <a href="https://www.google.com/maps/dir/?api=1&destination=Herco+Center,+114+Benavidez+Street,+Makati" target=”_blank”>G/F Herco Center 114 Benavidez St.<br>
        Brgy. San Lorenzo, Makati City</a>
    </p>

    <h5 class="mt-4 mb-3">Contact Details</h5>
    <p>
        <i class="fas fa-phone"></i> (02) 8 511-1274
    </p>
    <p>
        <i class="fas fa-mobile-alt"></i> (0917) 806-5771
    </p>

    <h5 class="mt-4 mb-3">Customer Service</h5>
    <p>
        <i class="fas fa-envelope"></i> (0917) 806-5771
    </p>
</div>

        <!-- Right Column: Contact Form and Terms of Use -->
        <div class="col-md-8">
            <form>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First Name *" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last Name *" required>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email Address *" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="5" placeholder="Message *" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Send</button>
            </form>

            <!-- Terms of Use on the right side -->
            <div class="terms-of-use mt-4">
                <h5>Terms of Use</h5>
                <p>
                    The personal information you provide through the form above will be processed solely for the purpose of addressing your inquiry.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
