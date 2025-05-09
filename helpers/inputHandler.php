<?php

function inputData($conn, $data)
{
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}
