<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
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
            background: rgba(255, 255, 255, 0.95); /* Slightly transparent background */
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out; /* Container hover effect */
        }
        .container:hover {
            transform: scale(1.02); /* Slight zoom on hover */
        }
        h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
        }
        .btn-custom {
            border-radius: 25px;
            font-weight: 600;
            padding: 10px 20px;
            transition: all 0.3s ease; /* Transition for hover effect */
            text-transform: uppercase;
        }
        .btn-home {
            background-color: #6c757d;
            color: white;
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
            opacity: 0.9; /* Hover effect */
            transform: translateY(-2px); /* Slight lift on hover */
        }
        table {
            font-size: 1em;
            border-collapse: separate;
            border-spacing: 0 15px;
        }
        thead th {
            background-color: #343a40;
            color: white;
            font-weight: bold;
            border-bottom: 2px solid #007bff;
            transition: background-color 0.3s ease;
        }
        thead th:hover {
            background-color: #495057; /* Darker color on hover */
        }
        tbody tr {
            background-color: #f8f9fa;
            transition: background-color 0.3s ease;
        }
        tbody tr:hover {
            background-color: #e9ecef;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Shadow on hover */
        }
        .table td, .table th {
            vertical-align: middle;
            text-align: center;
            padding: 12px;
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
            font-weight: 600;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Data Pegawai</h2>
        <div class="text-center mb-4">
            <a href="home" class="btn btn-home btn-custom">Home</a>
            <a href="/pegawai/tambah" class="btn btn-add btn-custom">+ Tambah Pegawai Baru</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_id }}</td>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-edit btn-custom">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-delete btn-custom">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        <p>Pelayanan kami pasti baik? Hubungi kami untuk beri penilaian <a href="mailto:axcel500@gmail.com">axcel500@gmail.com</a></p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
