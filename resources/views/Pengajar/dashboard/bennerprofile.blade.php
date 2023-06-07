<section class="pt-0">
    <!-- Main banner background image -->
    <div class="row px-0">
        <div class="bg-blue h-100px h-md-200px rounded"
            style="background:url({{ asset('images/bg-profile.jpg') }}) no-repeat center center; background-size:cover;">
        </div>
    </div>
    <div class="container mt-n4">
        <div class="row">
            <!-- Profile banner START -->
            <div class="col-12">
                <div class="card bg-transparent card-body p-0">
                    <div class="row d-flex justify-content-between">
                        <!-- Avatar -->
                        <div class="col-auto mt-4 mt-md-0">
                            <div class="avatar avatar-xxl mt-n3">
                                @if (Auth::check() && Auth::user()->profile_photo_url)
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->username }}"
                                        class="profile-image">
                                @else
                                    <img src="{{ asset('images/fp.webp') }}" alt="Default Profile"
                                        class="profile-image avatar rounded-circle avatar-xxl">
                                @endif
                            </div>
                        </div>

                        <!-- Profile info -->
                        <div class="col d-md-flex justify-content-between align-items-center mt-4">
                            <div>
                                <h1 class="my-1 fs-4">
                                    @if (Auth::check())
                                        {{ Auth::user()->name }}
                                        <i class="bi bi-patch-check-fill text-info small"></i>
                                    @endif
                                </h1>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                            class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                                    <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                            class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled Students</li>
                                    <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                            class="fas fa-book text-purple me-2"></i>25 Courses</li>
                                </ul>
                            </div>
                            <!-- Button -->
                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                <a href="instructor-create-course.html" class="btn btn-success mb-0">Create a course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile banner END -->

                <!-- Advanced filter responsive toggler START -->
                <!-- Divider -->
                <hr class="d-xl-none">
                <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                    <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                    <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                        <i class="fas fa-sliders-h"></i>
                    </button>
                </div>
                <!-- Advanced filter responsive toggler END -->
            </div>
        </div>
    </div>
</section>
