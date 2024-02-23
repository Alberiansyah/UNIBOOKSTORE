<?php

require __DIR__ . "/functions/functions.php";
$judulLaman = "Edit Buku";

$idBuku = $_GET['id_buku'];
$query = tampilDataFirst("SELECT * FROM tabel_buku WHERE id_buku = '$idBuku'");

$queryPenerbit = tampilData("SELECT * FROM tabel_penerbit");
?>
<?php require __DIR__ . "/layouts/resources.php"; ?>

<?php require __DIR__ . "/layouts/navbar.php"; ?>

<div class="container">
    <h1 class="mt-2">Edit Buku</h1>
    <form method="POST" class="mt-5" action="<?= $hostToRoot ?>functions/tambah-stok">
        <div class="form-group">
            <label for="idBuku"><b>ID Buku</b></label>
            <input type="text" name="id_buku" id="idBuku" value="<?= $query->id_buku ?>" class="form-control" style="cursor: not-allowed" readonly>
        </div>
        <div class="form-group">
            <label for="namaBuku"><b>Nama Buku</b></label>
            <textarea name="nama_buku" id="namaBuku" class="form-control" style="cursor: not-allowed" readonly><?= $query->nama_buku ?></textarea>
        </div>
        <div class="form-group">
            <label for="penerbit"><b>Penerbit</b></label>
            <input type="text" name="penerbit" id="penerbit" value="<?= $query->penerbit ?>" class="form-control" style="cursor: not-allowed" readonly>
        </div>
        <div class="form-group">
            <label for="stok"><b>Stok</b></label>
            <input type="text" name="stok" id="stok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Stok</button>
        <a href="<?= $hostToRoot ?>admin"><button type="button" class="btn btn-secondary mt-3">Batal</button></a>
    </form>
</div>

<?php require __DIR__ . "/layouts/footer.php"; ?>