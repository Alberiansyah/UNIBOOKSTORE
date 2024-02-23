<?php

require __DIR__ . "/../koneksi/koneksi.php";

$id_penerbit = htmlspecialchars($_POST['id_penerbit']);
$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);
$kota = htmlspecialchars($_POST['kota']);
$telepon = htmlspecialchars($_POST['telepon']);

$query = $pdo->prepare("INSERT INTO tabel_penerbit (id_penerbit, nama, alamat, kota, telepon) VALUE(?, ?, ?, ?, ?)");
$query->execute([$id_penerbit, $nama, $alamat, $kota, $telepon]);
if ($query) {
    $_SESSION['berhasil'] = ['type' => true, 'message' => 'Penerbit berhasil ditambahkan.'];
    header("Location: ../admin.php");
} else {
    $_SESSION['berhasil'] = ['type' => false, 'message' => 'Penerbit gagal ditambahkan.'];
    header("Location: ../admin.php");
}
