<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lembur Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-add {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .btn-add:hover {
            opacity: 0.8;
        }
        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }
        thead th {
            background-color: #343a40;
            color: white;
            padding: 10px;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tbody tr:nth-child(odd) {
            background-color: #e9ecef;
        }
        tbody tr:hover {
            background-color: #ddd;
        }
        td, th {
            padding: 15px;
            text-align: center;
        }
        .btn-edit {
            background-color: #ffc107;
            color: black;
            border-radius: 5px;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
            border-radius: 5px;
        }
        footer {
            margin-top: 50px;
            text-align: center;
            color: #fff;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h2>Daftar Lembur Pegawai</h2>
        <a href="home" class="btn btn-custom">Home</a>
        <a href="/lembur/tambah" class="btn btn-add">+ Tambah Jumlah Lembur</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Lembur ID</th>
                    <th>Pegawai ID</th>
                    <th>Bulan Lembur</th>
                    <th>Jumlah Lembur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lembur as $r)
                <tr>
                    <td>{{ $r->lembur_id }}</td>
                    <td>{{ $r->pegawai_id }}</td>
                    <td>{{ $r->bulan_lembur }}</td>
                    <td>{{ $r->jumlah_lembur }}</td>
                    <td>
                        <a href="/lembur/edit/{{ $r->lembur_id }}" class="btn btn-edit">Edit</a>
                        <a href="/lembur/hapus/{{ $r->lembur_id }}" class="btn btn-delete">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        <p>GigFloww &copy; 2024</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
