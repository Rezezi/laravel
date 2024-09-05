<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Golongan Baru</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #2c3e50, #3498db);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        h3 {
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
        }
        .btn-custom {
            border-radius: 25px;
            font-weight: 600;
            padding: 10px 20px;
            transition: all 0.3s ease;
            background-color: #28a745;
            color: white;
        }
        .btn-custom:hover {
            opacity: 0.8;
        }
        .form-control {
            border-radius: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">Tambah Data Golongan</h3>
        <a href="/golongan" class="btn btn-primary mb-3">Kembali</a>
        
        <form action="/golongan/storetambah" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="golongan_nama" class="form-label">Nama Golongan</label>
                <input type="text" class="form-control" id="golongan_nama" name="golongan_nama" required>
            </div>

            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" required>
            </div>

            <div class="mb-3">
                <label for="tunjangan_keluarga" class="form-label">Tunjangan Keluarga</label>
                <input type="number" class="form-control" id="tunjangan_keluarga" name="tunjangan_keluarga" required>
            </div>

            <div class="mb-3">
                <label for="tunjangan_transport" class="form-label">Tunjangan Transport</label>
                <input type="number" class="form-control" id="tunjangan_transport" name="tunjangan_transport" required>
            </div>

            <div class="mb-3">
                <label for="tunjangan_makan" class="form-label">Tunjangan Makan</label>
                <input type="number" class="form-control" id="tunjangan_makan" name="tunjangan_makan" required>
            </div>

            <button type="submit" class="btn btn-custom">Simpan Data</button>
        </form>
    </div>

    <!-- Bootstrap JS dan dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

