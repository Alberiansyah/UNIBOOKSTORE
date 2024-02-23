<?php

require __DIR__ . "/../koneksi/koneksi.php";

function editBuku($request)
{
    global $pdo, $stok, $id_buku;
    $query = $pdo->prepare($request);
    $query->execute([$stok, $id_buku]);

    return $query;
}

$id_buku = htmlspecialchars($_POST['id_buku']);
$stok = htmlspecialchars($_POST['stok']);

$query = editBuku("UPDATE tabel_buku SET
                              stok = ?
                              WHERE id_buku = ?
");

if ($query) {
    $_SESSION['berhasil'] = ['type' => true, 'message' => 'Stok Buku berhasil ditambah.'];
    header("Location: ../admin.php");
} else {
    $_SESSION['berhasil'] = ['type' => false, 'message' => 'Stok Buku gagal ditambah.'];
    header("Location: ../admin.php");
}
