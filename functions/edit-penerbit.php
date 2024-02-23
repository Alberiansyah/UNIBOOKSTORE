<?php

require __DIR__ . "/../koneksi/koneksi.php";

function editPenerbit($request)
{
    global $pdo, $nama, $alamat, $kota, $telepon, $id_penerbit;
    $query = $pdo->prepare($request);
    $query->execute([$nama, $alamat, $kota, $telepon, $id_penerbit]);

    return $query;
}

$id_penerbit = htmlspecialchars($_POST['id_penerbit']);
$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);
$kota = htmlspecialchars($_POST['kota']);
$telepon = htmlspecialchars($_POST['telepon']);

$query = editPenerbit("UPDATE tabel_penerbit SET
                              nama = ?,
                              alamat = ?,
                              kota = ?,
                              telepon = ?
                              WHERE id_penerbit = ?
");

if ($query) {
    $_SESSION['berhasil'] = ['type' => true, 'message' => 'Penerbit berhasil diubah.'];
    header("Location: ../admin.php");
} else {
    $_SESSION['berhasil'] = ['type' => false, 'message' => 'Penerbit gagal diubah.'];
    header("Location: ../admin.php");
}
