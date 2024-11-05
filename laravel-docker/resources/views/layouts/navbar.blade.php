<nav class="navbar navbar-expand-lg ">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">
        <img alt="TIÑO logo" src="{{ asset('images/JostSanguine.png') }}"/>
    </a>
    <div class="collapse navbar-collapse">
        <div class="navbar-nav-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/bespoke') }}">Bespoke</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('our_house') }}">Our House</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('appointment') }}">Make an Appointment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-icons" href="#">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="cart-badge">{{$count}}</span> 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-icons" href="#"><i class="fas fa-search"></i></a>
            </li>
        </ul>
    </div>
</nav>
<!-- mobile menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bespoke') }}">Bespoke</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('shop') }}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('our_house') }}">Our House</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('appointment') }}">Make an Appointment</a>
            </li>
        </ul>
    </div>
</div>
