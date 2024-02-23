<?php

require __DIR__ . "/functions/functions.php";
$judulLaman = "Admin";
$queryBuku = tampilData("SELECT * FROM tabel_buku");
$countBuku = count($queryBuku);
$queryPenerbit = tampilData("SELECT * FROM tabel_penerbit");
$countPenerbit = count($queryPenerbit);
?>
<?php require __DIR__ . "/layouts/resources.php"; ?>

<?php require __DIR__ . "/layouts/navbar.php"; ?>

<div class="container">
    <div id="alert">
        <?php require __DIR__ . '/layouts/alert.php'; ?>
    </div>
    <h1 class="mt-2">Tambah Buku</h1>
    <a href="<?= $hostToRoot ?>tambah-buku"><button class="btn btn-success mt-3">Tambah Buku</button></a>
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
                    <th>Aksi</th>
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
                            <?php if ($data->stok <= 5) : ?>
                                <td><span class="text-danger"><b><?= $data->stok ?> (Perlu Re-Stock)</b></span></td>
                            <?php else : ?>
                                <td><?= $data->stok ?></td>
                            <?php endif; ?>
                            <td><?= $data->penerbit ?></td>
                            <td>
                                <a href="<?= $hostToRoot ?>edit-buku?id_buku=<?= $data->id_buku ?>"><button class="btn btn-info btn-sm">Edit</button></a>
                                <a href="<?= $hostToRoot ?>functions/hapus-buku?id_buku=<?= $data->id_buku ?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data buku <?= $data->nama_buku ?>?')">Hapus</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <h1 class="mt-2">Tambah Penerbit</h1>
    <a href="<?= $hostToRoot ?>tambah-penerbit"><button class="btn btn-success mt-3">Tambah Penerbit</button></a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>ID Penerbit</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($countPenerbit < 1) : ?>
                    <tr>
                        <td colspan="6" align="center">Tidak terdapat data yang ditemukan</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($queryPenerbit as $data) : ?>
                        <tr>
                            <td><?= $data->id_penerbit ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->alamat ?></td>
                            <td><?= $data->kota ?></td>
                            <td><?= $data->telepon ?></td>
                            <td>
                                <a href="<?= $hostToRoot ?>edit-penerbit?id_penerbit=<?= $data->id_penerbit ?>"><button class="btn btn-info btn-sm">Edit</button></a>
                                <a href="<?= $hostToRoot ?>functions/hapus-penerbit?id_penerbit=<?= $data->id_penerbit ?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data penerbit <?= $data->nama ?>?')">Hapus</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . "/layouts/footer.php"; ?>