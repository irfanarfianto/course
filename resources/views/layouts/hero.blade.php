<section class="hero-section position-relative overflow-hidden pt-5 pt-lg-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 col-xl-6 position-relative z-index-1 text-center text-lg-start mb-5 mb-sm-0">
                <h1 class="header-deskripsi mb-0 display-6"
                    style="font-size: calc(1rem + 2vw);font-weight: 700; line-height:1.25">
                    Kembangkan <br> Potensimu <span class="typed" style="color:#892CDC" id="home-typing"></span>
                </h1>
                <p class="text-">Platform kursus online dengan lebih dari 5K+ kursus dan ribuan siswa.
                    Ayo bergabung dan tingkatkan
                    kemampuanmu
                    bersama kami!
                </p>
                <ul class="list-inline position-relative justify-content-center justify-content-lg-start mb-4">
                    <li class="list-inline-item me-2"> <i class="bi bi-patch-check-fill h6 me-1"
                            style="color:green"></i>Belajar dengan
                        para ahli
                    </li>
                    <li class="list-inline-item me-2"> <i class="bi bi-patch-check-fill h6 me-1"
                            style="color:green"></i>Bersertifikat
                    </li>
                </ul>
                <div class="row align-items-center">
                    <div class="nav-item">
                        <form class="position-relative col-xl-5">
                            <input class="form-control pe-5 bg-transparent shadow border-2 rounded-pill" type="search"
                                placeholder="Cari kursus" aria-label="Search">
                            <a class="pe-3 position-absolute top-50 end-0 translate-middle-y border-0 text-reset"
                                type="submit">
                                <i class="bi bi-search fs-6 text-purple"></i>
                            </a>
                        </form>
                    </div>
                    <a href="" class="fw-medium text-purple nav-item mt-3">Pelajari lebih lanjut <i
                            class="ri-arrow-right-s-line"></i></a>
                </div>
            </div>
            <!-- foto model -->
            <div class="col-lg-5 col-xl-6 text-center position-relative">
                <div class="img-model position-relative">
                    <img src="{{ asset('images/Group 2.png') }}" alt="model" style="max-width: 100%;height: 100%;">
                </div>
            </div>
        </div>
    </div>
    <script>
        const words = ["Dimana Saja.", "Kapan Saja."]; // Masukkan kata-kata yang ingin ditampilkan
        let wordIndex = 0;
        let letterIndex = 0;
        const typingSpeed = 100; // Waktu jeda antara pengetikan karakter (dalam milidetik)
        const eraseSpeed = 50; // Waktu jeda antara penghapusan karakter (dalam milidetik)
        const pauseTime = 1500; // Waktu jeda antara pengetikan kata baru (dalam milidetik)

        const wordElement = document.getElementById("home-typing");

        function typeWords() {
            if (letterIndex < words[wordIndex].length) {
                wordElement.textContent += words[wordIndex][letterIndex];
                letterIndex++;
                setTimeout(typeWords, typingSpeed);
            } else {
                setTimeout(eraseWords, pauseTime);
            }
        }

        function eraseWords() {
            if (letterIndex > 0) {
                wordElement.textContent = words[wordIndex].slice(0, letterIndex - 1);
                letterIndex--;
                setTimeout(eraseWords, eraseSpeed);
            } else {
                wordIndex++;
                if (wordIndex >= words.length) {
                    wordIndex = 0;
                }
                setTimeout(typeWords, typingSpeed);
            }
        }

        typeWords();
    </script>
</section>
