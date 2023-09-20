<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regis</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('pitri') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('pitri') }}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('pitri') }}/assets/css/app.css">
    <link rel="stylesheet" href="{{ asset('pitri') }}/assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="d-flex justify-content-center">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('pitri') }}/assets/images/op.png" 
                            alt="Logo" style="width: 100px; height: auto;"></a>
                    </div>
                    </div>
                    <div class="d-flex justify-content-center">
                    <h1 class="title" style="color: black; ">Registrasi</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                <div class="col-md-6">
                                    <input  type="hidden" class="form-control" name="level" value="2">
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-dark btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-3 text-lg fs-4">
                        <p class='text-gray-600'>Sudah memiliki akun? <a href="{{ url('login') }}" class="font-bold" 
                            style="color: red; ">Login</a>.</p>
                      </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div>
                    <img src="{{ asset('pitri') }}/assets/images/pres.jpg" style="width: 700px; height: auto;">

                </div>
            </div>
        </div>

    </div>
</body>

</html>