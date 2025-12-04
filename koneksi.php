<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_bukutamu";

    $koneksi = new mysqli($server, $username, $password, $database);
    if (!$koneksi) {
        echo "Koneksi Gagal: ";
    }
?>