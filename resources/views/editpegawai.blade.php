<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Update Database</title>
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
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
            border-radius: 15px;
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        h3 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-custom {
            border-radius: 25px;
            font-weight: 600;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            transition: all 0.3s ease; /* Transition for hover effect */
        }
        .btn-custom:hover {
            opacity: 0.8; /* Hover effect */
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        label {
            color: #333;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Data Pegawai</h3>
        <a href="/pegawai" class="btn btn-secondary mb-3">Kembali</a>

        @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="mb-3">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required="required" value="{{ $p->pegawai_nama }}">
            </div>
            <div class="mb-3">
                <label for="jabatan">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control" required="required" value="{{ $p->pegawai_jabatan }}">
            </div>
            <div class="mb-3">
                <label for="umur">Umur:</label>
                <input type="number" id="umur" name="umur" class="form-control" required="required" value="{{ $p->pegawai_umur }}">
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" class="form-control" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-custom">
        </form>
        @endforeach
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
