<?php

require __DIR__ . "/functions/functions.php";
$judulLaman = "Tambah Buku";

$queryPenerbit = tampilData("SELECT * FROM tabel_penerbit");

?>
<?php require __DIR__ . "/layouts/resources.php"; ?>

<?php require __DIR__ . "/layouts/navbar.php"; ?>

<div class="container">
    <h1 class="mt-2">Tambah Buku</h1>
    <form method="POST" class="mt-5" action="<?= $hostToRoot ?>functions/tambah-buku">
        <div class="form-group">
            <label for="idBuku"><b>ID Buku</b></label>
            <input type="text" name="id_buku" id="idBuku" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kategori"><b>Kategori</b></label>
            <select name="kategori" id="kategori" class="form-control">
                <option value="">-- Pilih opsi --</option>
                <option value="Bisnis">Bisnis</option>
                <option value="Keilmuan">Keilmuan</option>
                <option value="Novel">Novel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="namaBuku"><b>Nama Buku</b></label>
            <textarea name="nama_buku" id="namaBuku" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="harga"><b>Harga</b></label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="stok"><b>Stok</b></label>
            <input type="number" name="stok" id="stok" class="form-control" required>
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
        <button class="btn btn-primary mt-3">Tambah Data</button>
        <a href="<?= $hostToRoot ?>admin"><button type="button" class="btn btn-secondary mt-3">Batal</button></a>
    </form>
</div>

<?php require __DIR__ . "/layouts/footer.php"; ?>