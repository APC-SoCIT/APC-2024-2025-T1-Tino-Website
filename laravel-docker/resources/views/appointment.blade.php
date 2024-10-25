@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
   <img alt="Tailor working on a suit" class="hero-image" src="https://storage.googleapis.com/a1aa/image/iKzeACp7ckUIQq4Jqv1vv9uEtXw4JPOfGONCrfHFzkWG76RnA.jpg"/>
</div>
<div class="steps">
    <div class="step active">
        <div class="step-number">1</div>
        <div class="step-text step-text-wrapped">Choose Appointment</div>
    </div>
    <div class="step">
        <div class="step-number">2</div>
        <div class="step-text step-text-wrapped">Your Information</div>
    </div>
    <div class="step">
        <div class="step-number">3</div>
        <div class="step-text step-text-wrapped">Confirmation</div>
    </div>
</div>


<div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">First Meeting</h5>
                    <p class="card-text">For existing clients who have a new order to fit or want to adjust an existing Trifo bespoke.</p>
                </div>
                <button class="btn-book">Book</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">Made-To-Order Fittings</h5>
                    <p class="card-text">In place of fitting.</p>
                </div>
                <button class="btn-book">Book</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">Consultation</h5>
                    <p class="card-text">For existing clients who want to explore the collection and consider new bespoke orders.</p>
                </div>
                <button class="btn-book">Book</button>
            </div>
        </div>
</div>


@endsection
