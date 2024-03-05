<?php
// Koneksi kedatabse
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "tess";

$conn = new mysqli($servername, $username, $password, $db_name);
// Periksa koneksi
if($conn->connect_error){
    echo "berhasil";
    die("koneksi gagal : ".$conn->connect_error);
}


?>