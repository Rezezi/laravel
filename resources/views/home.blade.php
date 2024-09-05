<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perusahaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3498db; /* Warna biru modern */
            --header-bg-color: #2c3e50; /* Biru tua */
            --footer-bg-color: #2c3e50; /* Biru tua */
            --link-color: #ecf0f1; /* Putih terang untuk link */
            --link-hover-bg-color: #34495e; /* Biru gelap untuk efek hover */
            --text-color: #2c3e50; /* Warna teks default */
            --button-bg-color: #3498db; /* Warna latar belakang tombol */
            --button-hover-bg-color: #2980b9; /* Warna latar belakang tombol saat hover */
        }

        body {
            background-image: url('https://img.freepik.com/free-photo/modern-office-space-interior_158595-5206.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            background: linear-gradient(to right, var(--primary-color), var(--header-bg-color));
            color: var(--link-color);
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        header h1 {
            font-size: 2em;
            margin: 0;
            font-weight: bold;
        }

        footer {
            color: var(--link-color);
            background-color: var(--footer-bg-color);
            padding: 15px;
            text-align: center;
            font-size: 0.9em;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.3);
        }

        footer a {
            color: var(--link-color);
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            color: #d4d4d4;
        }

        .btn-custom {
            color: var(--link-color);
            background-color: var(--button-bg-color);
            border: none;
            border-radius: 0.5rem;
            padding: 6px 12px;
            font-size: 0.9em;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: var(--button-hover-bg-color);
            text-decoration: none;
        }

        .main-content {
            padding: 20px;
            background: rgba(255, 255, 255, 0.9); /* Putih semi-transparan */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            flex: 1;
        }

        .card-header {
            background: var(--primary-color);
            color: #ffffff;
            padding: 10px;
            font-weight: bold;
            text-align: center;
        }

        .card-body {
            padding: 15px;
        }

        .card-footer {
            background: #f8f9fa;
            padding: 10px;
            text-align: center;
        }

        .card-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Jarak antar elemen card */
        }

        table {
            font-size: 0.9em; /* Ukuran font tabel */
            width: 100%; /* Lebar tabel */
            border-collapse: collapse;
        }

        table th, table td {
            padding: 8px 12px; /* Padding sel tabel */
            border: 1px solid #ddd; /* Border tabel */
        }

        table thead th {
            background-color: var(--primary-color);
            color: #fff;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        footer {
    background: url('https://img.freepik.com/free-photo/blur-hospital-clinic-interior_74190-5207.jpg?ga=GA1.1.423091863.1725418324&semt=ais_hybrid') no-repeat center center; /* Background image */
    background-size: cover;
    color: white;
    padding: 60px 20px;
    text-align: center;
    font-size: 1.2em;
    position: relative;
    margin-top: 30px;
}

footer::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay for text readability */
    z-index: 1;
}

footer .container {
    position: relative;
    z-index: 2;
}

footer h3 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

footer p {
    font-size: 1.5em;
    margin-bottom: 30px;
}

footer .btn-light {
    color: #333;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    padding: 10px 30px;
    border-radius: 25px;
    font-weight: 600;
    text-transform: uppercase;
}

