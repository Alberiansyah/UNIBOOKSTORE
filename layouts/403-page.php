<?php require __DIR__ . "/../koneksi/koneksi.php";

header($_SERVER["SERVER_PROTOCOL"] . " 403 Forbidden", true, 403);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>403</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>


<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">403</h1>
            <p class="fs-3"> <span class="text-danger">Opps! </span></p>
            <p class="lead">
                Anda tidak memiliki akses!
            </p>
            <a href="<?= $hostToRoot ?>index" class="btn btn-primary">Pergi ke Beranda</a>
        </div>
    </div>
</body>


</html>