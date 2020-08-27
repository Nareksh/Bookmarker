<?php
    $mysqli = new mysqli(DB_URL,DB_USER,DB_PASS,DB_NAME);

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
?>