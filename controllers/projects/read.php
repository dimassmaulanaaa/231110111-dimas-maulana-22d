<?php

require_once '../config/db.php';

class ProjectRead
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll()
    {
        $query = "SELECT * FROM project ORDER BY project_id DESC";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getSearchData($keyword)
    {
        $keyword = mysqli_real_escape_string($this->conn, $keyword);
        $query = "SELECT * FROM project WHERE 
              project_category LIKE '%$keyword%' OR 
              project_details LIKE '%$keyword%'
              ORDER BY project_id DESC";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
