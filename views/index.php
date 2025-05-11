<?php

require_once '../controllers/profiles/read.php';
require_once '../controllers/projects/read.php';
require_once '../controllers/projects/create.php';

// Inisialisasi model
$biodataRead = new BiodataRead($conn);
$projectRead = new ProjectRead($conn);

// Ambil data
$biodata = $biodataRead->getAll();
$project = $projectRead->getAll();

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Dimas Maulana" />

	<link rel="icon" href="../favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="../apple-touch-icon.png" />

	<title>Home | MyBiodata</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
	<!-- NAVBAR -->
	<?php require_once '../layouts/navbar.html'; ?>

	<!-- ALERTS -->
	<?php require_once 'partials/alert.php'; ?>

	<!-- MAIN -->
	<main>
		<!-- About Me Section -->
		<section id="about-me" aria-labelledby="about-me-heading">
			<div class="row mx-lg-5 mx-sm-2 mt-3 mt-md-4 mt-lg-5">
				<div class="col-sm-4 text-center mb-2 p-2">
					<img
						src="../assets/img/<?= htmlspecialchars($biodata['profile_photo']) ?>"
						height="333px"
						width="333px"
						class="img-thumbnail object-fit-cover"
						alt="Profile-Picture-1" />
				</div>
				<div class="col p-2">
					<dl class="row mx-auto">
						<dt class="col-xl-2 col-md-4 col-sm-3">Name</dt>
						<dd class="col-xl-10 col-md-6 col-sm-8"><?= htmlspecialchars($biodata['name']) ?></dd>
						<hr />

						<dt class="col-xl-2 col-md-4 col-sm-3">Place of Birth</dt>
						<dd class="col-xl-10 col-md-6 col-sm-8"><?= htmlspecialchars($biodata['place_of_birth']); ?></dd>
						<hr />

						<dt class="col-xl-2 col-md-4 col-sm-3">Date of Birth</dt>
						<dd class="col-xl-10 col-md-6 col-sm-8"><?= htmlspecialchars($biodata['date_of_birth']); ?></dd>
						<hr />

						<dt class="col-xl-2 col-md-4 col-sm-3">Gender</dt>
						<dd class="col-xl-10 col-md-6 col-sm-8"><?= htmlspecialchars($biodata['gender']); ?></dd>
						<hr />

						<dt class="col-xl-2 col-md-4 col-sm-3">Address</dt>
						<dd class="col-xl-10 col-md-6 col-sm-8"><?= htmlspecialchars($biodata['address']); ?></dd>
						<hr />

						<dt class="col-xl-2 col-md-4 col-sm-3">Telephone</dt>
						<dd class="col-xl-10 col-md-6 col-sm-8"><?= htmlspecialchars($biodata['telephone']); ?></dd>
						<hr />

						<dt class="col-xl-2 col-md-4 col-sm-3">Email</dt>
						<dd class="col-xl-10 col-md-6 col-sm-8"><?= htmlspecialchars($biodata['email']); ?></dd>
						<hr />
					</dl>
					<div class="d-grid d-flex justify-content-end w-100">
						<a href="profileUpdate.php?personal_id=<?= htmlspecialchars($biodata['personal_id']) ?>" type="button" class="btn btn-primary me-0">Edit Profile</a>
					</div>
				</div>
			</div>
		</section>

		<!-- My Project Section -->
		<section id="my-project" aria-labelledby="my-project-heading">
			<div class="container-fluid mt-5 mb-0 mx-0 p-0">
				<div class="row">
					<div class="col">
						<h1 id="my-project-heading">My Project</h1>
					</div>
					<div class="col d-none d-md-block"></div>
					<div class="col my-auto">
						<!-- Form Search -->
						<form action="#my-project" method="POST" role="search">
							<div class="input-group">
								<input id="search-project-input" class="form-control" type="search" name="search-project-keyword" placeholder="Search" autocomplete="off" aria-label="Search" />
							</div>
						</form>
					</div>
				</div>
			</div>
			<hr class="mt-1 mt-md-2 mb-3 mb-md-4">
			<div id="project-list">
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
			</div>
			<div class="d-grid d-flex justify-content-center w-100 pb-5">
				<button type="button" class="btn btn-primary me-0" data-bs-toggle="modal" data-bs-target="#newProjectModal">
					Add New Project
				</button>
			</div>
		</section>
	</main>

	<!-- FOOTER -->
	<?php require_once '../layouts/footer.html'; ?>

	<!-- FORM ADD NEW PROJECT -->
	<?php require_once 'projectCreate.php'; ?>

	<!-- MODAL -->
	<?php require_once 'partials/modal.php'; ?>

	<!-- JAVASCRIPT -->
	<script src="../assets/js/bootstrap.bundle.js"></script>
	<script src="../assets/js/jquery-3.7.1.min.js"></script>
	<script src="../assets/js/script.js"></script>
</body>

</html>