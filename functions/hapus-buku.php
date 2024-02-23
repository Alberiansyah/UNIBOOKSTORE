<?php

require __DIR__ . "/../koneksi/koneksi.php";

function submitDeleteProjek($request)
{
    global $pdo, $id_buku;
    $query = $pdo->prepare($request);
    $query->execute([$id_buku]);

    return $query;
}

$id_buku = htmlspecialchars($_GET['id_buku']);
$query = submitDeleteProjek("DELETE FROM tabel_buku WHERE id_buku = ?");

if ($query) {
    $_SESSION['berhasil'] = ['type' => true, 'message' => 'Buku berhasil dihapus.'];
    header("Location: ../admin.php");
} else {
    $_SESSION['berhasil'] = ['type' => false, 'message' => 'Buku gagal dihapus.'];
    header("Location: ../admin.php");
}
