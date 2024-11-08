@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Cart</h1>
    
    @if($cartItems->isEmpty())
        <p>Your cart is empty.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <?php

            $value=0;

            ?>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        @if ($item->product)
                            <td>{{ $item->product->product_title }}</td>
                            <td>{{ $item->product->price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <img width="150" src="/product/{{ $item->product->images }}" alt="">
                            </td>
                            <td>
                                <form action="{{ route('delete.cart', $item->product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i data-feather="trash"></i> Remove
                                    </button>
                                </form>
                            </td>
                        @else
                            <td colspan="5">This product is no longer available.</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection