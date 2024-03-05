<?php
require_once "koneksi.php";
session_start();
// Memanggil file koneksi


// Cek jika form login telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Anda bisa menambahkan validasi username dan password di sini
    $username = $_POST['username'];
    $password = $_POST['password'];

    // query untuk mencari pengguna dengan username yang diberika
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    // Bikin kondisi kembali jika pengguna ditemukan
    if($result->num_rows == 1){
        // Jika pengguna ditemukan periksa password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])){
            // Password cocok masuk ke sesi login
            $_SESSION['username'] = $username;
            $_SESSION['role']= $row['role'];
            header("Location: Dashboard.php");
            exit;
        }else {
            // Jika password salah
            $error = "Password Salah";
            echo $error;
        }
        // $erro1= "username Salah";
        // echo $erro1;
    }
}
$conn->close();
?>
