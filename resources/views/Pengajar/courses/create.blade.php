@extends('pengajar.layouts.main')

@section('content')
    <section class="py-0 bg-blue h-100px align-items-center d-flex h-200px rounded-0"
        style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
        <!-- Main banner background image -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Title -->
                    <h1 class="text-white">Submit a new Course</h1>
                    <p class="text-white mb-0">Read our <a href="#" class="text-white"><u>"Before you create a
                                course"</u></a> article before submitting!</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <!-- Content -->
                    <p class="text-center">Use this interface to add a new Course to the portal. Once you are done adding
                        the item it will be reviewed for quality. If approved, your course will appear for sale and you will
                        be informed by email that your course has been accepted.</p>
                </div>
            </div>
            <div class="card bg-transparent border rounded-3 mb-5">
                <div id="stepper" class="bs-stepper stepper-outline">
                    <div class="bs-stepper-header" role="tablist">
                        <div
                            class="card-header d-flex justify-content-center gap-2 align-items-center bg-light border-bottom px-lg-5">
                            <!-- Step 1 -->
                            <div class="step active" data-target="#step-1">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button"
                                        class="btn btn-link btn-sm step-trigger mb-2 bg-purple bg-opacity-10 rounded-pill"
                                        role="tab" id="steppertrigger1" aria-controls="step-1" aria-selected="true">
                                        1
                                    </button>
                                    <h6 class="d-none d-lg-block text-dark">Course details</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                            <!-- Step 1 -->
                            <div class="step" data-target="#step-1">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button"
                                        class="btn btn-link btn-sm step-trigger mb-2 bg-purple bg-opacity-10 rounded-pill"
                                        role="tab" id="steppertrigger1" aria-controls="step-1" aria-selected="true">
                                        1
                                    </button>
                                    <h6 class="d-none d-md-block">Course details</h6>
                                </div>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="card-body">
                            <div class="bs-stepper-content">
                                <div>
                                    <form action="{{ route('courses-store') }}" method="POST">
                                        <h4>Course details</h4>
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <label class="form-label">Course title</label>
                                                <input class="form-control" type="text" placeholder="Enter course title">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Short description</label>
                                            <textarea class="form-control" rows="2" placeholder="Enter keywords"></textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select name="category" id="category" class="form-control" required>
                                                    <option value="">Pilih Kategori</option>
                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="level" id="level" class="form-control">
                                                    <option value="">Pilih Level</option>
                                                    @foreach ($levels as $level)
                                                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="duration">Duration</label>
                                            <input type="number" name="duration" id="duration" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="total_videos">Total Videos</label>
                                            <input type="number" name="total_videos" id="total_videos" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" step="0.01" name="price" id="price"
                                                class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="discount_price">Discount Price</label>
                                            <input type="number" step="0.01" name="discount_price" id="discount_price"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="is_discount_enabled">Discount Enabled</label>
                                            <input type="checkbox" name="is_discount_enabled" id="is_discount_enabled"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="additional_information">Additional Information</label>
                                            <textarea name="additional_information" id="additional_information" class="form-control" rows="4"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Create Course</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
