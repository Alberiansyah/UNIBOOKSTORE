<?php

require __DIR__ . "/functions/functions.php";
$judulLaman = "Pencarian Buku";
$nama_buku = $_GET['nama_buku'];
$queryBuku = tampilData("SELECT * FROM tabel_buku WHERE nama_buku LIKE '%$nama_buku%'");
$countBuku = count($queryBuku);
?>
<?php require __DIR__ . "/layouts/resources.php"; ?>

<?php require __DIR__ . "/layouts/navbar.php"; ?>

<div class="container">
    <h1 class="mt-2">Data Buku</h1>
    <!-- <a href="<?= $hostToRoot ?>tambah-buku"><button class="btn btn-success mt-3">Tambah</button></a> -->
    <form method="GET" class="d-flex mt-3" action="<?= $hostToRoot ?>cari-buku?">
        <input type="search" class="form-control me-2" name="nama_buku" placeholder="Cari Buku...">
        <button class="btn btn-info">Cari</button>
    </form>
    <div class="table-responsive">
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kategori</th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Penerbit</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($countBuku < 1) : ?>
                    <tr>
                        <td colspan="6" align="center">Tidak terdapat data yang ditemukan</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($queryBuku as $data) : ?>
                        <tr>
                            <td><?= $data->id_buku ?></td>
                            <td><?= $data->kategori ?></td>
                            <td><?= $data->nama_buku ?></td>
                            <td><?= $data->harga ?></td>
                            <td><?= $data->stok ?></td>
                            <td><?= $data->penerbit ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . "/layouts/footer.php"; ?>