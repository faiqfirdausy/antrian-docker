<?php
// set default timezone
date_default_timezone_set("ASIA/JAKARTA");

// panggil file parameter koneksi database
////////require_once "database.php";
$sql_details = array(
    'user' => 'root',
    'pass' => 'rootpassword',
    'db'   => 'antrian_db',
    'host' => 'db'
);

// koneksi database
$mysqli = new mysqli('db', 'root', 'rootpassword', 'antrian_db');

// cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}
?>