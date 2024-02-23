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

function hapusPenerbit($request)
{
    global $pdo, $id_penerbit;
    $query = $pdo->prepare($request);
    $query->execute([$id_penerbit]);

    return $query;
}

$id_penerbit = htmlspecialchars($_GET['id_penerbit']);
$cek = tampilDataFirst("SELECT * FROM tabel_penerbit WHERE id_penerbit = '$id_penerbit'");
$query = hapusPenerbit("DELETE FROM tabel_penerbit WHERE id_penerbit = ?");

if ($cek) {
    if ($query) {
        $_SESSION['berhasil'] = ['type' => true, 'message' => 'Penerbit berhasil dihapus.'];
        header("Location: ../admin.php");
    } else {
        $_SESSION['berhasil'] = ['type' => false, 'message' => 'Penerbit gagal dihapus.'];
        header("Location: ../admin.php");
    }
} else {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
    header("Location: ../layouts/404-page");
    die;
}
