<?php

function alertsForCRUD($conn, $query, $message, $url)
{
    if (mysqli_query($conn, $query)) {
        $_SESSION['notification'] = [
            'type' => [
                'success',
                'success'
            ],
            'message' => $message
        ];
        header("Location: $url");
        exit();
    } else {
        $_SESSION['notification'] = [
            'type' => [
                'danger',
                'warning'
            ],
            'message' => $message
        ];
    }
}

function successAlerts($message)
{
    $_SESSION['notification'] = [
        'type' => [
            'success',
            'success'
        ],
        'message' => $message
    ];
}


function warningAlerts($message)
{
    $_SESSION['notification'] = [
        'type' => [
            'danger',
            'warning'
        ],
        'message' => $message
    ];
}
