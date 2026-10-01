<?php
$angka1 = $angka2 = $hasil = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    
    if (is_numeric($angka1) && is_numeric($angka2)) {
        $hasil = $angka1 * $angka2;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Perkalian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Program Operasi Perkalian</h2>

        <form method="POST">
            <label>Bilangan Pertama</label>
            <input type="number" name="angka1" value="<?= $angka1 ?>" required>

            <label>Bilangan Kedua</label>
            <input type="number" name="angka2" value="<?= $angka2 ?>" required>

            <button type="submit">Hitung</button>
        </form>

        <?php if ($hasil !== ""): ?>
            <div class="result-box">
                <?= $angka1 ?> × <?= $angka2 ?> = <?= $hasil ?>
            </div>
        <?php endif; ?>

        <a class="nav-link" href="index.php">« Kembali</a>
    </div>
</body>
</html>
