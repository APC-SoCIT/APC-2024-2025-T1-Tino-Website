<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tino | Admin</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('monogram.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="admin/css/app.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login_css.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <img alt="Logo" src="{{ asset('images/Khaki.png') }}" class="logo-image" />

        <h2>ADMIN PANEL</h2>
        <p>Sign in to manage products and appointments</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input class="form-control" placeholder="Email" type="email" name="email" required autofocus />
            <input class="form-control" placeholder="Password" type="password" name="password" required />
            <button class="btn btn-primary" type="submit">Log In</button>
        </form>
    </div>
</body>

</html>
