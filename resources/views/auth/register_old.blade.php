<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="name">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" 
                            name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="hidden" class="form-control form-control-xl" placeholder="level" name="level" value="2">
                            <div class="form-control-icon">
                                
                            </div>
                        </div>
                        <button class="btn btn-dark btn-block btn-lg shadow-lg mt-3" type="submit">Registrasi</button>
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