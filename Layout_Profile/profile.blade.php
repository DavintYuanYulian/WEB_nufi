<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top px-5">
        <div class="container-fluid">
            <img src="{{ asset('img/nufi.png') }}" alt="Nurul Firdaus" width="60">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active ms-5 fw-bold" aria-current="page" href="#">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle ms-5 fw-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">PROFIL</a>
                        <ul class="dropdown-menu ms-5" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#profile-section">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="#sejarah-section">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#guru-section">Data Guru</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-5 fw-bold" aria-current="page" href="#">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-5 fw-bold" aria-current="page" href="#">PENGUMUMAN</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 fw-bold" aria-current="page" href="#">LAYANAN ONLINE</a>
                    </li>
                </ul>
                        <a class="nav-link active ms-5 fw-bold" aria-current="page" href="#">PPDB</a>
            </div>
        </div>
    </nav>

    <!-- Profil Sekolah -->
     <div class="header p-5 mt-3">
        <h1 class="text-warning text-bold text-center">PROFIL SEKOLAH</h1>
     </div>
    <div class="profile-section pt-5" id="profile-section">
    <div class="card-visi-misi text-dark">
        <div class="">
            <h5 class="card-title-profil text-center fs-3">VISI:</h5>
            <p>TERWUJUDNYA GENERASI YANG BERAKHLAQ QUR’ANI, MANDIRI DAN BERPRESTASI</p>
        </div>
    </div>
    </div>
    <div class="profile-section pb-5">
    <div class="card-visi-misi text-dark px-5">
        <div class="">
            <h5 class="card-title-profil text-center fs-3">MISI:</h5>
            <ol class="list">
                <li>Menyelenggarakan pendidikan yang berorientasi pada pembiasaan akhlaqul karimah yang diiringi dengan pengembangan intelektual, emosional dan spiritual.</li>
                <li>Menyelenggarakan manajemen pengelolaan madrasah yang efektif, efisien, transparan dan akuntable dalam pencapaian prestasi  akademik dan non akademik dengan pemanfaatan teknologi informasi.</li>
                <li>Melaksankan pendidikan kecakapan hidup (life skil) guna mewujudkan kemandirian peserta didik.</li>
                <li>Melaksanakan pembelajaran dan bimbingan secara efektif dan efisien sehingga siswa dapat berkembang secara optimal sesuai potensi yang dimiliki.</li>
            </ol>
        </div>
    </div>
    </div> 


    <!-- sejarah -->
    <div class="sejarah-section" id="sejarah-section">
    <div class="container py-3">
        <h2 class="title-sejarah text-center mb-4">SEJARAH</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="image-container">
                    <img src="{{ asset('img/foto1.jpg') }}" alt="Nurul Firdaus" class="img-fluid rounded" >
                </div>
            </div>
            <div class="content col-md-6">
                <p class="text-justify">
                Yayasan Nurul Firdaus berdiri sebagai wujud tekad dan visi seorang pemuda bernama M. Noorsyambudi dari Desa Manggarmas. 
                Pada tahun 1980, ia memulai perjalanan ke Pondok Pesantren Gontor untuk memperdalam ilmu agama dan pendidikan. 
                Sekembalinya dari Gontor, K.H. M. Noorsyambudi bercita-cita memajukan pendidikan di desanya, yang saat itu sebagian besar masyarakatnya hanya mengenyam pendidikan dasar. 
                Dengan dorongan keluarga, ia mendirikan Pondok Pesantren Modern Nurul Firdaus pada 17 Sya’ban 1405 H (8 Mei 1985). 
                Awalnya, pondok ini berdiri di atas lahan seluas 750 m² dengan bangunan sederhana berupa rumah dan mushola. 
                Santri pertama berjumlah 53 orang, terdiri dari 11 santri mukim putra, 15 santri mukim putri, dan 27 santri kalong.
                </p>
                <p class="text-justify">
                Seiring berjalannya waktu, Yayasan Nurul Firdaus terus berkembang baik dari segi fasilitas maupun jumlah santri. 
                Pada tahun 1989, yayasan ini membuka jenjang pendidikan formal, yaitu Madrasah Tsanawiyah (MTs) dan Madrasah Aliyah (MA), guna memberi kesempatan santri melanjutkan pendidikan ke tingkat yang lebih tinggi. 
                Sejak saat itu, lembaga ini menjadi lembaga pendidikan yang tidak hanya menekankan nilai-nilai keislaman, tetapi juga memadukan kurikulum modern untuk membentuk generasi yang berakhlak Qur’ani, mandiri, dan inspiratif.
                </p>
            </div>
        </div>
    </div>
    </div>

    <!-- GURU -->
        <div class="guru-section py-5" id="guru-section">
            <h2 class="title-guru text-center fw-bold text-warning mb-5">GURU - GURU</h2>
            <div class="guru-container">
            <div class="row g-3 justify-content-center">
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3"> 
                        <img src="{{ asset('img/Pak Rasmudi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rasmudi, S.Pd.I</h5>
                            <p class="card-text">Akidah Akhlak </p>
                        </div>
                    </div>
                </div>
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3">
                        <img src="{{ asset('img/bu siti fatimah.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Siti Fatimah, S.Pd.I</h5>
                            <p class="card-text">Fiqih</p>
                        </div>
                    </div>
                </div>
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3">
                        <img src="{{ asset('img/bu Naela izatur.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Naela Izzatur Rohmah</h5>
                            <p class="card-text">Qur'an Hadits</p>
                        </div>
                    </div>
                </div>
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3">
                        <img src="{{ asset('img/mbak fifah.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Khofifah Titan Palupi, S. Pd</h5>
                            <p class="card-text">Matematika</p>
                        </div>
                    </div>
                </div>
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3">
                        <img src="{{ asset('img/Siti nurkasanah.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Siti Nurkasanah, S.Pd.I</h5>
                            <p class="card-text">IPA</p>
                        </div>
                    </div>
                </div>
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3">
                        <img src="{{ asset('img/bu sukamti.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sukamti,S.Pd.I</h5>
                            <p class="card-text">Bahasa Inggris</p>
                        </div>
                    </div>
                </div>
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3">
                        <img src="{{ asset('img/bu Murtinah.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Murtinah, S.Pd.I</h5>
                            <p class="card-text">Bahasa Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3">
                        <img src="{{ asset('img/Pak Mujahidin.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mujahidin,S.Pd.I</h5>
                            <p class="card-text">Fikih/SKI</p>
                        </div>
                    </div>
                </div>
                <div class="card-guru col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card py-3">
                        <img src="{{ asset('img/bu tri eva.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tri Eva Handayani, S.Pd</h5>
                            <p class="card-text">Bahasa Jawa</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>



        <!-- FOOTER -->
        <div class="footer p-3">
            <p class="text-center">Copyright © 2025 | YAYASAN NURUL FIRDAUS Design <br> by TIM MAGANG KUY USM</p>
        </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
