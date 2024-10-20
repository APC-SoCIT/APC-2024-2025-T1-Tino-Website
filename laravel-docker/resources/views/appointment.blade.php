@extends('layouts.app')

@section('content')
    <!-- progress line -->
    <div class="container">
        <div class="photo-placeholder">
            PHOTO
        </div>
        <div class="step-indicator">
            <div class="step active">
                <div class="circle">1</div>
                <div>Choose Appointment</div>
            </div>
            <div class="line-between line-between-1-2"></div> 
            <div class="step">
                <div class="circle">2</div>
                <div>Your Information</div>
            </div>
            <div class="line-between line-between-2-3"></div> 
            <div class="step">
                <div class="circle">3</div>
                <div>Confirmation</div>
            </div>
        </div>
    </div>

    <!-- choose -->
    <!-- <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">First Meeting</h5>
                    <p class="card-text">For existing clients who have a new order to fit or want to adjust an existing Tiño bespoke.</p>
                </div>
                <button class="btn btn-book">Book</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">Fitting</h5>
                    <p class="card-text">For first time clients that want to explore our made to measure bespoke.</p>
                </div>
                <button class="btn btn-book">Book</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">Consultation</h5>
                    <p class="card-text">For existing clients who want to explore the collection and consider new bespoke orders.</p>
                </div>
                <button class="btn btn-book">Book</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">Pick - Up</h5>
                    <p class="card-text">For existing clients who want to pick-up or drop-off an existing Tiño bespoke.</p>
                </div>
                <button class="btn btn-book">Book</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">Atelier Visit</h5>
                    <p class="card-text">For clients who want to explore our craftmanship and discuss future bespoke projects.</p>
                </div>
                <button class="btn btn-book">Book</button>
            </div>
        </div>
    </div> -->
@endsection