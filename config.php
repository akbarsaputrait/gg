<?php

$server = "localhost";
$user = "yudhadb";
$password = "b5p012u7Teps7Bli";
$nama_database = "yudhadb";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>