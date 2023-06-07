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

    <link rel="stylesheet" href="style.css">
    {{-- js di direktori --}}
    <script src="js/main.js"></script>

    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    @include('admin.layouts.admin-navbar')
    <div class="container-xl">
        <div class="row">
            <div class="col-md-2">
                @include('admin.layouts.sidebar')
            </div>
            <div class="col-md-10">
                @include('admin.layouts.admin-list-kursus')
            </div>
        </div>
    </div>
    {{-- @section('content')
        <!-- Page content START -->
        <div class="page-content">
            <!-- Page main content START -->
            <div class="page-content-wrapper border">
                <!-- Title -->
                <div class="row">
                    <div class="col-12 mb-3">
                        <h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
                    </div>
                </div>

                <!-- Counter boxes START -->
                <div class="row g-4 mb-4">
                    <!-- Counter item -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-body bg-warning bg-opacity-15 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="1958" data-purecounter-delay="200"
                                        data-purecounter-duration="0">0</h2>
                                    <span class="mb-0 h6 fw-light">Completed Courses</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i
                                        class="fas fa-tv fa-fw"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Counter item -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-body bg-purple bg-opacity-10 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="1600" data-purecounter-delay="200"
                                        data-purecounter-duration="0">0</h2>
                                    <span class="mb-0 h6 fw-light">Enrolled Courses</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-purple text-white mb-0"><i
                                        class="fas fa-user-tie fa-fw"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Counter item -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-body bg-primary bg-opacity-10 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                        data-purecounter-end="1235" data-purecounter-delay="200"
                                        data-purecounter-duration="0">0</h2>
                                    <span class="mb-0 h6 fw-light">Course In Progress</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i
                                        class="fas fa-user-graduate fa-fw"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Counter item -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card card-body bg-success bg-opacity-10 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Digit -->
                                <div>
                                    <div class="d-flex">
                                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                            data-purecounter-end="845" data-purecounter-delay="200"
                                            data-purecounter-duration="0">0</h2>
                                        <span class="mb-0 h2 ms-1">hrs</span>
                                    </div>
                                    <span class="mb-0 h6 fw-light">Total Watch Time</span>
                                </div>
                                <!-- Icon -->
                                <div class="icon-lg rounded-circle bg-success text-white mb-0"><i
                                        class="bi bi-stopwatch-fill fa-fw"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter boxes END -->
            </div>
            <!-- Page main content END -->
        </div>
        <!-- Page content END -->
    @endsection --}}

    <!-- Bootstrap Bundle with Popper -->
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
