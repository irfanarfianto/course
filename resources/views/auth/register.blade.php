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

        #bg-regis {
            background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        /* Media query untuk tampilan mobile */
        @media (min-width: 992px) {
            #bg-regis {
                height: 100vh;
            }
        }
    </style>
</head>

<body class="antialiased">
    <!-- Jumbotron -->
    <header>
        <div id="bg-regis" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                    <div class="py-2">
                        <p>Sudah punya akun?<a href="{{ url('login') }}" class="fw-bold"> Masuk</a></p>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <a class="fw-bold text-white " href="/">
                                <i class="ri-graduation-cap-fill fs-4 text-white"></i> Oncourse
                            </a>
                            <h3 class="display-6 fw-bold text-white d-none d-sm-none d-lg-block">
                                The best online courses<br />
                                <span class="text-purple">for your learning journey</span>
                            </h3>
                            <p style="color: hsl(217, 10%, 50.8%)" class="d-none d-sm-none d-lg-block">
                                Explore a wide range of courses designed to enhance your knowledge and skills. Our
                                expert
                                instructors
                                provide high-quality content to help you achieve your learning goals. Whether you're a
                                beginner
                                or
                                an experienced professional, we have the right courses for you. Join our online
                                community
                                and
                                start
                                your learning journey today!
                            </p>
                            <div class="col-lg-6 mt-5">
                                <div class="or-line">
                                    <span></span>
                                    <p align="center">atau buat akun dengan</p>
                                    <span></span>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-outline-blue rounded-pill mx-2"><i
                                            class="fab fa-facebook-f me-2"></i>Facebook</a>
                                    <a href="#" class="btn btn-outline-danger rounded-pill mx-2"><i
                                            class="fab fa-google me-2"></i>Google</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8">
                            <div class="card">
                                <div class="card-body px-md-5">
                                    <form class="shadow-5-strong" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="title-header text-center">
                                            <h5>
                                                {{ __('Buat akun baru 📝') }}
                                            </h5>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">{{ __('Nama Lengkap') }}</label>
                                            <input id="name" type="text"
                                                class="form-control rounded-pill @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">{{ __('Username') }}</label>
                                            <input id="username" type="text"
                                                class="form-control rounded-pill @error('username') is-invalid @enderror"
                                                name="username" value="{{ old('username') }}" required>

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">{{ __('Email') }}</label>
                                            <input id="email" type="email"
                                                class="form-control rounded-pill @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                            <input id="password" type="password"
                                                class="form-control rounded-pill @error('password') is-invalid @enderror"
                                                name="password" required>
                                            <span>
                                                <small>
                                                    <i class="fas fa-info-circle"></i>
                                                    Password minimal 8 karakter
                                                </small>
                                            </span>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password-confirm"
                                                class="form-label">{{ __('Konfirmasi Password') }}</label>
                                            <input id="password-confirm" type="password"
                                                class="form-control rounded-pill" name="password_confirmation"
                                                required>
                                            <span>
                                                <small>
                                                    <i class="fas fa-info-circle"></i>
                                                    Password minimal 8 karakter
                                                </small>
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="privacy_policy"
                                                    id="privacy_policy" required>
                                                <label class="form-check-label small" for="privacy_policy">
                                                    Saya menerima <a href="#">Ketentuan Penggunaan</a> dan <a
                                                        href="#">Pemberitahuan Privasi</a>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="terms_conditions" id="terms_conditions" required>
                                                <label class="form-check-label small" for="terms_conditions">
                                                    Saya setuju dengan <a href="#">Syarat dan Ketentuan</a>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary rounded-pill px-4">{{ __('Daftar') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </header>
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
