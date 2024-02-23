<?php

require __DIR__ . "/functions/functions.php";
$judulLaman = "Edit Buku";

$idPenerbit = $_GET['id_penerbit'];
$query = tampilDataFirst("SELECT * FROM tabel_penerbit WHERE id_penerbit = '$idPenerbit'");

if ($query) {
    // Jangan lakukan apapun.
} else {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
    header("Location: layouts/404-page");
    die;
}
?>
<?php require __DIR__ . "/layouts/resources.php"; ?>

<?php require __DIR__ . "/layouts/navbar.php"; ?>

<div class="container">
    <h1 class="mt-2">Edit Penerbit</h1>
    <form method="POST" class="mt-5" action="<?= $hostToRoot ?>functions/edit-penerbit">
        <div class="form-group">
            <label for="idPenerbit"><b>ID Penerbit</b></label>
            <input type="text" name="id_penerbit" id="idPenerbit" value="<?= $query->id_penerbit ?>" class="form-control" style="cursor: not-allowed" readonly>
        </div>
        <div class="form-group">
            <label for="nama"><b>Nama</b></label>
            <input name="nama" id="nama" class="form-control" value="<?= $query->nama ?>" required>
        </div>
        <div class="form-group">
            <label for="alamat"><b>Alamat</b></label>
            <textarea name="alamat" id="alamat" class="form-control" required><?= $query->alamat ?></textarea>
        </div>
        <div class="form-group">
            <label for="kota"><b>Kota</b></label>
            <input name="kota" id="kota" class="form-control" value="<?= $query->kota ?>" required>
        </div>
        <div class="form-group">
            <label for="telepon"><b>Telepon</b></label>
            <input name="telepon" id="telepon" class="form-control" value="<?= $query->telepon ?>" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Edit Penerbit</button>
        <a href="<?= $hostToRoot ?>admin"><button type="button" class="btn btn-secondary mt-3">Batal</button></a>
    </form>
</div>

<?php require __DIR__ . "/layouts/footer.php"; ?>