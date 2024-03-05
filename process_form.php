<?php
    require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

 
    // Di sini Anda dapat menyimpan data ke dalam database atau melakukan tindakan lainnya sesuai kebutuhan
    $sql = "INSERT INTO addres (nama, email, message) VALUE ('$name', '$email', '$message')";
    // Sebagai contoh, cetak data yang diterima
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
    if ($conn->query($sql) === TRUE) {
        // Registrasi berhasil
        echo "Data Berhasil Disimpan <a href='input_data.php'>Lanjut</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Jika halaman ini diakses langsung tanpa melalui form, arahkan kembali ke halaman form
    header("Location: input_data.php");
    exit;
}
?>
