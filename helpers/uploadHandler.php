<?php

function uploadProjectPhoto()
{
    $fileName = $_FILES['projectPhoto']['name'];
    $fileSize = $_FILES['projectPhoto']['size'];
    $tmpName = $_FILES['projectPhoto']['tmp_name'];

    if ($_FILES['projectPhoto']['error'] === 4) {
        return 1;
    }

    if ($_FILES['projectPhoto']['error'] !== UPLOAD_ERR_OK) {
        return 2;
    }

    if ($fileSize > 1024 * 1024) {
        return 3;
    }

    $ext = explode('.', $fileName);
    $ext = strtolower(end($ext));
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $ext;
    $allowedExt = ['jpg', 'jpeg', 'png'];
    if (!in_array($ext, $allowedExt)) {
        return 4;
    }

    $image_info = getimagesize($tmpName);
    $ratio = $image_info[1] / $image_info[0];
    if (abs($ratio - 1.25) > 0.02) {
        return 5;
    }

    move_uploaded_file($tmpName, '../assets/img/' . $newFileName);

    return $newFileName;
}

function uploadProfilePhoto()
{
    $fileName = $_FILES['profilePhoto']['name'];
    $fileSize = $_FILES['profilePhoto']['size'];
    $tmpName = $_FILES['profilePhoto']['tmp_name'];

    if ($_FILES['profilePhoto']['error'] === 4) {
        return 1;
    }

    if ($_FILES['profilePhoto']['error'] !== UPLOAD_ERR_OK) {
        return 2;
    }

    if ($fileSize > 1024 * 1024) {
        return 3;
    }

    $ext = explode('.', $fileName);
    $ext = strtolower(end($ext));
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $ext;
    $allowedExt = ['jpg', 'jpeg', 'png'];
    if (!in_array($ext, $allowedExt)) {
        return 4;
    }

    $image_info = getimagesize($tmpName);
    $ratio = $image_info[1] / $image_info[0];
    if (abs($ratio - 1.00) > 0.02) {
        return 5;
    }

    move_uploaded_file($tmpName, '../assets/img/' . $newFileName);

    return $newFileName;
}
