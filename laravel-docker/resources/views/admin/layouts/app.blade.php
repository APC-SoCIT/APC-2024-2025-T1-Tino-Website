<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Tino | Admin</title>

	<!-- Favicon -->
    <link rel="icon" href="{{ asset('monogram.png') }}" type="image/x-icon">
    
	<link href="admin/css/app.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
	<!-- custom css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<!-- This is the sidebar -->
        @include('admin/layouts.sidebar')

		<div class="main">
			
			<!-- This is the header -->
            @include ('admin/layouts.navbar')

			<!-- This is the body/content page -->
            @yield('content')
            
		</div>
        
	</div>
    
    <!-- @yield('scripts') -->
	<script src="admin/js/app.js"></script>

</body>

</html>