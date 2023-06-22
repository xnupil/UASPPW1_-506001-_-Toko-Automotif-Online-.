<?php
// Konfigurasi koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "toko_sparepart";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("connection failed: " . mysqli_connect_error());
    }
    echo "connected succesfully";