<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sign In &mdash; LEMON</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    </head>

<body style="background: #EDD9A3">
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                    <img src="https://static.vecteezy.com/system/resources/previews/014/526/871/original/lemon-cartoon-character-free-vector.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="login-brand">
                    <p style="color:#17594A;"> LEMON - Less Money </p>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>MASUK AKUN</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Nama Pengguna</label>
                                    <input id="username" type="text" class="form-control" name="username" placeholder="Masukkan Nama Pengguna" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Insert Username
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Kata Sandi</label>
                                        <div class="float-right">
                                            <a href="" class="text-small">
                                            <p style="color:#17594A;">
                                                Lupa Kata Sandi?
                                            </p>
                                            </a>

                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        Insert Password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-lg btn-block" tabindex="4">
                                        MASUK
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Anda belum punya akun? <a href="{{ route('register') }}">Buat akun sekarang</a>
                    </div>
                    <div class="simple-footer">
                        © <strong>LEMON</strong> 2023. Hak Cipta Dilindungi.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
