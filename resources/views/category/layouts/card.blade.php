<div class="container">
    <div class="row d-flex flex-row g-2">
        <!-- Card item START -->
        @foreach ($courses as $kursus)
            <div class="col-sm-6 col-lg-3 col-xl-3">
                {{-- 1 --}}
                <div class="card border-2">
                    <div class="position-relative">
                        <!-- Image -->
                        <img class="card-img-top" src="{{ asset('storage/' . $kursus->gambar) }}" alt="Card image">
                        <div class="card-img-overlay bottom-0 flex-column">
                            <div class="w-100 mt-auto d-inline-flex gap-1">
                                <p class="badge bg-primary bg-opacity-50 text-white">{{ $kursus->level_id }}</p>
                                <p class="badge bg-warning bg-opacity-10 text-warning"><i class="ri-award-fill"></i>
                                    Free
                                    Sertifikat</p>
                            </div>
                        </div>
                        <!-- Overlay -->
                        <div class="bg-overlay rounded bg-dark opacity-4"></div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body mb-0">
                        <!-- Title -->
                        <h6 class="card-title text-truncate-2">{{ $kursus->judul_kursus }}</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="small"><i class="far fa-play-circle me-1"></i>30 video</p>
                            <p class="small"><i class="far fa-clock me-1"></i>12jam 56m</p>
                            <!-- <p class="small"><i class="ri-award-fill"></i>Bersertifikat</p> -->
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center pb-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-sm me-2">
                                    <img class="avatar-img rounded-circle "
                                        src="https://images.unsplash.com/photo-1503235930437-8c6293ba41f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                        alt="avatar">
                                </div>
                                <!-- Avatar info -->
                                <div>
                                    <p class="mb-0 small"><a href="#" class="text-dark">Larry Lawson</a></p>
                                </div>
                            </div>
                            <p class="text-dark small">4.5<i class="fas fa-star text-warning ms-1"></i></p>
                        </div>
                        <hr class="m-0 mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="text-danger">IDR 120.000</h6>
                            <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-outline-primary rounded-pill"><i
                                    class="ri-external-link-line"></i></i> Lebih detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Card item END -->
        {{ $courses->withQueryString()->links() }}
    </div> <!-- Row END -->
</div>
