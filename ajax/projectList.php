<?php

require_once '../controllers/projects/read.php';

$projectRead = new ProjectRead($conn);

$project = $projectRead->getAll();

$keyword = $_GET['search-project-keyword'];
$project = $projectRead->getSearchData($keyword);

?>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 pb-5">
    <?php $i = 1; ?>
    <?php foreach ($project as $projectRow) { ?>
        <div class="col">
            <div class="card h-100">
                <img src="../assets/img/<?= htmlspecialchars($projectRow['project_photo']) ?>" class="card-img-top" alt="Project-<?= $i; ?>" />
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($projectRow['project_category']) ?></h5>
                    <p class="card-text"><?= htmlspecialchars($projectRow['project_details']) ?></p>
                </div>
                <div class="dropdown d-flex justify-content-end pb-2 pe-2">
                    <button id="dropdown-menu-button" class="btn btn-circular-secondary btn-round dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list"></i> </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdown-menu-button">
                        <li><a class="dropdown-item" href="projectUpdate.php?project_id=<?= htmlspecialchars($projectRow["project_id"]) ?>">Edit</a></li>
                        <li><a class="dropdown-item" href="../controllers/projects/delete.php?project_id=<?= htmlspecialchars($projectRow["project_id"]) ?>">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php $i++; ?>
    <?php } ?>
</div>