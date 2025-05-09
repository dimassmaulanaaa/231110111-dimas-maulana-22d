<?php

require_once '../config/db.php';

class BiodataRead
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll()
    {
        $query = "SELECT * FROM biodata";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_assoc($result);
    }
}
