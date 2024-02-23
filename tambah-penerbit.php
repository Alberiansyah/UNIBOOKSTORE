<?php

require __DIR__ . "/functions/functions.php";
$judulLaman = "Tambah Penerbit";

?>
<?php require __DIR__ . "/layouts/resources.php"; ?>

<?php require __DIR__ . "/layouts/navbar.php"; ?>

<div class="container">
    <h1 class="mt-2">Tambah Penerbit</h1>
    <form method="POST" class="mt-5" action="<?= $hostToRoot ?>functions/tambah-penerbit">
        <div class="form-group">
            <label for="idPenerbit"><b>ID Penerbit</b></label>
            <input type="text" name="id_penerbit" id="idPenerbit" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama"><b>Nama</b></label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat"><b>Alamat</b></label>
            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="kota"><b>Kota</b></label>
            <input type="text" name="kota" id="kota" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telepon"><b>Telepon</b></label>
            <input type="text" name="telepon" id="telepon" class="form-control" required>
        </div>
        <button class="btn btn-primary mt-3">Tambah Data</button>
        <a href="<?= $hostToRoot ?>admin"><button type="button" class="btn btn-secondary mt-3">Batal</button></a>
    </form>
</div>

<?php require __DIR__ . "/layouts/footer.php"; ?>