<?php 
require_once "../config/config.php";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabel Makanan</title>
    <style>
        .food-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
        }
        
        .table td {
            vertical-align: middle;
        }
        
        .stock-badge {
            padding: 5px 10px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
        <div class="card">
            <div class="card-header bg-info emphasis text-white">
                <h4 class="mb-0">Menu Makanan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php
                        $product = ViewProduct($koneksi);

                        if($product == 0 ){
                            echo "Tidak ada data";
                        }
                        else{
                    ?>
                    <table class="table table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th scope="col">id_menu</th>
                                <th scope="col">nama_menu</th>
                                <th scope="col">deskripsi</th>
                                <th scope="col">harga</th>
                                <th scope="col">id_kategori</th>
                                <th scope="col">gambar</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php 
                                    // awalan foreach 
                                    $no = 1; 
                                    foreach($product as $Data) {
                                ?>
                                <tr>
                                    <td class="fw-bold"><?=$Data['Id_Menu']?</td>
                                    <td class="fw-bold"><?=$Data['Nama_Menu']?></td>
                                    <td><span class="badge bg-info"><?=$Data['Deskripsi']?></span></td>
                                    <td><?=$Data['Harga']?></td>
                                    <td><?=$Data['Id_Kategori']?></td>
                                    <td><?=$Data['Image']?></td>
                                    <td>Edit</td>
                                    <td><a href="?del=<?=$Data['Id_Menu'] ?>"> delete</a></td>
                                </tr>
                                <?php 
                                    $no ++;
                                    }
                                        // akhiran foreach
                                ?>
                            </tbody>
                    </table>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>