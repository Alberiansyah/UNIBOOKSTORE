<?php

require __DIR__ . "/functions/functions.php";
$judulLaman = "Pengadaan";
$queryBuku = tampilData("SELECT * FROM tabel_buku WHERE stok <=5 ");
$countBuku = count($queryBuku);
?>
<?php require __DIR__ . "/layouts/resources.php"; ?>

<?php require __DIR__ . "/layouts/navbar.php"; ?>


<div class="container">
    <h1 class="mt-2">Pengadaan Buku</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th>Nama Buku</th>
                    <th>Penerbit</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($countBuku < 1) : ?>
                    <tr>
                        <td colspan="6" align="center">Tidak terdapat stok yang perlu ditambahkan.</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($queryBuku as $data) : ?>
                        <tr>
                            <td><?= $data->nama_buku ?></td>
                            <td><?= $data->penerbit ?></td>
                            <?php if ($data->stok <= 5) : ?>
                                <td><span class="text-danger"><b><?= $data->stok ?> (Perlu Re-Stock)</b></span></td>
                            <?php else : ?>
                                <td><?= $data->stok ?></td>
                            <?php endif; ?>
                            <td>
                                <a href="<?= $hostToRoot ?>tambah-stok?id_buku=<?= $data->id_buku ?>"><button class="btn btn-success btn-sm">Tambah</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php require __DIR__ . "/layouts/footer.php"; ?>