<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/pe-logo-icon.png')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>Sign In | Admin ProEnergi</title>
  	<link href="{{ asset('adm_assets/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="card">
							<div class="card-body">
							<div class="m-sm-4">
									<div class="text-center">
                    					<img src="{{ asset('assets/images/logo_pe.png')}}" class="img-fluid" width="132" height="132" alt="logo">
										{{-- <img src="img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" /> --}}
									</div>
									@if ($errors->any())
										<div class="alert alert-danger">
											<strong>{{ $errors->first() }}</strong>
										</div>
									@endif
									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
											<small>
											@if (Route::has('password.request'))
												<a class="btn btn-link" href="{{ route('password.request') }}">
													{{ __('Forgot Your Password?') }}
												</a>
											@endif
											</small>
                                		</div>
                                		<div>
									{{-- <label class="form-check">
										<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
										<span class="form-check-label">
										Remember me next time
										</span>
									</label> --}}
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>

									</form>
									
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('adm_assets/js/app.js')}}"></script>

</body>

</html>