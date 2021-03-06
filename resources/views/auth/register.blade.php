<!DOCTYPE html>
<html>
<head>

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
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/sb-admin-2.css') }}">
</head>
<body>
    <div class="container">
        <!-- outer row -->
        <div class="row justify-content-center">
            <div class="col-x1-5 col-lg-5 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- nested row within card body -->
                        <div class="center">
                            <div class="col-lg-6 d-none d-lg-block"></div>
                                <div class="col-lg-20">
                                    <div class="p-4">
                                        <div class="text-center">
                                            <h1 class="h4 text-white-900 mb-4">Sistem Informasi Akuntansi <br> Fakultas Teknik dan Informatika <br><br> <img src="{{ asset('asset/BSI_logo.png')}}" width="160"></h1>
                                        </div>
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
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
    <!-- bootstrap core javascript -->
    <script type="text/javascript" src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <!-- core plugin javascript -->
    <script type="text/javascript" src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <!-- custom script for all pages -->
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>

  <div class="card-header"></div>
