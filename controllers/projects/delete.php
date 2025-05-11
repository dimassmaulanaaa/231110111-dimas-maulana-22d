<?php
session_start();

require_once '../../config/db.php';
require_once '../../helpers/alertHandler.php';

if (isset($_GET['project_id'])) {
    $project_id = (int)$_GET['project_id'];
    $query = "DELETE FROM project WHERE project_id = $project_id";

    alertsForCRUD($conn, $query, "Data has been deleted", "../../views/index.php");
}
