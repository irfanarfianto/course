<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oncourse.</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <!--Main Navigation-->
    <header>
        <style>
            #intro {
                background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
                height: 100vh;
                background-size: cover;
                background-position: center center;
            }
        </style>

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                    <div>
                        <p>Belum punya akun?<a href="{{ url('register') }}" class="fw-bold"> Daftar</a></p>
                    </div>
                    <div class="justify-content-center align-items-center">
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('error') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div
                            class="bg-white shadow-5-strong py-0 rounded-2 d-flex justify-content-center align-items-center">
                            {{-- alert --}}
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('status') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div
                                class="col-xl-7 col-md-6 p-5 bg-purple rounded-start-2 d-sm-none d-md-none d-md-block d-none d-lg-block">
                                <div class="text-center position-relative">
                                    <a class="navbar-brand fw-bold text-white ms-3" href="/"
                                        style="position: absolute; left: 10px;">
                                        <i class="ri-graduation-cap-fill fs-4"></i> Oncourse
                                    </a>
                                    <img src="{{ asset('images/login.gif') }}" alt="login" class="img-fluid mt-4">
                                </div>
                            </div>
                            <div
                                class="rounded-2 shadow-5-strong px-5 py-3 col-xl-5 col-md-6 col-sm-8 justify-content-center">
                                <div class="title-header text-center">
                                    <h5>
                                        {{ __('Selamat datang kembali 👋') }}
                                    </h5>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="email" class="form-label">{{ __('Email') }} <span
                                                style="color:red">*</span></label>
                                        <input id="email" type="email"
                                            class="form-control rounded-pill @error('email') is-invalid @enderror"
                                            name="email" placeholder="Masukkan Email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between">
                                            <label for="password" class="form-label">{{ __('Password') }} <span
                                                    style="color:red">*</span></label>
                                            @if (Route::has('lupaPass'))
                                                <a href="{{ route('lupaPass') }}"
                                                    class="small text-purple">{{ __('Lupa password?') }}</a>
                                            @endif
                                        </div>
                                        <div class="input-group">
                                            <input id="password" type="password" placeholder="Masukkan Password"
                                                class="form-control rounded-pill @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                            <button type="button" id="toggle-password1"
                                                class="btn pe-3 position-absolute top-50 end-0 translate-middle-y rounded-end-pill"><i
                                                    id="password-icon" class="far fa-eye"></i></button>
                                        </div>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mb-3 form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary px-4 rounded-pill">{{ __('Login') }}</button>
                                    </div>

                                    <div class="text-center">
                                        <div class="or-line">
                                            <span></span>
                                            <p align="center">atau</p>
                                            <span></span>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-outline-primary rounded-pill mx-2"><i
                                                    class="fab fa-facebook-f me-2"></i>Facebook</a>
                                            <a href="#" class="btn btn-outline-danger rounded-pill mx-2"><i
                                                    class="fab fa-google me-2"></i>Google</a>
                                        </div>
                                    </div>


                                    <div class="row text-center justify-content-center mt-4">
                                        @if (Route::has('register'))
                                            <p class="text-purple"><a href="{{ route('register') }}">Lupa
                                                    password?</a></p>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row text-center mt-6">
                            <p>Saya menerima <a href="#">Ketentuan Penggunaan</a> dan <a
                                    href="#">Pemberitahuan
                                    Privasi</a> Oncourse. Mengalami masalah saat login? <a href="#">Pusat
                                    Bantuan</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        once: true
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/24349534ef.js" crossorigin="anonymous"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

</body>

</html>
