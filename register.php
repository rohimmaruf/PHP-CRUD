<?php
require_once "koneksi.php";
// Sambungkan ke database
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "nama_database";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Periksa koneksi
// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// }

// Cek jika form register telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    

    // Hash password sebelum disimpan di database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memasukkan data pengguna baru ke dalam database
    $sql = "INSERT INTO users (username, password,role) VALUES ('$username', '$hashed_password', '$role')";

    if ($conn->query($sql) === TRUE) {
        // Registrasi berhasil
        echo "Pengguna berhasil didaftarkan. <a href='index.php'>Login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
