<div class="page-content-wrapper border">
    <!-- Title -->
    <div class="row mb-3">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Courses</h1>
            <a href="{{ url('admin/create') }}" class="btn btn-sm btn-primary rounded-pill mb-0">Create a Course</a>
        </div>
    </div>

    <!-- Course boxes START -->
    <div class="row g-4 mb-4">
        <!-- Course item -->
        <div class="col-sm-6 col-lg-4">
            <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
                <h6>Total Courses</h6>
                <h2 class="mb-0 fs-1 text-primary">0</h2>
            </div>
        </div>

        <!-- Course item -->
        <div class="col-sm-6 col-lg-4">
            <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
                <h6>Activated Courses</h6>
                <h2 class="mb-0 fs-1 text-success">0</h2>
            </div>
        </div>

        <!-- Course item -->
        <div class="col-sm-6 col-lg-4">
            <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
                <h6>Pending Courses</h6>
                <h2 class="mb-0 fs-1 text-warning">0</h2>
            </div>
        </div>
    </div>
    <!-- Course boxes END -->

    <!-- Card START -->
    <div class="card bg-transparent border">

        <!-- Card header START -->
        <div class="card-header bg-light border-bottom">
            <!-- Search and select START -->
            <div class="row g-3 align-items-center justify-content-between">
                <!-- Search bar -->
                <div class="col-md-8">
                    <form class="rounded position-relative">
                        <input class="form-control bg-body rounded-pill" type="search" placeholder="Search" aria-label="Search">
                        <button
                            class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                            type="submit">
                            <i class="fas fa-search fs-6 "></i>
                        </button>
                    </form>
                </div>

                <!-- Select option -->
                {{-- <div class="col-md-3">
                    <!-- Short by filter -->
                    <form>
                        <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                            <div class="choices__inner"><select
                                    class="form-select js-choice border-0 z-index-9 choices__input"
                                    aria-label=".form-select-sm" hidden="" tabindex="-1" data-choice="active">
                                    <option value="" data-custom-properties="[object Object]">Sort by</option>
                                </select>
                                <div class="choices__list choices__list--single">
                                    <div class="choices__item choices__placeholder choices__item--selectable"
                                        data-item="" data-id="1" data-value=""
                                        data-custom-properties="[object Object]" aria-selected="true">Sort by</div>
                                </div>
                            </div>
                            <div class="choices__list choices__list--dropdown" aria-expanded="false"><input
                                    type="search" name="search_terms" class="choices__input choices__input--cloned"
                                    autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox"
                                    aria-autocomplete="list" aria-label="Sort by" placeholder="">
                                <div class="choices__list" role="listbox">
                                    <div id="choices--9vdx-item-choice-5"
                                        class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                        role="option" data-choice="" data-id="5" data-value=""
                                        data-select-text="Press to select" data-choice-selectable=""
                                        aria-selected="true">Sort by</div>
                                    <div id="choices--9vdx-item-choice-1"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="1" data-value="Accepted"
                                        data-select-text="Press to select" data-choice-selectable="">Accepted</div>
                                    <div id="choices--9vdx-item-choice-2"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="2" data-value="Newest"
                                        data-select-text="Press to select" data-choice-selectable="">Newest</div>
                                    <div id="choices--9vdx-item-choice-3"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="3" data-value="Oldest"
                                        data-select-text="Press to select" data-choice-selectable="">Oldest</div>
                                    <div id="choices--9vdx-item-choice-4"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="4" data-value="Rejected"
                                        data-select-text="Press to select" data-choice-selectable="">Rejected</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">
            <!-- Course table START -->
            <div class="table-responsive border-0 rounded-3">
                <!-- Table START -->
                <table class="table table-dark-gray table-striped align-middle p-4 mb-0 table-hover">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th scope="col" class="">Judul Kursus</th>
                            <th scope="col" class="">Deskripsi</th>
                            <th scope="col" class="">Instruktur</th>
                            <th scope="col" class="">Durasi</th>
                            <th scope="col" class="">Tipe</th>
                            <th scope="col" class="">Harga</th>
                            <th scope="col" class="">Materi Topik</th>
                            <th scope="col" class="">Sertifikat</th>
                            <th scope="col" class="">Gambar</th>
                            <th scope="col" class="">Action</th>
                        </tr>
                    </thead>

                    <!-- Table body START -->
                    <tbody>
                        <?php $i = $courses->firstItem(); ?>
                        @foreach ($courses as $k)
                            <!-- Table row -->
                            <tr>
                                <td>{{ $i }}</td>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-60px">
                                            <img src="{{ asset($k->gambar) }}" class="rounded" alt="">
                                        </div>
                                        <!-- Title -->
                                        <h6 class="table-responsive-title mb-0 ms-2">
                                            <a href="{{ $k->nama_kursus }}" class="stretched-link">Building Scalable
                                                APIs with
                                                GraphQL</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>
                                    <h6 class="mb-0 fw-light">{{ $k->instruktur }}</h6>

                                </td>
                                <td>{{ $k->durasi }}</td>

                                <!-- Table data -->
                                <td> <span class="badge text-bg-primary">{{ $k->tingkat_kesulitan }}</span> </td>

                                <!-- Table data -->
                                <td>{{ $k->biaya }}</td>

                                <!-- Table data -->
                                <td> <span
                                        class="badge bg-warning bg-opacity-15 text-warning">{{ $k->materi_topik }}</span>
                                </td>

                                <td>{{ $k->sertifikat ? 'Ya' : 'Tidak' }}</td>

                                <td>
                                    <img src="{{ asset($k->gambar) }}" class="rounded" alt="Gambar Kursus"
                                        style="max-width: 60px;">
                                </td>
                                <!-- Table data -->
                                <td>
                                    <a href="{{ route('admin.edit', $k->id) }}"
                                        class="btn btn-sm btn-primary me-1">Edit</a>
                                    <form action="" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus kursus ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>  
                        @endforeach

                    </tbody>
                    <!-- Table body END -->
                </table>
                <!-- Table END -->
                {{ $courses->links() }}
            </div>
            <!-- Course table END -->
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <div class="card-footer bg-transparent pt-0">
            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                <!-- Content -->
                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                    class="fas fa-angle-left"></i></a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#"><i
                                    class="fas fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    <!-- Card END -->
</div>
