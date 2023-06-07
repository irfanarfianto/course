<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/mortarboard-fill.svg" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Oncourse.') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- Top bar START -->
    <nav class="navbar top-bar navbar-light">
        <div class="container-xl p-0">
            <div class="d-flex align-items-center w-100">
                <!-- Toggler for sidebar START -->
                <div class="navbar-expand-xl sidebar-offcanvas-menu">
                    <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false"
                        aria-label="Toggle navigation" data-bs-auto-close="outside">
                        <i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu">
                        </i>
                    </button>
                </div>
                <!-- Toggler for sidebar END -->
                <!-- Top search START -->
                <div class="nav-item ms-auto">
                    <form class="position-relative">
                        <input class="form-control pe-5 bg-transparent shadow rounded-pill" type="search" placeholder="Cari"
                            aria-label="Search">
                        <a class="pe-3 position-absolute top-50 end-0 translate-middle-y border-0 text-reset"
                            type="submit">
                            <i class="bi bi-search fs-6 text-purple"></i>
                        </a>
                    </form>
                </div>
                <!-- Top search END -->
                <!-- Top bar right START -->
                {{-- <div class="ms-xl-auto">
                            <ul class="navbar-nav flex-row align-items-center">

                                <!-- Notification dropdown START -->
                                <li class="nav-item ms-2 ms-md-3 dropdown">
                                    <!-- Notification button -->
                                    <a class="btn btn-light btn-round mb-0" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <i class="bi bi-bell fa-fw"></i>
                                    </a>
                                    <!-- Notification dote -->
                                    <span class="notif-badge animation-blink"></span>

                                    <!-- Notification dropdown menu START -->
                                    <div
                                        class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                                        <div class="card bg-transparent">
                                            <div
                                                class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Notifications <span
                                                        class="badge bg-danger bg-opacity-10 text-danger ms-2">2
                                                        new</span></h6>
                                                <a class="small" href="#">Clear all</a>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="list-group list-unstyled list-group-flush">
                                                    <!-- Notif item -->
                                                    <li>
                                                        <a href="#"
                                                            class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                            <div class="me-3">
                                                                <div class="avatar avatar-md">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="assets/images/avatar/08.jpg"
                                                                        alt="avatar">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p class="text-body small m-0">Congratulate <b>Joan
                                                                        Wallace</b> for graduating from <b>Microverse
                                                                        university</b></p>
                                                                <u class="small">Say congrats</u>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <!-- Notif item -->
                                                    <li>
                                                        <a href="#"
                                                            class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                            <div class="me-3">
                                                                <div class="avatar avatar-md">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="assets/images/avatar/02.jpg"
                                                                        alt="avatar">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1">Larry Lawson Added a new course</h6>
                                                                <p class="small text-body m-0">What's new! Find out
                                                                    about new features</p>
                                                                <u class="small">View detail</u>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <!-- Notif item -->
                                                    <li>
                                                        <a href="#"
                                                            class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                            <div class="me-3">
                                                                <div class="avatar avatar-md">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="assets/images/avatar/05.jpg"
                                                                        alt="avatar">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1">New request to apply for Instructor
                                                                </h6>
                                                                <u class="small">View detail</u>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <!-- Notif item -->
                                                    <li>
                                                        <a href="#"
                                                            class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                            <div class="me-3">
                                                                <div class="avatar avatar-md">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="assets/images/avatar/03.jpg"
                                                                        alt="avatar">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1">Update v2.3 completed successfully
                                                                </h6>
                                                                <p class="small text-body m-0">What's new! Find out
                                                                    about new features</p>
                                                                <small class="text-body">5 min ago</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Button -->
                                            <div
                                                class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                                <a href="#" class="stretched-link">See all incoming activity</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Notification dropdown menu END -->
                                </li>
                                <!-- Notification dropdown END -->

                                <!-- Profile dropdown START -->
                                <li class="nav-item ms-2 ms-md-3 dropdown">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown"
                                        role="button" data-bs-auto-close="outside" data-bs-display="static"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                            alt="avatar">
                                    </a>

                                    <!-- Profile dropdown START -->
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                        aria-labelledby="profileDropdown">
                                        <!-- Profile info -->
                                        <li class="px-3">
                                            <div class="d-flex align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar me-3 mb-3">
                                                    <img class="avatar-img rounded-circle shadow"
                                                        src="assets/images/avatar/01.jpg" alt="avatar">
                                                </div>
                                                <div>
                                                    <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                                    <p class="small m-0">example@gmail.com</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <!-- Links -->
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                                        <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
                                                    class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <!-- Dark mode options START -->
                                        <li>
                                            <div
                                                class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                                <!-- <span>Mode:</span> -->
                                                <button type="button" class="btn btn-sm mb-0 active"
                                                    data-bs-theme-value="light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                                        </path>
                                                        <use href="#"></use>
                                                    </svg> Light
                                                </button>
                                                <button type="button" class="btn btn-sm mb-0"
                                                    data-bs-theme-value="dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-moon-stars fa-fw mode-switch"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z">
                                                        </path>
                                                        <path
                                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                                                        </path>
                                                        <use href="#"></use>
                                                    </svg> Dark
                                                </button>
                                                <button type="button" class="btn btn-sm mb-0"
                                                    data-bs-theme-value="auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-circle-half fa-fw mode-switch"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z">
                                                        </path>
                                                        <use href="#"></use>
                                                    </svg> Auto
                                                </button>
                                            </div>
                                        </li>
                                        <!-- Dark mode options END-->
                                    </ul>
                                    <!-- Profile dropdown END -->
                                </li>
                                <!-- Profile dropdown END -->
                            </ul>
                        </div> --}}

                <div class="navbar-nav ms-auto gap-2 d-flex">
                    <!-- Authentication Links -->
                    @guest
                        <div class="d-flex gap-2">
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <button href="#" title="login" class="btn btn-outline-primary rounded-pill"
                                        data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <button href="" title="register" class="btn btn-primary rounded-pill"
                                        data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</button>
                                </li>
                            @endif
                        </div>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="navbarDropdown">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                                <hr>
                                <button class="dropdown-item bg-danger-soft-hover fw-bold text-red"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    <i class="ri-logout-box-r-fill"></i>
                                </button>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </div>
                <!-- Top bar right END -->
            </div>
        </div>
    </nav>
    <!-- Top bar END -->
    <main>
        @yield('content')
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        once: true
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/24349534ef.js" crossorigin="anonymous"></script>
</body>

</html>
