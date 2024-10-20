<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <title>Tino</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('monogram.png') }}" type="image/x-icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- bootsrap -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <!-- custom css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/appointment.css') }}" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img alt="TIÑO logo" src="{{ asset('images/JostSanguine.png') }}"/>
        </a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bespoke</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our House</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Make an Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-icons" href="#"><i class="fas fa-shopping-bag"></i></a>
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
                    <a class="nav-link" href="#">Bespoke</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our House</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Make an Appointment</a>
                </li>
            </ul>
        </div>
    </div>

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
            <div class="line-between line-between-1-2"></div> <!-- Line between 1 and 2 -->
            <div class="step">
                <div class="circle">2</div>
                <div>Your Information</div>
            </div>
            <div class="line-between line-between-2-3"></div> <!-- Line between 2 and 3 -->
            <div class="step">
                <div class="circle">3</div>
                <div>Confirmation</div>
            </div>
        </div>
    </div>

    <!-- choose -->
    <div class="container mt-5">
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
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
