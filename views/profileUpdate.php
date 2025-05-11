<?php

require_once '../controllers/profiles/read.php';
require_once '../controllers/profiles/update.php';

$biodataRead = new BiodataRead($conn);
$biodata = $biodataRead->getAll();

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Dimas Maulana" />

	<link rel="icon" href="../favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="../apple-touch-icon.png" />

	<title>Edit Profile | MyBiodata</title>

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
							src="../assets/img/<?= htmlspecialchars($biodata['profile_photo']) ?>"
							height="333px"
							width="333px"
							class="img-thumbnail object-fit-cover"
							alt="Profile-Picture-1" />
						<br />
						<div class="mb-3">
							<label class="form-label visually-hidden" for="oldProfilePhoto">Choose File</label>
							<input
								type="hidden"
								class="form-control visually-hidden"
								id="oldProfilePhoto"
								name="oldProfilePhoto"
								value="<?= htmlspecialchars($biodata['profile_photo']) ?>"
								accept="image/*">
							<input
								type="file"
								class="form-control visually-hidden"
								id="photo"
								name="profilePhoto"
								accept="image/*">
							<button id="choose-file-button" type="button" class="btn btn-secondary btn-sm mt-2 w-75">Changes Profile Picture</button>
						</div>
					</div>
					<div class="col p-2">
						<dl class="row mx-auto">
							<label class="form-label col-xl-2 col-md-4 col-sm-3 mb-2" for="name"><strong>Name</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-9 mb-3">
								<input
									type="text"
									class="form-control"
									id="name"
									name="name"
									placeholder="e.g., John Cenna"
									value="<?= htmlspecialchars($biodata['name']) ?>"
									required />
							</div>
							<hr />

							<label class="col-xl-2 col-md-4 col-sm-3 mb-2" for="placeOfBirth"><strong>Place of Birth</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-9 mb-3">
								<input
									type="text"
									class="form-control"
									id="placeOfBirth"
									name="placeOfBirth"
									placeholder="e.g., Los Angeles"
									value="<?= htmlspecialchars($biodata['place_of_birth']) ?>"
									required />
							</div>
							<hr />

							<label class="col-xl-2 col-md-4 col-sm-3 mb-2" for="dateOfBirth"><strong>Date of Birth</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-9 mb-3">
								<input
									type="date"
									class="form-control"
									id="dateOfBirth"
									name="dateOfBirth"
									value="<?= htmlspecialchars($biodata['date_of_birth']) ?>"
									required />
							</div>
							<hr />

							<?php $genderSelected = $biodata['gender']; ?>
							<label class="col-xl-2 col-md-4 col-sm-3 mb-2" for="gender"><strong>Gender</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-9 mb-3">
								<select class="form-select" id="gender" name="gender" aria-label="Default select example" required>
									<option value="Male" <?php if ($genderSelected === 'Male') echo 'selected'; ?>>Male</option>
									<option value="Female" <?php if ($genderSelected === 'Female') echo 'selected'; ?>>Female</option>
								</select>
							</div>
							<hr />

							<label class="col-xl-2 col-md-4 col-sm-3 mb-2" for="address"><strong>Address</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-9 mb-3">
								<input
									type="text"
									class="form-control"
									id="address"
									name="address"
									placeholder="e.g., Los Angeles, California"
									value="<?= htmlspecialchars($biodata['address']) ?>"
									required />
							</div>
							<hr />

							<label class="col-xl-2 col-md-4 col-sm-3 mb-2" for="telephone"><strong>Telephone</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-8 mb-3">
								<input
									type="tel"
									class="form-control"
									id="telephone"
									name="telephone"
									pattern="(\+62|0)[0-9]{10,11}"
									placeholder="e.g., +628123456789 or 08123456789"
									value="<?= htmlspecialchars($biodata['telephone']) ?>"
									required />
							</div>
							<hr />

							<label class="col-xl-2 col-md-4 col-sm-3 mb-2" for="email"><strong>Email</strong></label>
							<div class="col-xl-10 col-md-8 col-sm-8 mb-3">
								<input
									type="email"
									class="form-control"
									id="email"
									name="email"
									placeholder="e.g., john.cenna@gmail.com"
									value="<?= htmlspecialchars($biodata['email']) ?>"
									aria-describedby="emailHelp"
									required />
							</div>
						</dl>
						<div class="d-grid d-flex justify-content-end w-100">
							<button
								type="submit"
								class="btn btn-primary me-2"
								name="submitUpdateProfile">
								Save Changes
							</button>
							<button
								type="button"
								class="btn btn-outline-secondary me-0"
								data-bs-toggle="modal"
								data-bs-target="#discardConfirmModal">
								Discard Changes
							</button>
						</div>
						<!-- MODAL -->
						<?php require_once 'partials/modal.php'; ?>
					</div>
				</div>
			</form>
		</section>
	</main>

	<!-- FOOTER -->
	<?php require_once '../layouts/footer.html'; ?>

	<!-- JAVASCRIPT -->
	<script src="../assets/js/bootstrap.bundle.js"></script>
	<script src="../assets/js/script.js"></script>
</body>

</html>