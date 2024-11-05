@extends('layouts.app')

@section('content')
<div class="container gallery-section">
    <div class="row">
        <!-- First Image - No Offset -->
        <div class="col-md-6 gallery-item">
            <img src="{{ asset('images/gallery/gallery1.png') }}" alt="Gallery Image 1">
        </div>
        
        <!-- Second Image - Offset to Align with First Image -->
        <div class="col-md-6 gallery-item align-top">
            <img src="{{ asset('images/gallery/gallery2.png') }}" alt="Gallery Image 2">
        </div>
        
        <!-- Remaining Images in Staggered Layout -->
        <div class="col-md-6 gallery-item">
            <img src="{{ asset('images/gallery/gallery3.png') }}" alt="Gallery Image 3">
        </div>
        <div class="col-md-6 gallery-item offset-down">
            <img src="{{ asset('images/gallery/gallery4.png') }}" alt="Gallery Image 4">
        </div>

        <div class="col-md-6 gallery-item">
            <img src="{{ asset('images/gallery/gallery5.png') }}" alt="Gallery Image 5">
        </div>
        <div class="col-md-6 gallery-item offset-down">
            <img src="{{ asset('images/gallery/gallery6.png') }}" alt="Gallery Image 6">
        </div>

        <div class="col-md-6 gallery-item" style="margin-top: -190px;">
            <img src="{{ asset('images/gallery/gallery7.png') }}" alt="Gallery Image 7">
        </div>
        <div class="col-md-6 gallery-item offset-down" style="margin-top: 10px;">
            <img src="{{ asset('images/gallery/gallery8.png') }}" alt="Gallery Image 8">
        </div>
    </div>
</div>
@endsection
