<?php
    require "../config/config.php"
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Admin</title>
</head>
<body>
    <style>
        body {
            background-color: pink;
        }
    </style>
    <div class="container mt-5">
        <h2 style='color: white;'>Form Admin</h2>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" style='color: white;'>Nama Menu</label>
                <input type="text" class="form-control" id="Name" placeholder="Masukkan menu" name="namaMenu">
            </div>
            <div class="form-group">
                <label for="deskripsi" style='color: white;'>Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi" name="deskripsiMenu">
            </div>
            <div class="form-group">
                <label for="Harga" style='color: white;'>Harga</label>
                <input type="Harga" class="form-control" id="harga" placeholder="Masukkan harga" name="hargaMenu">
            </div>

            <div class="form-group">
                <label for="Id_Kategori" style='color: white;'>Id Kategori</label>
                <select class="form-control" id="gender" name="idKategori">
                    <option value="">Pilih Id Kategori</option>
                    <option value="Burger">MIE</option>
                    <option value="Chicken Krispy">DIMSUM</option>
                    <option value="Drink">MINUMAN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message" class="form-label" style='color: white;'>foto :</label>
                <input type="file" class="form-control" name="gambarMenu" id=""> </br>
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block" style="Background-color: #6EACDA;" text-color: black>Kirim</button>
            

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>