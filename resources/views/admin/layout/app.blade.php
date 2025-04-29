<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/pe-logo-icon.png')}}">

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>CMS Admin ProEnergi</title>

	<link href="{{ asset('adm_assets/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
	<!-- Tambahkan SweetAlert2 CDN di dalam tag <head> atau sebelum </body> -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
	

</head>

<body>
	<div class="wrapper">
        @include('admin.layout.sidebar')

		<div class="main">
            @include('admin.layout.navbar')

			<main class="content">
				<div class="container-fluid p-0">

                    @yield('content')

				</div>
			</main>

            @include('admin.layout.footer')
		</div>
	</div>

	<script src="{{ asset('adm_assets/js/app.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    @yield('scripts')
	
</body>

</html>