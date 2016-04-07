<?php

// This script follows PSR-2

try {
    // Connect to local PostgreSQL instance
    $link = pg_Connect("host=127.0.0.1 dbname=app user=app password=password");
    $result = pg_exec($link, "select * from sample");
    $rowCount = pg_numrows($result);

    if ($rowCount == 1) {
        // Give the all clear
        echo 'all good';
    } else {
        // Fail
        echo 'Something failed :O';
        exit(1);
    }
} catch (\Exception $e) {
    var_dump($e->getMessage());
    exit(1);
}
