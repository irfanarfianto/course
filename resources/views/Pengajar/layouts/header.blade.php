<header class="sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <nav class="navbar navbar-expand-xl">
        <div class="container px-3">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Company name</a>

            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item col-sm-2">
                    <form class="position-relative">
                        <input class="form-control bg-transparent shadow border-2 rounded-pill" type="search"
                            placeholder="Cari kursus" aria-label="Search">
                        <a class="pe-3 position-absolute top-50 end-0 translate-middle-y border-0 text-reset"
                            type="submit">
                            <i class="bi bi-search fs-6 text-purple"></i>
                        </a>
                    </form>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" name="role" value="pengajar">
                    </form>
                </li>
                <li class="nav-item d-md-none">
                    <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</header>
