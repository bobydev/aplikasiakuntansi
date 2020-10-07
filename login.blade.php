<!DOCTYPE html>
<html>
<head>
	@extends('layouts.app')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Pemrograman Akuntansi 1</title>
	<!-- custom fonts for this template -->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<!-- custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/sb-admin-2.min.css') }}">
</head>
<body class="bg-radient-dark">
	@section('content')
	<div class="container">
		<!-- outer row -->
		<div class="row justify-content-center">
			<div class="col-x1-5 col-lg-12 col-md-9">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- nested row within card body -->
						<div class="center">
							<div class="col-lg-6 d-none d-lg-block"></div>
								<div class="col-lg-20">
									<div class="p-5">
										<div class="text-center">
											<h1 class="h4 text-gray-900 mb-4">Sistem Informasi Akuntansi <br> Fakultas Teknik dan Informatika <br><br> <img src="{{ asset('/asset/img/BSI_logo.png') }}" width="160"></h1>
										</div>
											<form method="POST" action="{{ route('login') }}">
												@csrf
												<div class="form-group row">
													<label for="email" class="col-md-12" col-form-label text-md-left>{{ __('E-Mail Address') }}</label>
													<div class="col-md-12">
														<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required="required" autocomplete="email" autofocus="">
															@error('email')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12 offset-md-12">
														<div class="form-check">
															<input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember')?'checked':''}}>
																<label class="form-check-label" for="remember">
																	{{ __('Remember Me')}}
																</label>
														</div>
													</div>
												</div>
												<div class="form-group row mb-0">
													<div class="col-md-12 offset-md-12">
														<button type="submit" class="btn btn-{{ __('Login') }}"></button>
														@if (Route::has('password.request'))
														<a href="{{ route('password.request') }}" class="btn btn-link">{{ __('Forgot Your Password?') }}</a>
														@endif
													</div>
												</div>												
											</form>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
	<!-- bootstrap core javascript -->
	<script type="text/javascript" src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- core plugin javascript -->
	<script type="text/javascript" src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
	<!-- custom script for all pages -->
	<script type="text/javascript" src="{{ asset('asset/js/sb-admin-2.min.js') }}"></script>
</body>
</html>