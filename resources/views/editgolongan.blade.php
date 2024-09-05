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
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
            border-radius: 15px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        h3 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
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
        <h3>Data Golongan</h3>
        <a href="/golongan" class="btn-back">Kembali</a>
        <br/><br/>

        @foreach ($golongan as $g)

        <form action="/golongan/update" method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$g->golongan_id}}"><br>
            
            <div class="mb-3">
                <label for="golongan_nama">Golongan Nama:</label><br>
                <input type="text" name="golongan_nama" id="golongan_nama" required="required" value="{{$g->golongan_nama}}">
            </div>
            <div class="mb-3">
                <label for="gaji_pokok">Gaji Pokok:</label><br>
                <input type="number" name="gaji_pokok" id="gaji_pokok" required="required" value="{{$g->gaji_pokok}}">
            </div>
            <div class="mb-3">
                <label for="tunjangan_keluarga">Tunjangan Keluarga:</label><br>
                <input type="number" name="tunjangan_keluarga" id="tunjangan_keluarga" required="required" value="{{$g->tunjangan_keluarga}}">
            </div>
            <div class="mb-3">
                <label for="tunjangan_transport">Tunjangan Transport:</label><br>
                <input type="number" name="tunjangan_transport" id="tunjangan_transport" required="required" value="{{$g->tunjangan_transport}}">
            </div>
            <div class="mb-3">
                <label for="tunjangan_makan">Tunjangan Makan:</label><br>
                <input type="number" name="tunjangan_makan" id="tunjangan_makan" required="required" value="{{$g->tunjangan_makan}}">
            </div>

            <input type="submit" value="Simpan Data">
        </form>
        @endforeach
    </div>

    <footer>
        <p>GigFloww &copy; 2024</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
