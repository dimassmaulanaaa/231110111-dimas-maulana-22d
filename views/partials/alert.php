<?php if (isset($_SESSION['notification'])): ?>
    <div class="alert alert-<?= $_SESSION['notification']['type'][0] ?> alert-dismissible fade show sticky-top text-center mx-auto py-3 px-4 px-sm-5" role="alert">
        <h2 class="text-capitalize"><?= $_SESSION['notification']['type'][1] ?>!</h2>
        <hr />
        <p><?= $_SESSION['notification']['message'] ?></p>
        <button type="button" class="btn btn-sm btn-<?= $_SESSION['notification']['type'][0] ?> mt-3 mx-auto px-3" data-bs-dismiss="alert" aria-label="Close">
            <strong>Close</strong>
        </button>
    </div>
    <?php unset($_SESSION['notification']); ?>
<?php endif; ?>