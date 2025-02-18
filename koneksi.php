<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_spp";

$koneksi = new mysqli($hostname, $username, $password, $database);

if ($koneksi) {
    echo "<br>Berhasil Terhubung</br>";
}