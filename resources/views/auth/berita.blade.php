<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita Mahasiswa</title>
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
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Berita Mahasiswa</h1>
        <hr>

        <!-- Daftar Berita -->
        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/image/bersama.png" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Agense Foto Bersama Setelah Melaksanakan UTS Semester Ganjil</h5>
                        <p class="card-text">Pada hari terakhir UTS semester ganjil, suasana penuh nostalgia dan antusiasme menyelimuti kami. Agensi mengambil sebuah gambar foto bersama sebagai momen berharga untuk mengabadikan kenangan-kenangan indah bersama rekan-rekan sekelas kami, mengungkapkan persahabatan dan semangat yang tumbuh di antara kami selama perjalanan akademik kami yang penuh tantangan. Gambar ini akan selalu mengingatkan kami pada kerja keras, dukungan bersama, dan persatuan di dalam dan di luar ruang kuliah.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/image/bmc.png" class="card-img-top" alt="Gambar Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">BMC Technopreneur</h5>
                        <p class="card-text">BMC atau Business Model Canvas, merupakan salah satu materi yang kami teliti dengan tekun dalam matakuliah Technopreneur di bawah bimbingan dari seorang dosen yang penuh pengalaman, Bapak Ridho Nosa M.Kom. Kami mengeksplorasi dan memahami BMC sebagai alat penting dalam merancang model bisnis yang inovatif dan berkelanjutan. Materi ini memberikan wawasan yang berharga dan memberdayakan kami untuk menghadapi tantangan dalam dunia bisnis yang terus berubah dengan kreativitas dan strategi yang solid.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Berita Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>