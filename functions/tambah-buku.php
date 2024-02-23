<?php

require __DIR__ . "/../koneksi/koneksi.php";

$id_buku = htmlspecialchars($_POST['id_buku']);
$kategori = htmlspecialchars($_POST['kategori']);
$nama_buku = htmlspecialchars($_POST['nama_buku']);
$harga = htmlspecialchars($_POST['harga']);
$stok = htmlspecialchars($_POST['stok']);
$penerbit = htmlspecialchars($_POST['penerbit']);

$query = $pdo->prepare("INSERT INTO tabel_buku (id_buku, kategori, nama_buku, harga, stok, penerbit) VALUE(?, ?, ?, ?, ?, ?)");
$query->execute([$id_buku, $kategori, $nama_buku, $harga, $stok, $penerbit]);

if ($query) {
    $_SESSION['berhasil'] = ['type' => true, 'message' => 'Buku berhasil ditambahkan.'];
    header("Location: ../admin.php");
} else {
    $_SESSION['berhasil'] = ['type' => false, 'message' => 'Buku gagal ditambahkan.'];
    header("Location: ../admin.php");
}
