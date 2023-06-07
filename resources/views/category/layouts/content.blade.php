<div class="container my-3">
    <div class="row">
        <form class="bg-light border p-4 rounded-2 z-index-9 position-relative">
            <div class="row g-3">
                <!-- Input -->
                <div class="col-xl-3">
                    <input class="form-control rounded-pill me-1" type="search" name="katakunci"
                            value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                </div>

                <!-- Select item -->
                <div class="col-xl-8">
                    <div class="row g-3">
                        <!-- Select items -->
                        <div class="col-sm-6 col-md-4 pb-2 pb-md-0">
                            <div class="form-group">
                                <select name="category" id="category" class="form-control rounded-pill">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Search item -->
                        <div class="col-sm-6 col-md-4 pb-2 pb-md-0">
                            <div class="form-group">
                                <select name="level" id="level" class="form-control rounded-pill">
                                    <option value="">Pilih Level</option>
                                    @foreach ($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Search item -->
                        <div class="col-sm-6 col-md-4 pb-2 pb-md-0">
                            <div class="form-group">
                                <select name="level" id="level" class="form-control rounded-pill">
                                    <option value="">Pilih Level</option>
                                    @foreach ($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- Button -->
                <div class="col-xl-1">
                    <button type="button" class="btn btn-primary mb-0 rounded-pill z-index-1 w-100"><i
                            class="fas fa-search"></i></button>
                </div>
            </div> <!-- Row END --> 
        </form>
    </div>
</div>
