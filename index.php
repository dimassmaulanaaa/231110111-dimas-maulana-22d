<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Dimas Maulana" />

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />

	<title>MyBiodata by Dimas Maulana</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
	<!-- HEADER -->
	<?php require_once 'layouts/header.html'; ?>

	<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" id="navbar" style="margin-top: -56px;">
		<div class="container-fluid tabs-container mx-2">
			<a class="navbar-brand pe-1" href="index.php">B I O D A T A</a>
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent"
				aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto pe-2">
					<li class="nav-item">
						<a class="nav-link" href="views/index.php#about-me">About Me</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="views/index.php#my-project">My Project</a>
					</li>
				</ul>
				<ul class="navbar-nav me-0 d-flex flex-row">
					<li class="nav-item">
						<a class="nav-link text-white ps-0 ps-lg-5 pe-2" href="http://wa.me/+6287889198491" target="_blank"><i class="bi bi-whatsapp"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white px-2" href="https://www.instagram.com/dimassmaulanaaa/" target="_blank"><i class="bi bi-instagram"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white ps-2 pe-0" href="https://github.com/dimassmaulanaaa" target="_blank"><i class="bi bi-github"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

</body>

</html>