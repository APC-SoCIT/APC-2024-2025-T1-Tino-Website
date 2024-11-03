<!-- resources/views/map.blade.php -->

@extends('layouts.app') <!-- Use your main layout file -->

@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Left Section: Store Information -->
        <div class="col-md-4" style="border: 2px solid #3D1515; border-radius: 8px; padding: 0;">
            <div class="card p-4 border">
                <h5 class="mb-3 font-weight-bold">Tiño Suits & Tailoring</h5>
                <p>
                    Herco Center, 114 Benavidez Street<br>
                    Legazpi Village, Makati<br>
                    1229, Metro Manila
                </p>

                <h6 class="mt-4 font-weight-bold" style="color: #3D1515;">Store Hours</h6>
                <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                        <span>Sunday</span><span>Closed</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Monday</span><span>12:30 PM - 6:00 PM</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Tuesday</span><span>12:30 PM - 6:00 PM</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Wednesday</span><span>12:30 PM - 6:00 PM</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Thursday</span><span>12:30 PM - 6:00 PM</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Friday</span><span>12:30 PM - 6:00 PM</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Saturday</span><span>12:30 PM - 5:30 PM</span>
                    </li>
                </ul>
                <a href="https://www.google.com/maps/dir/?api=1&destination=Herco+Center,+114+Benavidez+Street,+Makati" target="_blank" class="btn btn-link p-0 get-directions">Get Directions</a>
                <br>
                <a href="{{ route('appointment') }}" class="appointment-button mt-3">Make an Appointment</a>
            </div>
        </div>

        <!-- Right Section: Google Map -->
        <div class="col-md-8">
            <div id="map" style="width: 100%; height: 600px;"></div>
        </div>
    </div>
</div>
@endsection  

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
@endsection