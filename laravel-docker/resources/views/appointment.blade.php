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
    
    <link href="admin/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <!-- custom css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <style>
        .navbar {
            background-color: #f8f6ef;
            padding: 1rem 2rem;
        }
        .navbar-brand img {
            height: 30px; /* Adjust the height as needed */
        }
        .nav-link {
            font-family: 'Gotham', sans-serif;
            font-size: 1rem;
            color: #333;
            margin-right: 1.5rem;
        }
        .nav-link:hover {
            color: #000;
        }
        .nav-link.active {
            font-weight: bold;
            text-decoration: underline;
            text-underline-offset: 10px; /* Adds more space between text and underline */
        }
        .navbar-icons {
            font-size: 1.2rem;
            color: #333;
            margin-left: 0.1rem; /* Reduce space between icons */
        }
        .navbar-nav-center {
            display: flex;
            justify-content: center; /* Centering the nav items */
            flex-grow: 1; /* Allow the nav items to take available space */
        }
        @media (max-width: 767.98px) {
            .navbar-brand {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }
            .navbar-toggler {
                margin-right: auto;
            }
        }
    </style>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
