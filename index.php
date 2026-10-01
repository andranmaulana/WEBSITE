<?php 
$status = $_GET['status'] ?? ''; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Pendaftaran Siswa Baru</h2>

        <?php if ($status == "sukses"): ?>
            <div class="alert-success">Pendaftaran berhasil disimpan!</div>
        <?php elseif ($status == "gagal"): ?>
            <div class="alert-error">Pendaftaran gagal, silakan coba lagi.</div>
        <?php endif; ?>

        <form action="proses_daftar.php" method="POST">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="contoh@email.com" required>

            <label>Alamat</label>
            <textarea name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>

            <label>No. HP</label>
            <input type="text" name="no_hp" placeholder="08xxxxxxxxxx" required>

            <label>Pilih Kelas</label>
            <select name="kelas" required>
                <option value="">-- Pilih Kelas --</option>
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                <option value="LP">LP</option>
                <option value="TKR">TKR</option>
                <option value="TSM">TSM</option>
            </select>

            <button type="submit">Kirim</button>
        </form>

        <a class="nav-link" href="data_siswa.php">Lihat Data Siswa »</a><br>
        <a class="nav-link" href="perkalian.php">Program Perkalian »</a>
    </div>
</body>
</html>
