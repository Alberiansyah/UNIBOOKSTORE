<?php require __DIR__ . "/../koneksi/koneksi.php";

header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error", true, 500);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>500</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>


<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">500</h1>
            <p class="fs-3"> <span class="text-danger">Opps! </span>Halaman ini masih dalam tahap perbaikan.</p>
            <p class="lead">
                Layanan akan segera kembali saat perbaikan selesai.
            </p>
            <a href="<?= $hostToRoot ?>index" class="btn btn-primary">Pergi ke Beranda</a>
        </div>
    </div>
</body>


</html>