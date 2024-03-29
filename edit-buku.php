<?php

require __DIR__ . "/functions/functions.php";
$judulLaman = "Edit Buku";

$idBuku = $_GET['id_buku'];
$query = tampilDataFirst("SELECT * FROM tabel_buku WHERE id_buku = '$idBuku'");
$queryPenerbit = tampilData("SELECT * FROM tabel_penerbit");

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
    <h1 class="mt-2">Edit Buku</h1>
    <form method="POST" class="mt-5" action="<?= $hostToRoot ?>functions/edit-buku">
        <div class="form-group">
            <label for="idBuku"><b>ID Buku</b></label>
            <input type="text" name="id_buku" id="idBuku" value="<?= $query->id_buku ?>" class="form-control" style="cursor: not-allowed" readonly>
        </div>
        <div class="form-group">
            <label for="kategori"><b>Kategori</b></label>
            <select name="kategori" id="kategori" class="form-control" required>
                <option value="">-- Pilih opsi --</option>
                <option value="Bisnis">Bisnis</option>
                <option value="Keilmuan">Keilmuan</option>
                <option value="Novel">Novel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="namaBuku"><b>Nama Buku</b></label>
            <textarea name="nama_buku" id="namaBuku" class="form-control" required><?= $query->nama_buku ?></textarea>
        </div>
        <div class="form-group">
            <label for="harga"><b>Harga</b></label>
            <input type="number" name="harga" id="harga" value="<?= $query->harga ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="penerbit"><b>Penerbit</b></label>
            <select name="penerbit" id="penerbit" class="form-control" required>
                <option value="">-- Pilih opsi --</option>
                <?php foreach ($queryPenerbit as $data) : ?>
                    <option value="<?= $data->nama ?>"><?= $data->nama ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Edit Buku</button>
        <a href="<?= $hostToRoot ?>admin"><button type="button" class="btn btn-secondary mt-3">Batal</button></a>
    </form>
</div>

<?php require __DIR__ . "/layouts/footer.php"; ?>