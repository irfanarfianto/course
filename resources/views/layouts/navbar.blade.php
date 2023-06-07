<header class="navbar-light navbar-sticky header-static">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container px-3">
            <!-- Logo START -->
            <a class="navbar-brand fw-bold" href="/">
                <i class="ri-graduation-cap-fill"></i> Oncourse
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">
                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll ms-auto">
                    <!-- Nav item 1 Beranda -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::url() === url('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">Beranda</a>
                    </li>
                    <!-- Nav item 1 Kategori -->
                    <li class="nav-item dropdown dropdown-menu-shadow-stacked">
                        <a class="nav-link dropdown-toggle" href="{{ url('category') }}" id="categoryMenu"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a></a>
                        <ul class="dropdown-menu" aria-labelledby="categoryMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="{{ url('category') }}">Development</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Web
                                            Development</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">CSS</a> </li>
                                            <li> <a class="dropdown-item" href="#">JavaScript</a>
                                            </li>
                                            <li> <a class="dropdown-item" href="#">Angular</a> </li>
                                            <li> <a class="dropdown-item" href="#">PHP</a> </li>
                                            <li> <a class="dropdown-item" href="#">HTML</a> </li>
                                            <li> <a class="dropdown-item" href="#">React</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Data Science</a> </li>
                                    <li> <a class="dropdown-item" href="#">Mobile Development</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Programing Language</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Software Testing</a> </li>
                                    <li> <a class="dropdown-item" href="#">Software Engineering</a>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Software Development
                                            Tools</a> </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="#">Design</a></li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Marketing</a>
                                <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                                    <div class="row p-4">
                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                            <h6 class="mb-0">Get started</h6>
                                            <hr> <!-- Divider -->
                                            <ul class="list-unstyled">
                                                <li> <a class="dropdown-item" href="#">Market
                                                        Research</a> </li>
                                                <li> <a class="dropdown-item" href="#">Advertising</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Consumer
                                                        Behavior</a> </li>
                                                <li> <a class="dropdown-item" href="#">Digital
                                                        Marketing</a> </li>
                                                <li> <a class="dropdown-item" href="#">Marketing
                                                        Ethics</a> </li>
                                                <li> <a class="dropdown-item" href="#">Social Media
                                                        Marketing</a> </li>
                                                <li> <a class="dropdown-item" href="#">Public
                                                        Relations</a> </li>
                                                <li> <a class="dropdown-item" href="#">Advertising</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">Decision
                                                        Science</a> </li>
                                                <li> <a class="dropdown-item" href="#">SEO</a> </li>
                                                <li> <a class="dropdown-item" href="#">Business
                                                        Marketing</a> </li>
                                            </ul>
                                        </div>


                                        <!-- Dropdown column item -->
                                        <div class="col-xl-6 col-xxl-4">
                                            <h6 class="mb-0">Certificate</h6>
                                            <hr> <!-- Divider -->
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i>
                                                </h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Google
                                                        SEO certificate</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fab fa-fw fa-linkedin-in text-linkedin"></i>
                                                </h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Business
                                                        Development
                                                        Executive(BDE)</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i>
                                                </h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Facebook
                                                        social media marketing</a>
                                                    <p class="mb-0 small">Expert advice</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i
                                                        class="fas fa-fw fa-basketball-ball text-dribbble"></i>
                                                </h2>
                                                <div class="ms-2">
                                                    <a class="stretched-link h6 mb-0" href="#">Creative
                                                        graphics design</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li> <a class="dropdown-item" href="#">Music</a></li>
                            <li> <a class="dropdown-item" href="#">Lifestyle</a></li>
                            <li> <a class="dropdown-item" href="#">IT &amp; software</a></li>
                            <li> <a class="dropdown-item" href="#">Personal development</a></li>
                            <li> <a class="dropdown-item" href="#">Health &amp; fitness</a></li>
                        </ul>

                    </li>

                    <li class=nav-item>
                        <a class="nav-link {{ Request::url() === url('/tentangkami') ? 'active' : '' }}"
                            href="{{ url('/tentangkami') }}">Tentang Kami</a>
                    </li>

                    <li class=nav-item>
                        <a class="nav-link {{ Request::url() === url('/promo') ? 'active' : '' }}"
                            href="{{ url('/promo') }}"><i class="ri-price-tag-3-fill"></i> Promo</a>
                    </li>
                </ul>
                <!-- Nav Main menu END -->
                {{-- <div class="nav-item gap-2 ms-auto d-flex">
                        @guest
                            @if (Route::has('login'))
                                <button href="#" title="login" class="btn btn-outline-primary rounded-pill"
                                    data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                            @endif
                            @if (Route::has('register'))
                                <button href="" title="register" class="btn btn-primary rounded-pill"
                                    data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</button>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div> --}}
                <ul class="navbar-nav ms-auto gap-2 d-flex">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a href="{{ url('/login') }}" title="login"
                                    class="btn btn-outline-primary rounded-pill">Login</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ url('/register') }}" title="register"
                                    class="btn btn-primary rounded-pill">Daftar</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown">
                            <a id="navbarDropdown" class="dropdown-toggle nav-link" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if (Auth::user()->profile_photo_url)
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->username }}"
                                        class="profile-image">
                                @else
                                    <img src="{{ asset('images/fp.webp') }}" alt="Default Profile"
                                        class="profile-image avatar rounded-circle avatar-sm">
                                @endif
                                {{ Auth::user()->username }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-sm-start" aria-labelledby="navbarDropdown">
                                <li><button class="dropdown-item" type="button">Profile</button></li>
                                <li><button class="dropdown-item" type="button">Pengaturan</button></li>
                                <li><button class="dropdown-item" type="button">Sertifikat saya</button></li>
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
                </ul>

                <div class="watermark">
                    <!-- buatkan tampilan prisented by -->
                    <p style="text-align: center;"><small>Presented by</small><br><strong>Kelompok
                            5</strong>
                    </p>
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <a href="#" class="text-decoration-none text-dark social-icon me-3"><i
                                class="bi bi-facebook"></i></a>
                        <a href="#" class="text-decoration-none text-dark social-icon me-3"><i
                                class="bi bi-instagram"></i></a>
                        <a href="#" class="text-decoration-none text-dark social-icon me-3"><i
                                class="bi bi-twitter"></i></a>
                        <a href="#" class="text-decoration-none text-dark social-icon me-3"><i
                                class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Nav END -->
</header>
<!-- Header END -->

{{-- <script>
    // Script untuk menampilkan/menyembunyikan password

    var passwordInput = document.getElementById("password");
    var togglePasswordButton = document.getElementById("toggle-password");
    var passwordIcon = document.getElementById("password-icon");

    togglePasswordButton.addEventListener("click", function() {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordIcon.classList.remove("fa-eye");
            passwordIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            passwordIcon.classList.remove("fa-eye-slash");
            passwordIcon.classList.add("fa-eye");
        }
    });
</script>

<script>
    // function to check if password meets requirements
    function checkPassword() {
        var password = document.getElementById("password").value;
        var requirement = document.getElementById("password-requirement");
        var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])[a-zA-Z\d!@#$%^&*()]{8,}$/;

        if (!pattern.test(password)) {
            requirement.innerHTML =
                "Password harus terdiri dari minimal 8 karakter, terdiri dari huruf besar, huruf kecil, angka, dan karakter khusus seperti !@#$%^&*()";
            return false;
        } else {
            requirement.innerHTML = "";
            return true;
        }
    }

    // event listener for password input field
    var passwordInput = document.getElementById("password");
    passwordInput.addEventListener("input", checkPassword);
</script> --}}
