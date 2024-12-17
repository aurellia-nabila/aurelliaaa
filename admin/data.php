<?php
require_once "../config/config.php";

if (isset($_POST['submit'])) {
    $nama_menu = $_POST['namaMenu'];
    $deskripsi = $_POST['deskripsiMenu'];
    $harga = $_POST['hargaMenu'];
    $gambar = basename($_FILES['gambarMenu']['name']);
    $id_kategori = $_POST['idKategori'];
    
    $Data = [
        'namaMenu' => $nama_menu,
        'deskripsiMenu' => $deskripsi,
        'hargaMenu' => $harga,
        'idKategori' => $id_kategori,
        'gambarMenu' => $gambar,
    ];

    $validasi = ValidasiData(Data: $Data);

    if ($validasi == 0) {
        echo "data sudah lengkap siap di inputkan";
        $result = InputProduct($Data, $koneksi);
        $folderTujuan = $rootDir . "uploads";
        if ($result) {
            $upload = tambahGambar($folderTujuan, $_FILES['gambarMenu']);
            if ($upload)
                header("location:form.php?status=1");
            else
                header("location:form.php?errno=1");
        } else header("location:form.php?errno=1");
    } else {
        echo "data $validasi kurang";
    }
}

else if(isset($_GET['del'])){
    $id = $_GET['del'] ?? null;

    if($id === null || !ctype_digit($id)){
        header("location:view_gacoan.php?errno=3");
    }
    else {
        // function delete
        $result = delMenu($koneksi, $id);
        if($result) 
            header("location:view_gacoan.php?success=1");
        else 
            header("location:view_gacoan.php?errno=5");
    }
}
?>                                                                                                                                                                                                                                                                                                                                                                                 