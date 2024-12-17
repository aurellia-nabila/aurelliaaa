<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Diskon</title>
</head>
<body>

    <h1>Hitung Diskon</h1>
    <form method="post">
        <label for="harga">Harga Asli:</label>
        <input type="number" id="harga" name="harga" placeholder="Masukkan harga asli" required>

        <label for="diskon">Persentase Diskon:</label>
        <input type="number" id="diskon" name="diskon" placeholder="Masukkan persentase diskon" required>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $harga_asli = $_POST['harga'];
        $persentase_diskon = $_POST['diskon'];

        // Hitung diskon
        $diskon = $harga_asli * ($persentase_diskon / 100);
        $harga_setelah_diskon = $harga_asli - $diskon;

        echo "<h2>Hasil:</h2>";
        echo "Jumlah Diskon: " . number_format($diskon, 2, ',', '.') . "<br>";
        echo "Harga Setelah Diskon: " . number_format($harga_setelah_diskon, 2, ',', '.') . "<br>";
    }
    ?>

</body>
</html>
