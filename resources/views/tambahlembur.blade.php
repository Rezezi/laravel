<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create & Insert Data Lembur</title>
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
        h3 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-back {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
        }
        .btn-back:hover {
            opacity: 0.8;
        }
        form {
            font-size: 1.2em;
        }
        label {
            font-weight: bold;
        }
        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
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

    <div class="container">
        <h3>Data Gaji</h3>
        <a href="home" class="btn btn-custom">Home</a>
        <a href="/lembur" class="btn-back">Kembali</a>
        <br/><br/>

        <form action="/lembur/storetambah" method="post">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="pegawai_id">Pegawai ID:</label><br>
                <input type="number" name="pegawai_id" id="pegawai_id" required="required">
            </div>
            <div class="mb-3">
                <label for="bulan_lembur">Bulan Lembur:</label><br>
                <input type="text" name="bulan_lembur" id="bulan_lembur" required="required">
            </div>
            <div class="mb-3">
                <label for="jumlah_lembur">Jumlah Lembur:</label><br>
                <input type="number" name="jumlah_lembur" id="jumlah_lembur" required="required">
            </div>
            <input type="submit" value="Simpan Data">
        </form>
    </div>

    <footer>
        <p>GigFloww &copy; 2024</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
