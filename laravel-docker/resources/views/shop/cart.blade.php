@extends('layouts.app', ['showFooter' => false])

@section('content')
<div class="container">
    <h1 class="my-4">Your Cart</h1>

    @if($cartItems->isEmpty())
        <div class="alert alert-info">Your cart is empty.</div>
    @else
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th> <!-- New column for per-item total -->
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @php $totalValue = 0; @endphp

                    @foreach($cartItems as $item)
                        <tr>
                            @if ($item->product)
                                <td class="align-middle" style="width: 150px;">
                                    <img src="/product/{{ $item->product->images }}" alt="{{ $item->product->product_title }}" class="img-fluid">
                                </td>
                                <td class="align-middle">{{ $item->product->product_title }}</td>
                                <td class="align-middle">₱{{ number_format($item->product->price, 2) }}</td>
                                <td class="align-middle">{{ $item->quantity }}</td>
                                <td class="align-middle">₱{{ number_format($item->product->price * $item->quantity, 2) }}</td> <!-- Per-item total -->
                                <td class="align-middle">
                                    <form action="{{ route('delete.cart', $item->product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i data-feather="trash"></i> Remove
                                        </button>
                                    </form>
                                </td>
                            @else
                                <td colspan="6" class="text-center text-muted">This product is no longer available.</td>
                            @endif
                        </tr>

                        @php $totalValue += $item->product->price * $item->quantity; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-right mt-4">
            <h4>Total: ₱{{ number_format($totalValue, 2) }}</h4>
        </div>

        <!-- Centered Buttons with Custom Styles -->
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('shop') }}" class="btn mx-3" style="border: 2px solid #4b2e2a; color: #4b2e2a;">See More Products</a>
            <a href="{{ route('checkout') }}" class="btn mx-3" style="background-color: #4b2e2a; color: #fff; border: 2px solid #4b2e2a;">Proceed to Checkout</a>
        </div>

    @endif
</div>
@endsection
