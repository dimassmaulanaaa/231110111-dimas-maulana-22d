<?php
session_start();

require_once '../config/db.php';
require_once '../helpers/alertHandler.php';
require_once '../helpers/inputHandler.php';
require_once '../helpers/uploadHandler.php';

if (isset($_POST['submitAddProject'])) {
    $category = inputData($conn, $_POST['category']);
    $details = inputData($conn, $_POST['details']);
    $projectPhoto = uploadProjectPhoto();

    if (!is_string($projectPhoto)) {
        switch ($projectPhoto) {
            case 1:
                warningAlerts('Please upload an image.');
                break;
            case 2:
                warningAlerts('Something went wrong while uploading your project.');
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

    $query = "INSERT INTO project VALUES ('', '$category', '$details', '$projectPhoto')";

    alertsForCRUD($conn, $query, "Data has been added", "index.php");
}
