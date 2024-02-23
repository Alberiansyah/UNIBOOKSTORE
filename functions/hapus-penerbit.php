<?php

require __DIR__ . "/../koneksi/koneksi.php";

function hapusPenerbit($request)
{
    global $pdo, $id_penerbit;
    $query = $pdo->prepare($request);
    $query->execute([$id_penerbit]);

    return $query;
}

$id_penerbit = htmlspecialchars($_GET['id_penerbit']);
$query = hapusPenerbit("DELETE FROM tabel_penerbit WHERE id_penerbit = ?");

if ($query) {
    $_SESSION['berhasil'] = ['type' => true, 'message' => 'Penerbit berhasil dihapus.'];
    header("Location: ../admin.php");
} else {
    $_SESSION['berhasil'] = ['type' => false, 'message' => 'Penerbit gagal dihapus.'];
    header("Location: ../admin.php");
}
