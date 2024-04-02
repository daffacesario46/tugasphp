<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .biodata-item{
            margin-bottom: 20px;
        }
        .biodata-item label {
            font-weight: bold;
        }
        .biodata-item p {
            margin: 5px 0;
        }
        .profile-img {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: auto;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Biodata</h1>
        <img src="https://torquecafe.com/wp-content/uploads/2023/07/crop_20230711_180559.jpg" alt="Foto profil" class="profile-img">
        <div class="biodata-item">
            <label for="nama">Nama:</label>
            <p>Daffa Cesario Safi'i</p>
        </div>
        <div class="biodata-item">
            <label for="umur">Umur:</label>
            <p>22 tahun</p>
        </div>
        <div class="biodata-item">
            <label for="alamat">Alamat:</label>
            <p>Kota tangerang</p>
        </div>
        <div class="biodata-item">
            <label for="pekerjaan">Pekerjaan:</label>
            <p>Mahasiswa</p>
        </div>
    </div>
</body>
</html>