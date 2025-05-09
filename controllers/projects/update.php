<?php
session_start();

require_once '../config/db.php';
require_once '../helpers/alertHandler.php';
require_once '../helpers/inputHandler.php';
require_once '../helpers/uploadHandler.php';

$project_id = isset($_GET['project_id']) ? (int)$_GET['project_id'] : 0;

if (isset($_POST['submitUpdateProject'])) {
	$category = inputData($conn, $_POST['category']);
	$details = inputData($conn, $_POST['details']);
	$oldProjectPhoto = $_POST['oldProjectPhoto'];
	$projectPhoto = uploadProjectPhoto();

	if ($projectPhoto === 1) {
		$projectPhoto = $oldProjectPhoto;
	} else {
		if (!is_string($projectPhoto)) {
			switch ($projectPhoto) {
				case 2:
					warningAlerts('Something went wrong while updating your project.');
					break;
				case 3:
					warningAlerts('Please upload an image smaller than 1MB.');
					break;
				case 4:
					warningAlerts('Please upload JPG, JPEG, or PNG images only.');
					break;
				case 5:
					warningAlerts('Please upload an image with a 4:5 aspect ratio.');
					break;
			}
			header("Location: index.php");
			exit();
		}
	}

	$query = "UPDATE project SET 
			  project_category = '$category',
              project_details = '$details',
			  project_photo = '$projectPhoto'
              WHERE project_id = $project_id";

	alertsForCRUD($conn, $query, "Data has been updated", "index.php");
}
