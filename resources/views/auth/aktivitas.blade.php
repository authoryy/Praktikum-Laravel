<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Aktivitas Mahasiswa</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('user.home') }}">Home</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('aktivitas') }}">Aktivitas</a>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Aktivitas Agense RPL A</h1>
        <hr>

        <!-- Aktivitas Mahasiswa -->
        <div class="row">
            <!-- Aktivitas 1 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="/image/batik.png" class="card-img-top" alt="Foto Aktivitas 1">
                    <div class="card-body">
                        <h5 class="card-title">Hari Batik Nasional</h5>
                        <p class="card-text">Di Hari Batik 2023, kami, kelas RPL 5A, dengan bangga mengenakan seragam batik yang indah pada tanggal 02 November 2023. Kecintaan kami terhadap budaya dan tradisi Indonesia tercermin dalam seragam kami yang khas. Suasana penuh semangat dan kebahagiaan terlihat di wajah kami saat kami merayakan keindahan batik dan merayakan warisan budaya kita bersama. #HariBatik2023 #RPL5A"</p>
                        <a href="/img/a.PNG" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Aktivitas 2 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="/image/makrab.png" class="card-img-top" alt="Foto Aktivitas 2">
                    <div class="card-body">
                        <h5 class="card-title">Malam Keakraban Teknik Informatika</h5>
                        <p class="card-text">Mahasiswa Teknik Informatika merayakan malam keakraban, atau yang biasa dikenal sebagai MAKRAB. Acara ini bertujuan untuk mempererat tali silaturahmi antara mahasiswa jurusan TI, menyambut dengan hangat mahasiswa baru, dan mengucapkan selamat tinggal kepada kakak tingkat yang telah sukses menyelesaikan perjalanan studi mereka melalui yudisium. Suasana penuh keceriaan, semangat, dan menciptakan kenangan yang tak terlupakan. #MAKRABTI #BudayaTI" </p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Aktivitas Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>