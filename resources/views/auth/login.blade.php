<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                        <img src="{{ asset('pitri') }}/assets/images/ops.png" style="width: 100px; height: auto;">
                    </div>
                    </div>
                    <br>
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-dark btn-block btn-lg shadow-lg mt-3" type="submit">Log in</button>
                    </form>
                    <div class="text-center mt-3 text-lg fs-4">
                        <p class="text-gray-600">Tidak Memiliki akun?
                        <a href="{{ route('register') }}"class="font-bold" style="color: red;">Registrasi</a>	</p>
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