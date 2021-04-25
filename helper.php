<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'lutfi');

    $db_connect = mysqli_connect(HOST, USER, PASS, DB) or die ('Tidak terhubung');

    header('Content-Type: application/json');
?>