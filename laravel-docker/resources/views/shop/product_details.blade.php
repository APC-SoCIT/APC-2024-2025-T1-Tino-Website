@extends('layouts.app')

@section('content')

<body>
    <div class="product-page">
        <div class="product-gallery">
            <div class="main-image placeholder"></div>
            <div class="thumbnail-images">
                <div class="thumbnail placeholder"></div>
                <div class="thumbnail placeholder"></div>
                <div class="thumbnail placeholder"></div>
            </div>
        </div>

        <div class="product-details">
            <h1>Pyjama Shirt (Short Sleeves)</h1>
            <p class="price">₱6,000.00</p>
            <p class="description">
                English tan suede moccasin with English Dainite sole. Berwick 1707 shoes are made in Almansa, a town with a rich and historic shoemaking tradition in the southeast of Spain. Manufactured using the Goodyear Welt process, the shoes are almost entirely handmade. Sourcing of raw materials and manufacturing processes meet the conditions of environmental controls established within the European Union.
            </p>
            <div class="size-options">
                <h3>Size (UK)</h3>
                <div class="sizes">
                    <button>5.5</button>
                    <button>6</button>
                    <button>6.5</button>
                    <button>7</button>
                    <button>7.5</button>
                    <button>8</button>
                    <button>8.5</button>
                    <button>9</button>
                    <button>9.5</button>
                    <button>10</button>
                    <button>10.5</button>
                    <button>11</button>
                </div>
            </div>
            <div class="quantity-control">
                <button>-</button>
                <input type="number" value="1" min="1">
                <button>+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="product-tabs">
        <button>Product Details</button>
        <button>Size Guide</button>
        <button>Shipping & Delivery</button>
        <button>Payment Method</button>
    </div>

    <div class="additional-info">
        <div class="info-item">
            <strong>Color Shown:</strong> 
        </div>
        <div class="info-item">
            <strong>Material:</strong> 
        </div>
    </div>

    <div class="similar-items">
        <h2>Similar Items</h2>
        <div class="similar-item">
            <div class="placeholder similar-placeholder"></div>
            <p>Pyjama Shirt (Short Sleeves)</p>
            <p class="price">₱6,000.00</p>
        </div>
        <div class="similar-item">
            <div class="placeholder similar-placeholder"></div>
            <p>Pyjama Shirt (Short Sleeves)</p>
            <p class="price">₱6,000.00</p>
        </div>
        <div class="similar-item">
            <div class="placeholder similar-placeholder"></div>
            <p>Pyjama Shirt (Short Sleeves)</p>
            <p class="price">₱6,000.00</p>
        </div>
    </div>
</body>

@endsection