footer .btn-light:hover {
    background-color: #e2e6ea;
    color: #333;
    text-decoration: none;
}


        .welcome-text {
            font-size: 1.5em;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <header>
        <h1>Data Perusahaan GigFloww</h1>
    </header>

    <div class="container my-4">
        <div class="main-content">
            <p class="welcome-text">Selamat datang di sistem GigFloww</p>
            
            <div class="card-container">
                <div class="card">
                    <div class="card-header">Informasi Perusahaan</div>
                    <div class="card-body">
                        <p>GigFlow adalah platform freelancer terdepan yang menghubungkan para profesional berbakat dengan klien yang mencari layanan berkualitas tinggi di berbagai bidang. Kami menawarkan solusi menyeluruh untuk berbagai proyek, mulai dari desain grafis yang inovatif, pengembangan web yang canggih, hingga penulisan konten yang mengesankan.

Dengan GigFlow, Anda tidak hanya mendapatkan akses ke talenta terbaik, tetapi juga pengalaman yang mulus dan efisien dalam menyelesaikan proyek Anda. Kami memahami bahwa setiap proyek memiliki kebutuhan unik, oleh karena itu kami menyediakan berbagai kategori layanan untuk memastikan bahwa Anda menemukan ahli yang tepat untuk setiap tugas.

GigFlow mengutamakan kemudahan penggunaan dan kepuasan pelanggan. Platform kami dirancang untuk membuat proses pencarian dan perekrutan freelancer semudah mungkin. Dengan fitur pencarian yang intuitif, sistem rating dan ulasan yang transparan, serta dukungan pelanggan yang responsif, kami berkomitmen untuk memastikan bahwa setiap interaksi dengan platform kami adalah pengalaman yang positif dan memuaskan..</p>
                    </div>
                </div>
            </div>

          <!-- Bagian Cards -->
   <div class="card-container">
                <div class="card">
                    <div class="card-header">Home</div>
                    <img src="https://th.bing.com/th/id/OIP.wlZ99P-yPVWVWKpfzYZtKwHaEL?w=267&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="">
                    <div class="card-body">
                        <p>Selamat datang di halaman utama! Di sini Anda dapat menemukan informasi penting tentang perusahaan.</p>
                        <div class="btn-container">
                            <a href="home" class="btn btn-custom">Lihat Berita Terbaru</a>
                        </div>
                    </div>
                </div>

                     <div class="card" style="width: 18rem;">
                     <div class="card-header">data pegawai</div>
                     <img src="https://th.bing.com/th/id/OIP.6_hrxWaEZCujt4oP9pPR9QHaEK?w=300&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="">
                      <div class="card-body">
                       <p class="card-text">di halaman ini kamu bisa melihat nama nama pegawai yang bekerja di perusahaan kami.</p>
                        <div class="btn-container">
                            <a href="pegawai" class="btn btn-custom">Lihat Daftar Pegawai</a>
                        </div>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                <div class="card-header">data gaji pegawai</div>
                     <img src="https://th.bing.com/th/id/OIP.wEF1Wkv_1fGQsnX8xw-oewHaEK?w=314&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="">
                      <div class="card-body">
                        <p>Di sini Anda dapat memeriksa informasi mengenai gaji pegawai dan struktur gaji perusahaan kami.</p>
                        <div class="btn-container">
                            <a href="gaji" class="btn btn-custom">Lihat Data Gaji</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Golongan</div>
                    <img src="https://th.bing.com/th/id/OIP.x7PH3t839d2xZd0droaFXgHaE8?w=246&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="">
                    <div class="card-body">
                        <p>Bagian ini menampilkan berbagai golongan pegawai dan kategori yang berlaku di perusahaan.</p>
                        <div class="btn-container">
                            <a href="golongan" class="btn btn-custom">Lihat Golongan Pegawai</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Lembur</div>
                    <img src="https://th.bing.com/th/id/OIP.i-ElWP0-wb-lRg2UmmbrOgHaE8?w=260&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="">
                    <div class="card-body">
                        <p>Di sini Anda dapat menemukan informasi tentang kebijakan lembur dan data lembur pegawai.</p>
                        <div class="btn-container">
                            <a href="lembur" class="btn btn-custom">Lihat Data Lembur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
    <div class="container">
        <h3 class="display-4">Kami Peduli Dengan Umpan Balik Anda!</h3>
        <p class="lead">Apakah pelayanan kami memuaskan? Jangan ragu untuk memberikan penilaian atau saran Anda kepada kami.</p>
        <a href="mailto:axcel500@gmail.com" class="btn btn-light btn-lg">Hubungi Kami</a>
    </div>
</footer>


    <!-- Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
 