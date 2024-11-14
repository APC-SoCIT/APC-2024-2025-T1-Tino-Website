@extends('layouts.app', ['showNav' => false])

@section('content')
<div class="container">
    <h1>Checkout</h1>

    <form action="{{ route('processCheckout') }}" method="POST">
        @csrf

        <h3>Billing Details</h3>
        <div class="form-group">
            <label for="customer_name">Full Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
        </div>

        <div class="form-group">
            <label for="customer_email">Email</label>
            <input type="email" class="form-control" id="customer_email" name="customer_email" required>
        </div>

        <div class="form-group">
            <label for="customer_phone">Phone Number</label>
            <input type="text" class="form-control" id="customer_phone" name="customer_phone" required>
        </div>

        <div class="form-group">
            <label for="shipping_address">Shipping Address</label>
            <textarea class="form-control" id="shipping_address" name="shipping_address" rows="3" required></textarea>
        </div>

        <h3>Order Summary</h3>
        @foreach ($cartItems as $item)
            <div>
                <h3>{{ $item->product->product_title }}</h3>
                <p>Price: ₱{{ number_format($item->product->price, 2) }}</p>
                <p>Quantity: {{ $item->quantity }}</p>
                <p>Subtotal: ₱{{ number_format($item->product->price * $item->quantity, 2) }}</p>
            </div>
        @endforeach

        <div class="d-flex justify-content-between mt-3">
            <h4>Total:</h4>
            <h4>₱{{ number_format($totalAmount, 2) }}</h4>
            <input type="hidden" name="total_amount" value="{{ $totalAmount }}">
        </div>

        <button type="submit" id="payButton" class="btn btn-primary mt-3">Proceed to Payment</button>
    </form>
</div>

@endsection
