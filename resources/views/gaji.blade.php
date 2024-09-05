<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #2c3e50, #3498db); /* Gradient background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
            border-radius: 15px;
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-custom {
            border-radius: 25px;
            font-weight: 600;
            padding: 10px 20px;
            transition: all 0.3s ease; /* Transition for hover effect */
        }
        .btn-add {
            background-color: #28a745;
            color: white;
        }
        .btn-edit {
            background-color: #ffc107;
            color: black;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .btn-custom:hover {
            opacity: 0.8; /* Hover effect */
        }
        table {
            font-size: 1em;
            border-collapse: separate;
            border-spacing: 0 15px;
            width: 100%;
        }
        thead th {
            background-color: #343a40;
            color: white;
            font-weight: bold;
        }
        tbody tr {
            background-color: #f8f9fa;
        }
        tbody tr:hover {
            background-color: #e9ecef;
        }
        .table td, .table th {
            vertical-align: middle;
            text-align: center;
            padding: 10px;
        }
        footer {
            background-color: rgba(52, 58, 64, 0.9);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1em;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.3);
        }
        footer a {
            color: #f8f9fa;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Daftar Gaji Pegawai</h2>
        <div class="text-end mb-3">
            <a href="home" class="btn btn-custom">Home</a>
            <a href="/gaji/tambah" class="btn btn-add btn-custom">+ Tambah Gaji Pegawai</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Gaji ID</th>
                    <th>Pegawai ID</th>
                    <th>Jumlah Gaji</th>
                    <th>Jumlah Lembur</th>
                    <th>Potongan</th>
                    <th>Gaji Diterima</th>
                    <th>Tanggal Gaji</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gaji as $j)
                <tr>
                    <td>{{ $j->gaji_id }}</td>
                    <td>{{ $j->pegawai_id }}</td>
                    <td>{{ $j->jumlah_gaji }}</td>
                    <td>{{ $j->jumlah_lembur }}</td>
                    <td>{{ $j->potongan }}</td>
                    <td>{{ $j->gaji_diterima }}</td>
                    <td>{{ $j->tanggal_gaji }}</td>
                    <td>
                        <a href="/gaji/edit/{{ $j->gaji_id }}" class="btn btn-edit btn-custom">Edit</a>
                        <a href="/gaji/hapus/{{ $j->gaji_id }}" class="btn btn-delete btn-custom">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        <p>GigFloww &copy; 2024. Hubungi kami untuk informasi lebih lanjut.</p>
    </footer>

    <!-- Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
