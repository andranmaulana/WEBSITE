<?php
require "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    foreach ($_POST as $k => $v) {
        $_POST[$k] = mysqli_real_escape_string($koneksi, $v);
    }

    extract($_POST);

    $q = "INSERT INTO siswa (nama_lengkap, email, alamat, no_hp, kelas) 
          VALUES ('$nama_lengkap', '$email', '$alamat', '$no_hp', '$kelas')";

    $sukses = mysqli_query($koneksi, $q);
    header("Location: index.php?status=" . ($sukses ? "sukses" : "gagal"));
    exit;
}
?>
