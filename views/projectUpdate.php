<?php

require_once '../controllers/projects/read.php';
require_once '../controllers/projects/update.php';

$project_id = isset($_GET['project_id']) ? (int)$_GET['project_id'] : 0;
$query = "SELECT * FROM project WHERE project_id = $project_id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Dimas Maulana" />

	<link rel="icon" href="../favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="../apple-touch-icon.png" />

	<title>Edit Project | MyBiodata</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
	<!-- MAIN -->
	<main>
		<section id="about-me" aria-labelledby="about-me-heading" class="pt-0">
			<form class="needs-validation" action="" method="POST" enctype="multipart/form-data">
				<div class="row mx-lg-5 mx-sm-2 py-5">
					<div class="col-sm-4 text-center mb-2 p-2">
						<img
							src="../assets/img/<?= htmlspecialchars($data['project_photo']) ?>"
							height="333px"
							width="333px"
							class="img-thumbnail object-fit-cover"
							alt="Profile-Picture-1" />
						<br />
						<div class="mb-3">
							<label class="form-label visually-hidden" for="oldProjectPhoto">Choose File</label>
							<input
								type="hidden"
								class="form-control visually-hidden"
								id="oldProjectPhoto"
								name="oldProjectPhoto"
								value="<?= htmlspecialchars($data['project_photo']) ?>"
								accept="image/*">
							<input
								type="file"
								class="form-control visually-hidden"
								id="photo"
								name="projectPhoto"
								accept="image/*">
							<button id="choose-file-button" type="button" class="btn btn-secondary btn-sm mt-2 w-75">Changes Profile Picture</button>
						</div>
					</div>
					<div class="col p-2">
						<dl class="row mx-auto">
							<label class="form-label col-xl-2 col-md-4 col-sm-3 mb-2" for="category"><strong>Category</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-9 mb-3">
								<input
									type="text"
									class="form-control"
									id="category"
									name="category"
									placeholder="e.g., John Cena"
									value="<?= htmlspecialchars($data['project_category']) ?>"
									required />
							</div>
							<hr />

							<label class="form-label col-xl-2 col-md-4 col-sm-3 mb-2" for="details"><strong>Details</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-9 mb-3">
								<textarea
									type="text"
									class="form-control"
									id="details"
									name="details"
									placeholder="e.g., Graphic Designer"
									required><?= htmlspecialchars($data['project_details']) ?></textarea>
							</div>
							<hr />
						</dl>
						<div class="d-grid d-flex justify-content-end w-100">
							<button type="submit" class="btn btn-primary me-2" name="submitUpdateProject">Save Changes</button>
							<button
								type="button"
								class="btn btn-outline-secondary me-0"
								data-bs-toggle="modal"
								data-bs-target="#discardConfirmModal">
								Discard Changes
							</button>
						</div>
					</div>
				</div>
			</form>
		</section>
	</main>

	<!-- FOOTER -->
	<?php require_once '../layouts/footer.html'; ?>

	<!-- MODAL -->
	<?php require_once 'partials/modal.php'; ?>

	<!-- JAVASCRIPT -->
	<script src="../assets/js/bootstrap.bundle.js"></script>
	<script src="../assets/js/script.js"></script>
</body>

</html>