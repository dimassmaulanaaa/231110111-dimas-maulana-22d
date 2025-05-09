<?php
session_start();

require_once '../config/db.php';
require_once '../helpers/alertHandler.php';
require_once '../helpers/inputHandler.php';
require_once '../helpers/uploadHandler.php';

$personal_id = isset($_GET['personal_id']) ? (int)$_GET['personal_id'] : 0;
$query = "SELECT * FROM biodata WHERE personal_id = $personal_id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submitUpdateProfile'])) {
	$name = inputData($conn, $_POST['name']);
	$placeOfBirth = inputData($conn, $_POST['placeOfBirth']);
	$dateOfBirth = inputData($conn, $_POST['dateOfBirth']);
	$gender = inputData($conn, $_POST['gender']);
	$address = inputData($conn, $_POST['address']);
	$telephone = inputData($conn, $_POST['telephone']);
	$email = inputData($conn, $_POST['email']);
	$oldProfilePhoto = $_POST['oldProfilePhoto'];
	$profilePhoto = uploadProfilePhoto();

	if ($profilePhoto === 1) {
		$profilePhoto = $oldProfilePhoto;
	} else {
		if (!is_string($profilePhoto)) {
			switch ($profilePhoto) {
				case 2:
					warningAlerts('Something went wrong while updating your profile.');
					break;
				case 3:
					warningAlerts('Please upload an image smaller than 1MB.');
					break;
				case 4:
					warningAlerts('Please upload JPG, JPEG, or PNG images only.');
					break;
				case 5:
					warningAlerts('Please upload an image with a 1:1 aspect ratio.');
					break;
			}
			header("Location: index.php");
			exit();
		}
	}

	$query = "UPDATE biodata SET 
              name = '$name',
			  place_of_birth = '$placeOfBirth',
			  date_of_birth = '$dateOfBirth',
			  gender = '$gender',
			  address = '$address',
			  telephone = '$telephone',
              email = '$email',
			  profile_photo = '$profilePhoto'
              WHERE personal_id = $personal_id";

	alertsForCRUD($conn, $query, "Data has been updated", "index.php");
}
