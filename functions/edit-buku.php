<?php

require __DIR__ . "/../koneksi/koneksi.php";

function editBuku($request)
{
    global $pdo, $kategori, $nama_buku, $harga, $penerbit, $id_buku;
    $query = $pdo->prepare($request);
    $query->execute([$kategori, $nama_buku, $harga, $penerbit, $id_buku]);

    return $query;
}

$id_buku = htmlspecialchars($_POST['id_buku']);
$kategori = htmlspecialchars($_POST['kategori']);
$nama_buku = htmlspecialchars($_POST['nama_buku']);
$harga = htmlspecialchars($_POST['harga']);
$penerbit = htmlspecialchars($_POST['penerbit']);

$query = editBuku("UPDATE tabel_buku SET
                              kategori = ?,
                              nama_buku = ?,
                              harga = ?,
                              penerbit = ?
                              WHERE id_buku = ?
");

if ($query) {
    $_SESSION['berhasil'] = ['type' => true, 'message' => 'Buku berhasil diubah.'];
    header("Location: ../admin.php");
} else {
    $_SESSION['berhasil'] = ['type' => false, 'message' => 'Buku gagal diubah.'];
    header("Location: ../admin.php");
}
