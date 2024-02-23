<?php

require __DIR__ . "/../koneksi/koneksi.php";

function tampilDataFirst($request)
{
    global $pdo;
    $query = $pdo->prepare($request);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_OBJ);

    return $row;
}

function submitDeleteProjek($request)
{
    global $pdo, $id_buku;
    $query = $pdo->prepare($request);
    $query->execute([$id_buku]);

    return $query;
}

$id_buku = htmlspecialchars($_GET['id_buku']);
$cek = tampilDataFirst("SELECT * FROM tabel_buku WHERE id_buku = '$id_buku'");
$query = submitDeleteProjek("DELETE FROM tabel_buku WHERE id_buku = ?");

if ($cek) {
    if ($query) {
        $_SESSION['berhasil'] = ['type' => true, 'message' => 'Buku berhasil dihapus.'];
        header("Location: ../admin.php");
    } else {
        $_SESSION['berhasil'] = ['type' => false, 'message' => 'Buku gagal dihapus.'];
        header("Location: ../admin.php");
    }
} else {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
    header("Location: ../layouts/404-page");
    die;
}
