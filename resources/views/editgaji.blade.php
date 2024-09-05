<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Update Data Gaji Karyawan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #6dd5fa, #2980b9); /* Gradient background */
            font-family: Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #000; /* Hitam */
            border-radius: 15px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        h3 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #fff; /* Putih */
            text-align: center;
        }
        .btn-back {
            background-color: #e74c3c;
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
            color: #fff; /* Warna teks label putih */
        }
        input[type="number"],
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333; /* Hitam untuk input */
            color: white; /* Teks input putih */
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
            color: #fff; /* Warna putih */
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3>Data Gaji Karyawan</h3>
        <a href="/gaji" class="btn-back">Kembali</a>
        <br/><br/>

        @foreach ($gaji as $j)

        <form action="/gaji/update" method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$j->gaji_id}}"><br>

            <div class="mb-3">
                <label for="pegawai_id">Pegawai ID:</label>
                <input type="number" name="pegawai id" id="pegawai_id" required="required" value="{{$j->pegawai_id}}">
            </div>
            <div class="mb-3">
                <label for="jumlah_gaji">Jumlah Gaji:</label>
                <input type="number" name="jumlah gaji" id="jumlah_gaji" required="required" value="{{$j->jumlah_gaji}}">
            </div>
            <div class="mb-3">
                <label for="jumlah_lembur">Jumlah Lembur:</label>
                <input type="number" name="jumlah lembur" id="jumlah_lembur" required="required" value="{{$j->jumlah_lembur}}">
            </div>
            <div class="mb-3">
                <label for="potongan">Potongan:</label>
                <input type="number" name="potongan" id="potongan" required="required" value="{{$j->potongan}}">
            </div>
            <div class="mb-3">
                <label for="gaji_diterima">Gaji Diterima:</label>
                <input type="number" name="gaji diterima" id="gaji_diterima" required="required" value="{{$j->gaji_diterima}}">
            </div>
            <div class="mb-3">
                <label for="tanggal_gaji">Tanggal Gaji:</label>
                <input type="date" name="tanggal_gaji" id="tanggal_gaji" required="required" value="{{$j->tanggal_gaji}}">
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
