<?php if (isset($_SESSION['berhasil'])) : ?>
    <div class="alert alert-<?= ($_SESSION['berhasil']['type']) ? 'success' : 'danger' ?> alert-dismissible fade show mt-3" role="alert">
        <?= $_SESSION['berhasil']['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['berhasil']); ?>
<?php endif; ?>