<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ptpn_magang1'; 

    $koneksi = mysqli_connect($server, $username, $password, $database);
    if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }