<?php
session_start();

// Cek jika pengguna belum login, arahkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?></h2>
    <h2>Kamu Masuk sebagai, <?php echo $role; ?></h2>


    <p>Ini Adalah halaman Dashboard</p>
    <?php if ($role === 'Admin'): ?>
        <!-- Tampilkan fitur khusus untuk admin -->
        <p>Admin dashboard content goes here</p>
        <a href="input_data.php">Halaman Input Data</a><br><br>
        <a href="lihat_data.php">Halaman Lihat Data</a><br><br>

    <?php else: ?>
        <!-- Tampilkan fitur khusus untuk user -->
        <p>User dashboard content goes here.</p>
    <?php endif; ?>
    <a href="logout.php">Logout</a>
</body>
</html>
