<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Insert Database</title>
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
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        h3 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .btn-custom {
            border-radius: 25px;
            font-weight: 600;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 15px;
        }
        .btn-custom:hover {
            opacity: 0.8;
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
        input[type="text"], input[type="number"], input[type="date"], textarea {
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
        <h3>Data Gaji</h3>
        <a href="/gaji" class="btn btn-secondary mb-3">Kembali</a>

        <form action="/gaji/storetambah" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="pegawai_id">Pegawai ID:</label>
                <input type="number" id="pegawai_id" name="pegawai_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_gaji">Jumlah Gaji:</label>
                <input type="number" id="jumlah_gaji" name="jumlah_gaji" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_lembur">Jumlah Lembur:</label>
                <input type="number" id="jumlah_lembur" name="jumlah_lembur" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="potongan">Potongan:</label>
                <input type="number" id="potongan" name="potongan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gaji_diterima">Gaji Diterima:</label>
                <input type="number" id="gaji_diterima" name="gaji_diterima" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_gaji">Tanggal Gaji:</label>
                <input type="date" id="tanggal_gaji" name="tanggal_gaji" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom">Simpan Data</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
